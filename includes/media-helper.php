<?php
/**
 * Media Helper Functions
 * Fetch media paths from database for dynamic content
 */

// Include database connection
require_once __DIR__ . '/../config/database.php';

/**
 * Get media file path by media key
 * Automatically converts YouTube watch URLs to embed URLs if detected
 * 
 * @param string $media_key Unique identifier for the media
 * @param string $default Default path if media not found
 * @return string File path
 */
function getMediaPath($media_key, $default = '') {
    static $cache = [];
    
    // Return from cache if available
    if (isset($cache[$media_key])) {
        return $cache[$media_key];
    }
    
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare("SELECT file_path FROM media_items WHERE media_key = ? LIMIT 1");
        $stmt->execute([$media_key]);
        $result = $stmt->fetch();
        
        $path = $result ? $result['file_path'] : $default;
        
        // Auto-convert YouTube URLs to embed format if they are watch links
        if (strpos($path, 'youtube.com/watch') !== false || strpos($path, 'youtu.be/') !== false) {
            $youtubeId = extractYouTubeId($path);
            if ($youtubeId) {
                $path = "https://www.youtube.com/embed/" . $youtubeId;
            }
        }
        
        // Cache the result
        $cache[$media_key] = $path;
        
        return $path;
        
    } catch (Exception $e) {
        error_log("Media Helper Error: " . $e->getMessage());
        return $default;
    }
}

/**
 * Extracts YouTube Video ID
 */
function extractYouTubeId($url) {
    $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i';
    if (preg_match($pattern, $url, $match)) {
        return $match[1];
    }
    return null;
}

/**
 * Renders the appropriate media tag (img, video, or iframe)
 * 
 * @param string $media_key The media key to render
 * @param string $classes CSS classes to apply
 * @param array $options Additional options (e.g., ['autoplay' => true, 'muted' => true])
 * @return string HTML output
 */
function renderMedia($media_key, $classes = '', $options = []) {
    $path = getMediaPath($media_key);
    if (!$path) return '';

    $isYoutube = (strpos($path, 'youtube.com/') !== false || strpos($path, 'youtu.be/') !== false || strpos($path, 'youtube-nocookie.com/') !== false);
    $isVimeo = (strpos($path, 'vimeo.com/') !== false);
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $isVideo = in_array($extension, ['mp4', 'webm', 'ogg']);

    if ($isYoutube || $isVimeo) {
        // Handle Video Links (YouTube/Vimeo)
        $embedUrl = $path;
        if ($isYoutube && strpos($path, '/embed/') === false) {
            $id = extractYouTubeId($path);
            $embedUrl = "https://www.youtube.com/embed/" . $id;
        }
        
        // Add parameters for autoplay/loop if needed for background videos
        $params = [];
        if (!empty($options['autoplay'])) $params[] = "autoplay=1";
        if (!empty($options['muted'])) $params[] = "mute=1";
        if (!empty($options['loop'])) {
            $params[] = "loop=1";
            if ($isYoutube) {
                $id = extractYouTubeId($path);
                $params[] = "playlist=" . $id;
            }
        }
        
        if (!empty($params)) {
             $separator = (strpos($embedUrl, '?') === false) ? '?' : '&';
             $embedUrl .= $separator . implode('&', $params);
        }

        return "<iframe src=\"{$embedUrl}\" class=\"{$classes}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    } elseif ($isVideo) {
        // Handle Local Video
        $attr = [];
        if (!empty($options['autoplay'])) $attr[] = "autoplay";
        if (!empty($options['muted'])) $attr[] = "muted";
        if (!empty($options['loop'])) $attr[] = "loop";
        if (!empty($options['playsinline'])) $attr[] = "playsinline";
        if (!empty($options['x-ref'])) $attr[] = "x-ref=\"{$options['x-ref']}\"";
        $attrStr = implode(' ', $attr);
        
        return "<video src=\"{$path}\" class=\"{$classes}\" {$attrStr}></video>";
    } else {
        // Handle Image
        $alt = $options['alt'] ?? '';
        return "<img src=\"{$path}\" class=\"{$classes}\" alt=\"{$alt}\" loading=\"lazy\">";
    }
}

/**
 * Get multiple media paths at once (for performance)
 * 
 * @param array $media_keys Array of media keys
 * @return array Associative array of media_key => file_path
 */
function getMediaPaths($media_keys) {
    static $cache = [];
    
    $results = [];
    $keys_to_fetch = [];
    
    // Check cache first
    foreach ($media_keys as $key) {
        if (isset($cache[$key])) {
            $results[$key] = $cache[$key];
        } else {
            $keys_to_fetch[] = $key;
        }
    }
    
    // Fetch remaining from database
    if (!empty($keys_to_fetch)) {
        try {
            $pdo = getDB();
            $placeholders = str_repeat('?,', count($keys_to_fetch) - 1) . '?';
            $stmt = $pdo->prepare("SELECT media_key, file_path FROM media_items WHERE media_key IN ($placeholders)");
            $stmt->execute($keys_to_fetch);
            
            while ($row = $stmt->fetch()) {
                $path = $row['file_path'];
                // Detect YouTube in bulk fetch too
                if (strpos($path, 'youtube.com/watch') !== false || strpos($path, 'youtu.be/') !== false) {
                    $youtubeId = extractYouTubeId($path);
                    if ($youtubeId) $path = "https://www.youtube.com/embed/" . $youtubeId;
                }
                $results[$row['media_key']] = $path;
                $cache[$row['media_key']] = $path;
            }
            
        } catch (Exception $e) {
            error_log("Media Helper Error: " . $e->getMessage());
        }
    }
    
    return $results;
}

/**
 * Get all media for a specific page
 * 
 * @param string $page Page identifier
 * @return array Array of media items
 */
function getPageMedia($page) {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare("SELECT * FROM media_items WHERE page = ? ORDER BY section, id");
        $stmt->execute([$page]);
        return $stmt->fetchAll();
        
    } catch (Exception $e) {
        error_log("Media Helper Error: " . $e->getMessage());
        return [];
    }
}

/**
 * Check if media exists
 * 
 * @param string $media_key Media key to check
 * @return bool
 */
function mediaExists($media_key) {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM media_items WHERE media_key = ?");
        $stmt->execute([$media_key]);
        return $stmt->fetchColumn() > 0;
        
    } catch (Exception $e) {
        error_log("Media Helper Error: " . $e->getMessage());
        return false;
    }
}

// ============================================
// VIDEO LINK HELPERS
// ============================================

/**
 * Get video link URL by link key
 * 
 * @param string $link_key Unique identifier for the video link
 * @param string $type 'video' for watch URL, 'embed' for embed URL
 * @param string $default Default URL if not found
 * @return string Video URL
 */
function getVideoLink($link_key, $type = 'video', $default = '') {
    static $cache = [];
    
    $cache_key = $link_key . '_' . $type;
    
    // Return from cache if available
    if (isset($cache[$cache_key])) {
        return $cache[$cache_key];
    }
    
    try {
        $pdo = getDB();
        $column = ($type === 'embed') ? 'embed_url' : 'video_url';
        
        $stmt = $pdo->prepare("SELECT $column FROM video_links WHERE link_key = ? LIMIT 1");
        $stmt->execute([$link_key]);
        $result = $stmt->fetch();
        
        $url = $result ? $result[$column] : $default;
        
        // Cache the result
        $cache[$cache_key] = $url;
        
        return $url;
        
    } catch (Exception $e) {
        error_log("Video Link Helper Error: " . $e->getMessage());
        return $default;
    }
}

/**
 * Get video link data (both URLs and metadata)
 * 
 * @param string $link_key Unique identifier for the video link
 * @return array|null Video link data or null if not found
 */
function getVideoLinkData($link_key) {
    static $cache = [];
    
    if (isset($cache[$link_key])) {
        return $cache[$link_key];
    }
    
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare("SELECT * FROM video_links WHERE link_key = ? LIMIT 1");
        $stmt->execute([$link_key]);
        $result = $stmt->fetch();
        
        if ($result) {
            $cache[$link_key] = $result;
        }
        
        return $result ?: null;
        
    } catch (Exception $e) {
        error_log("Video Link Helper Error: " . $e->getMessage());
        return null;
    }
}

/**
 * Get all video links for a specific page
 * 
 * @param string $page Page identifier
 * @return array Array of video links
 */
function getPageVideoLinks($page) {
    try {
        $pdo = getDB();
        $stmt = $pdo->prepare("SELECT * FROM video_links WHERE page = ? ORDER BY section, id");
        $stmt->execute([$page]);
        return $stmt->fetchAll();
        
    } catch (Exception $e) {
        error_log("Video Link Helper Error: " . $e->getMessage());
        return [];
    }
}
