<?php
/**
 * Update Media Link Handler
 * Handles AJAX requests to update media paths (for YouTube links etc.)
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['key']) || !isset($input['path'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields.']);
    exit;
}

$key = $input['key'];
$path = $input['path'];

/**
 * Extracts YouTube Video ID from various URL formats
 */
function getYouTubeId($url) {
    $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i';
    if (preg_match($pattern, $url, $match)) {
        return $match[1];
    }
    return null;
}

try {
    // 1. Try updating video_links table first
    $stmt = $pdo->prepare("SELECT id FROM video_links WHERE link_key = ?");
    $stmt->execute([$key]);
    if ($stmt->fetch()) {
        $youtubeId = getYouTubeId($path);
        $embedUrl = $youtubeId ? "https://www.youtube.com/embed/" . $youtubeId : $path;
        
        $stmt = $pdo->prepare("UPDATE video_links SET video_url = ?, embed_url = ?, updated_at = NOW() WHERE link_key = ?");
        $stmt->execute([$path, $embedUrl, $key]);
        
        echo json_encode(['success' => true, 'source' => 'video_links']);
        exit;
    }

    // 2. Try updating media_items table
    $stmt = $pdo->prepare("SELECT id FROM media_items WHERE media_key = ?");
    $stmt->execute([$key]);
    if ($stmt->fetch()) {
        $stmt = $pdo->prepare("UPDATE media_items SET file_path = ?, updated_at = NOW() WHERE media_key = ?");
        $stmt->execute([$path, $key]);
        
        echo json_encode(['success' => true, 'source' => 'media_items']);
        exit;
    }

    echo json_encode(['success' => false, 'message' => 'Media key not found in any registry.']);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
