<?php
/**
 * Media Upload Handler
 * Processes media replacement requests from the Admin Panel
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mediaKey = $_POST['media_key'] ?? '';
    
    if (empty($mediaKey)) {
        die("Invalid media key.");
    }

    if (isset($_FILES['media_file']) && $_FILES['media_file']['error'] === UPLOAD_ERR_OK) {
        // Get current file path from DB
        $stmt = $pdo->prepare("SELECT file_path, media_type FROM media_items WHERE media_key = ?");
        $stmt->execute([$mediaKey]);
        $item = $stmt->fetch();

        if (!$item) {
            die("Media item not found in database.");
        }

        $oldPath = '../' . $item['file_path'];
        $uploadDir = '../images/uploads/'; // Centralized upload directory
        
        // Create directory if not exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileExtension = pathinfo($_FILES['media_file']['name'], PATHINFO_EXTENSION);
        $newFileName = $mediaKey . '_' . time() . '.' . $fileExtension;
        $targetPath = $uploadDir . $newFileName;
        $dbPath = 'images/uploads/' . $newFileName;

        // Move uploaded file
        if (move_uploaded_file($_FILES['media_file']['tmp_name'], $targetPath)) {
            // Update database
            $update = $pdo->prepare("UPDATE media_items SET file_path = ?, updated_at = NOW() WHERE media_key = ?");
            $update->execute([$dbPath, $mediaKey]);

            // Optional: Delete old file if it's in the uploads directory
            // (Keep it simple for now and just update the DB)

            $returnPage = $_POST['return_page'] ?? '';
            $redirectUrl = "media.php?success=1" . ($returnPage ? "&page=" . urlencode($returnPage) : "");
            
            header("Location: " . $redirectUrl);
            exit();
        } else {
            die("Error moving uploaded file.");
        }
    } else {
        die("Upload error: " . ($_FILES['media_file']['error'] ?? 'No file uploaded'));
    }
} else {
    header("Location: media.php");
    exit();
}
