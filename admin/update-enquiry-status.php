<?php
/**
 * Update Enquiry Status Handler
 * Handles AJAX requests to mark enquiries as read, archived, etc.
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['id']) || !isset($input['status'])) {
    echo json_encode(['success' => false, 'message' => 'Missing ID or Status.']);
    exit;
}

$id = (int)$input['id'];
$status = $input['status'];

// Basic validation for status
$allowedStatuses = ['new', 'read', 'replied', 'archived'];
if (!in_array($status, $allowedStatuses)) {
    echo json_encode(['success' => false, 'message' => 'Invalid status.']);
    exit;
}

try {
    $stmt = $pdo->prepare("UPDATE enquiries SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
