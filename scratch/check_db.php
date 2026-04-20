<?php
require_once 'c:/xampp/htdocs/midastouchschool.com/config/database.php';

echo "--- video_links for ALL pages ---\n";
$stmt = $pdo->query("SELECT page, link_key, video_url FROM video_links ORDER BY page, link_key");
while ($row = $stmt->fetch()) {
    echo "Page: {$row['page']} | Key: {$row['link_key']} | URL: {$row['video_url']}\n";
}

echo "\n--- media_items (video type) for ALL pages ---\n";
$stmt = $pdo->query("SELECT page, media_key, file_path FROM media_items WHERE media_type = 'video' ORDER BY page, media_key");
while ($row = $stmt->fetch()) {
    echo "Page: {$row['page']} | Key: {$row['media_key']} | Path: {$row['file_path']}\n";
}
