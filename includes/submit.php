<?php
/**
 * Form Submission Handler
 * Midas Touch School - Enquiry Form
 */

// Include database configuration
require_once __DIR__ . '/../config/database.php';

// Set JSON response header
header('Content-Type: application/json');

try {
    // Validate request method
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // Get POST values with validation
    $title = $_POST['fields']['title1'] ?? '';
    $firstName = trim($_POST['fields']['name1']['firstName'] ?? '');
    $lastName = trim($_POST['fields']['name1']['lastName'] ?? '');
    $email = filter_var($_POST['fields']['emailAddress'] ?? '', FILTER_VALIDATE_EMAIL);
    $subject = trim($_POST['fields']['subject'] ?? '');
    $message = trim($_POST['fields']['enquiryMessage'] ?? '');

    // Basic validation
    if (empty($firstName) || empty($lastName) || !$email || empty($subject) || empty($message)) {
        throw new Exception('All fields are required');
    }

    // Prepare and execute insert
    $stmt = $pdo->prepare("
        INSERT INTO enquiries (title, first_name, last_name, email, subject, message, submitted_at) 
        VALUES (:title, :firstName, :lastName, :email, :subject, :message, NOW())
    ");

    $stmt->execute([
        ':title' => $title,
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);

    // Success response
    echo json_encode([
        'success' => true,
        'message' => 'Form submitted successfully! We will get back to you soon.'
    ]);

} catch (Exception $e) {
    // Error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
}
?>
