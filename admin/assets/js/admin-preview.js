/**
 * Admin Preview Helper
 * This script runs ON THE WEBSITE PAGES when viewed inside the Admin Iframe.
 * It handles element selection/highlighting and communicates with the Admin Panel.
 */

(function() {
    // Only run if we are in an iframe and admin_preview=1 is in the URL
    const isPreview = window.self !== window.top && new URLSearchParams(window.location.search).has('admin_preview');
    
    if (!isPreview) return;

    console.log("Admin Preview Mode Active");

    // Add styles for highlighting
    const style = document.createElement('style');
    style.textContent = `
        [data-media-key] {
            cursor: pointer !important;
            transition: outline 0.2s ease-in-out, filter 0.2s ease-in-out !important;
            position: relative !important;
        }
        [data-media-key]:hover {
            outline: 4px solid #3b82f6 !important;
            outline-offset: -4px !important;
            filter: brightness(0.8) !important;
            z-index: 50 !important;
        }
        [data-media-key].admin-selected {
            outline: 4px solid #10b981 !important;
            outline-offset: -2px !important;
            z-index: 1000 !important;
        }
        .admin-label {
            position: absolute;
            top: 0;
            left: 0;
            background: #3b82f6;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            font-family: sans-serif;
            pointer-events: none;
            z-index: 100;
            border-bottom-right-radius: 4px;
        }
    `;
    document.head.appendChild(style);

    // Track clicks
    document.addEventListener('click', function(e) {
        console.log("Click detected on:", e.target);
        
        let mediaElement = e.target.closest('[data-media-key]');
        
        // Fallback: If no data-key, check if it's an img/video/source and try to guess the key from its src
        if (!mediaElement && (e.target.tagName === 'IMG' || e.target.tagName === 'VIDEO')) {
            mediaElement = e.target;
        }

        if (mediaElement) {
            e.preventDefault();
            e.stopPropagation();

            let mediaKey = mediaElement.getAttribute('data-media-key');
            let mediaType = mediaElement.tagName;
            let currentSrc = '';

            if (mediaType === 'IMG') currentSrc = mediaElement.src;
            else if (mediaType === 'VIDEO') currentSrc = mediaElement.getAttribute('data-src') || mediaElement.src;
            else if (mediaType === 'SOURCE') currentSrc = mediaElement.srcset;

            // Notify parent window (Admin Panel) with richer metadata
            window.parent.postMessage({
                type: 'MEDIA_SELECTED',
                key: mediaKey,
                tagName: mediaType,
                src: currentSrc
            }, '*');

            console.log("SUCCESS: Selected media key:", mediaKey);
        }
    }, true);

    // Listen for messages FROM the admin panel
    window.addEventListener('message', function(e) {
        if (e.data.type === 'UPDATE_PREVIEW') {
            const { key, path } = e.data;
            const elements = document.querySelectorAll(`[data-media-key="${key}"]`);
            
            elements.forEach(el => {
                if (el.tagName === 'IMG') {
                    el.src = path;
                } else if (el.tagName === 'SOURCE') {
                    el.srcset = path;
                } else if (el.tagName === 'VIDEO') {
                    el.src = path;
                } else {
                    el.style.backgroundImage = `url(${path})`;
                }
            });
        }

        if (e.data.type === 'SCROLL_TO_MEDIA') {
            const key = e.data.key;
            const element = document.querySelector(`[data-media-key="${key}"]`);
            
            if (element) {
                // Remove previous selection/highlight
                document.querySelectorAll('.admin-selected').forEach(el => el.classList.remove('admin-selected'));
                
                // Add selection and scroll
                element.classList.add('admin-selected');
                element.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                console.log("Scrolled to media key:", key);
            }
        }
    });

})();
