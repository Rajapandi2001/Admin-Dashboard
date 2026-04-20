<?php
/**
 * Advanced Visual Media Manager - Midas Touch Admin
 * Split-screen interface with live website preview.
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

// Fetch all media items
$stmt = $pdo->query("SELECT * FROM media_items ORDER BY page ASC, media_key ASC");
$allMedia = $stmt->fetchAll();

// Fetch video links
$stmt = $pdo->query("SELECT id, link_key as media_key, 'video' as media_type, video_url as file_path, page, section, description, created_at, updated_at FROM video_links ORDER BY page ASC, link_key ASC");
$allVideoLinks = $stmt->fetchAll();

// Merge them
$allMedia = array_merge($allMedia, $allVideoLinks);

// Group media by page for the explorer
$mediaByPage = [];
foreach ($allMedia as $item) {
    if (!isset($mediaByPage[$item['page']])) {
        $mediaByPage[$item['page']] = [];
    }
    $mediaByPage[$item['page']][] = $item;
}

// Default page to show in preview
$defaultPage = 'index.php'; // We'll assume index exists or use the first available page
$availablePages = array_keys($mediaByPage);
$selectedPage = $_GET['page'] ?? ($availablePages[0] ?? 'index.php');

// Map "home" to "index" if needed
$targetPage = (strtolower($selectedPage) === 'home') ? 'index' : $selectedPage;

// If the page doesn't have .php extension and it's not a full URL, add it
$previewUrl = (strpos($targetPage, '.php') === false && strpos($targetPage, 'http') === false) ? $targetPage . '.php' : $targetPage;
$previewUrlWithParam = "../" . $previewUrl . "?admin_preview=1";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/fav.png">
    <title>Visual Media Manager - Midas Touch Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; height: 100vh; overflow: hidden; }
        [x-cloak] { display: none !important; }
        .navy-brand-bg { background-color: #1b3666; }
        .sidebar-scroll { height: calc(100vh - 108px); overflow-y: auto; }
        iframe { width: 100%; height: 100%; border: none; }
        .navy-brand-border { border-color: #1b3666; }

        /* Animation Primitives */
        .reveal-item { opacity: 0; transform: translateY(20px); transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-left { opacity: 0; transform: translateX(-30px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
        .revealed .reveal-item { opacity: 1; transform: translateY(0); }
        .revealed .reveal-left { opacity: 1; transform: translateX(0); }
    </style>
</head>
<body class="bg-gray-100 flex flex-col h-screen" x-data="mediaManager()" x-init="init()" :class="{ 'revealed': revealed }">
    
    <?php 
    $currentPageTitle = 'Visual Media Manager';
    $currentPageSubtitle = 'Media Protocol';
    require_once 'includes/navbar.php'; 
    ?>

    <div class="flex flex-1 overflow-hidden">
        
        <!-- Left Sidebar: Media Explorer -->
        <aside class="w-72 bg-white border-r-2 navy-brand-border flex flex-col shrink-0 reveal-left" style="transition-delay: 100ms;">
            <div class="p-6 border-b border-gray-50 shrink-0">
                <h2 class="font-bold text-gray-900">Page Elements</h2>
                <p class="text-xs text-gray-400 mt-0.5">Select an element to replace</p>
            </div>
            
            <!-- Page Selector -->
            <div class="px-6 py-4 border-b border-gray-50 shrink-0 bg-gray-50/30">
                <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2 block">Viewing Registry</label>
                <select 
                    @change="changePage($event.target.value)"
                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-bold text-gray-700 shadow-sm focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                >
                    <?php foreach ($availablePages as $page): ?>
                        <option value="<?php echo $page; ?>" <?php echo $page === $selectedPage ? 'selected' : ''; ?>>
                            <?php echo str_replace('.php', '', ucfirst(str_replace('-', ' ', $page))); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="sidebar-scroll p-4 space-y-2" id="media-list">
                <?php 
                $currentPageMedia = $mediaByPage[$selectedPage] ?? [];
                foreach ($currentPageMedia as $item): 
                    $isYoutube = (strpos($item['file_path'], 'youtube.com') !== false || strpos($item['file_path'], 'youtu.be') !== false);
                    $typeIcon = $isYoutube ? '📺' : ($item['media_type'] === 'video' ? '🎬' : '🖼️');
                ?>
                    <div 
                        class="p-3 rounded-xl border transition-all cursor-pointer group relative"
                        :class="selectedKey === '<?php echo $item['media_key']; ?>' ? 'bg-blue-50 border-blue-400 ring-1 ring-blue-400' : 'bg-white border-gray-100 hover:border-gray-300'"
                        @click="selectMedia('<?php echo $item['media_key']; ?>', '<?php echo $item['file_path']; ?>')"
                        id="item-<?php echo $item['media_key']; ?>"
                    >
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gray-50 rounded-lg flex items-center justify-center text-lg shrink-0 overflow-hidden border border-gray-100">
                                <?php if (!$isYoutube && $item['media_type'] === 'image'): ?>
                                    <img src="../<?php echo $item['file_path']; ?>" class="w-full h-full object-cover">
                                <?php else: ?>
                                    <span><?php echo $typeIcon; ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="overflow-hidden">
                                <h3 class="font-bold text-gray-900 text-xs truncate uppercase tracking-tight"><?php echo str_replace([$selectedPage.'_', '_'], ['', ' '], $item['media_key']); ?></h3>
                                <p class="text-[10px] text-gray-400 truncate"><?php echo basename($item['file_path']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php if (empty($currentPageMedia)): ?>
                    <div class="py-20 text-center">
                        <p class="text-xs text-gray-400 italic">No media items found for this page.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="px-4 pb-4 shrink-0 bg-white border-t border-gray-50 pt-4">
                <a href="dashboard.php" class="w-full flex items-center px-5 py-3 rounded-lg text-[11px] font-bold text-gray-500 hover:text-gray-900 hover:bg-gray-50 uppercase tracking-widest transition-all">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Dashboard
                </a>
            </div>

            <div class="mt-auto p-6 bg-gray-50/50 border-t border-gray-100">
                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest mb-1">Midas Touch School</p>
                <p class="text-[10px] text-gray-600 font-medium leading-relaxed">Portal version 2.5.1 Stable</p>
                <p class="text-[8px] text-gray-400 font-bold uppercase tracking-widest mt-2">developed by LearnLike</p>
            </div>
        </aside>

        <!-- Center: Live Preview -->
        <main class="flex-1 bg-gray-100 relative reveal-item" style="transition-delay: 200ms;">
            <div class="absolute inset-0 m-4 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                <iframe id="preview-frame" src="<?php echo $previewUrlWithParam; ?>"></iframe>
                
                <!-- Overlay when loading -->
                <div x-show="loading" class="absolute inset-0 bg-white bg-opacity-80 flex items-center justify-center z-10" x-transition.opacity>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 border-4 border-blue-600 border-t-transparent rounded-full animate-spin mb-4"></div>
                        <p class="text-sm font-bold text-gray-900">Syncing Preview...</p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Right: Floating Editor Palette -->
        <aside 
            x-show="selectedKey"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            class="w-80 bg-white border-l-2 navy-brand-border shadow-2xl z-20 flex flex-col"
            x-cloak
        >
            <div class="p-6 border-b border-gray-100 flex items-center justify-between shrink-0">
                <div>
                    <h2 class="font-bold text-gray-900">Asset Editor</h2>
                    <p class="text-[10px] text-gray-400 uppercase font-bold tracking-widest mt-1" x-text="selectedKey"></p>
                </div>
                <button @click="deselect()" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto p-6 space-y-8">
                <!-- Visual Preview Section -->
                <div class="space-y-3">
                    <label class="text-xs font-bold text-gray-400 uppercase">Selected Content</label>
                    <div class="aspect-video w-full bg-gray-900 rounded-xl overflow-hidden shadow-inner flex items-center justify-center relative group">
                        <!-- Image Preview -->
                        <template x-if="selectedPath && (assetType === 'IMG' || !selectedPath.includes('youtube'))">
                            <img :src="livePreviewUrl || '../' + selectedPath" class="w-full h-full object-contain">
                        </template>

                        <!-- YouTube Preview -->
                        <template x-if="selectedPath && (selectedPath.includes('youtube.com') || selectedPath.includes('youtu.be'))">
                            <div class="text-center p-4">
                                <span class="text-4xl mb-2 block">📺</span>
                                <p class="text-[10px] text-gray-400">YouTube Video Link</p>
                            </div>
                        </template>

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                             <span class="text-white text-[10px] font-bold uppercase tracking-widest">Active Asset</span>
                        </div>
                    </div>
                </div>

                <!-- Editor Form -->
                <div class="space-y-6">
                    <!-- Tabs -->
                    <div class="flex p-1 bg-gray-100 rounded-lg" x-show="selectedPath">
                        <button type="button" @click="editorTab = 'upload'" :class="editorTab === 'upload' ? 'bg-white shadow-sm text-blue-600' : 'text-gray-500 hover:text-gray-700'" class="flex-1 py-1.5 text-[11px] font-bold uppercase tracking-wider rounded-md transition-all">Upload File</button>
                        <button type="button" @click="editorTab = 'youtube'" :class="editorTab === 'youtube' ? 'bg-white shadow-sm text-blue-600' : 'text-gray-500 hover:text-gray-700'" class="flex-1 py-1.5 text-[11px] font-bold uppercase tracking-wider rounded-md transition-all">YouTube Link</button>
                    </div>

                    <!-- File Upload Tab -->
                    <div x-show="editorTab === 'upload'" class="space-y-4">
                        <div class="p-4 bg-blue-50 border border-blue-100 rounded-xl">
                            <p class="text-xs text-blue-700 font-medium">Replace this asset with a new upload.</p>
                        </div>
                        
                        <form action="upload-handler.php" method="POST" enctype="multipart/form-data" class="space-y-4">
                            <input type="hidden" name="media_key" :value="selectedKey">
                            <input type="hidden" name="return_page" value="<?php echo $selectedPage; ?>">
                            
                            <label class="block w-full cursor-pointer bg-white border-2 border-dashed border-gray-200 hover:border-blue-400 rounded-xl p-8 text-center transition-all group">
                                <span class="text-2xl block mb-2 group-hover:scale-110 transition-transform">📂</span>
                                <span class="text-xs font-bold text-gray-500 block">Click to Browse</span>
                                <span class="text-[9px] text-gray-400 mt-1 block">JPG, PNG, WEBP or MP4</span>
                                <input type="file" name="media_file" class="hidden" @change="handleFileSelect($event)">
                            </label>

                            <button 
                                x-show="isModified" 
                                type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-all shadow-lg shadow-blue-100"
                            >
                                Confirm & Save File
                            </button>
                        </form>
                    </div>

                    <!-- YouTube Link Tab -->
                    <div x-show="editorTab === 'youtube'" class="space-y-4">
                        <form @submit.prevent="updateLink()" class="space-y-4">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-gray-500">YouTube URL / Video ID</label>
                                <input 
                                    type="text" 
                                    x-model="youtubeUrl" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                                    placeholder="https://youtube.com/watch?v=..."
                                >
                            </div>

                            <button 
                                type="submit"
                                :disabled="!youtubeUrl"
                                class="w-full bg-blue-600 hover:bg-blue-700 disabled:bg-gray-200 text-white font-bold py-3 rounded-xl transition-all shadow-lg"
                            >
                                Save Video Link
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Guidance -->
                <div class="bg-gray-50 rounded-xl p-4">
                    <h5 class="text-[10px] font-bold text-gray-400 uppercase mb-2">Editor Tips</h5>
                    <ul class="text-[10px] text-gray-500 space-y-2">
                        <li class="flex items-start">
                            <span class="mr-2">🖱️</span>
                            <span>You can click any element in the preview on the left to select it here.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">🔄</span>
                            <span>Images will preview instantly. Video links will refresh after saving.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

    </div>

    <script>
        function mediaManager() {
            return {
                selectedKey: null,
                selectedPath: null,
                assetType: 'IMG',
                loading: false,
                livePreviewUrl: null,
                isModified: false,
                revealed: false,
                editorTab: 'upload',
                youtubeUrl: '',

                init() {
                    setTimeout(() => this.revealed = true, 100);

                    // Listen for clicks FROM the iframe
                    window.addEventListener('message', (event) => {
                        if (event.data.type === 'MEDIA_SELECTED') {
                            this.selectMedia(event.data.key, event.data.src);
                            this.assetType = event.data.tagName;
                            
                            // Scroll sidebar to the selected item
                            const el = document.getElementById('item-' + event.data.key);
                            if (el) {
                                el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            }
                        }
                    });

                    // Handle iframe load state
                    const iframe = document.getElementById('preview-frame');
                    iframe.onload = () => { this.loading = false; };
                },

                changePage(page) {
                    this.loading = true;
                    this.deselect();
                    window.location.href = 'media.php?page=' + page;
                },

                selectMedia(key, path = '') {
                    this.selectedKey = key;
                    // If we got a path from the iframe click, use it if it's local (not blob)
                    if (path && !path.startsWith('blob:')) {
                         // Clean up absolute URL if it's pointing to our local project
                         this.selectedPath = path.replace(window.location.origin + '/', '').replace('../', '');
                    } else if (!this.selectedKey || this.selectedKey !== key) {
                        // If path wasn't provided or we're switching keys, we'll rely on what's in the sidebar
                        // (Actually, sidebar click provides the path)
                        if (path) this.selectedPath = path;
                    }
                    
                    this.isModified = false;
                    this.livePreviewUrl = null;
                    this.editorTab = (this.selectedPath && this.selectedPath.includes('youtube')) ? 'youtube' : 'upload';
                    this.youtubeUrl = this.editorTab === 'youtube' ? this.selectedPath : '';

                    // Send message TO iframe to scroll to this element
                    const iframe = document.getElementById('preview-frame');
                    if (iframe && iframe.contentWindow) {
                        iframe.contentWindow.postMessage({
                            type: 'SCROLL_TO_MEDIA',
                            key: key
                        }, '*');
                    }

                    console.log('Selected:', key, 'Path:', this.selectedPath);
                },

                deselect() {
                    this.selectedKey = null;
                    this.selectedPath = null;
                    this.isModified = false;
                    this.livePreviewUrl = null;
                },

                handleFileSelect(event) {
                    const file = event.target.files[0];
                    if (file) {
                        this.isModified = true;
                        this.livePreviewUrl = URL.createObjectURL(file);
                        
                        // Send message TO iframe to preview it live
                        const iframe = document.getElementById('preview-frame');
                        iframe.contentWindow.postMessage({
                            type: 'UPDATE_PREVIEW',
                            key: this.selectedKey,
                            path: this.livePreviewUrl
                        }, '*');
                    }
                },

                async updateLink() {
                    try {
                        const response = await fetch('update-media-link.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({
                                key: this.selectedKey,
                                path: this.youtubeUrl
                            })
                        });
                        const result = await response.json();
                        if (result.success) {
                            alert('Link updated successfully! Refreshing preview...');
                            this.loading = true;
                            document.getElementById('preview-frame').contentWindow.location.reload();
                            this.deselect();
                        } else {
                            alert('Error: ' + result.message);
                        }
                    } catch (e) {
                        console.error(e);
                        alert('Failed to update link. Check console.');
                    }
                }
            }
        }
    </script>
</body>
</html>
