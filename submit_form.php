<?php
header('Content-Type: application/json');

// Validate CSRF token
if (empty($_POST['CRAFT_CSRF_TOKEN']) || $_POST['CRAFT_CSRF_TOKEN'] !== 'YOUR_CSRF_TOKEN_VALUE') {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid CSRF token']);
    exit;
}

// Rate limiting (simple implementation)
session_start();
$now = time();
if (isset($_SESSION['last_submission']) && ($now - $_SESSION['last_submission']) < 30) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Please wait before submitting again']);
    exit;
}
$_SESSION['last_submission'] = $now;

// Database connection
require_once __DIR__ . '/config/database.php';

try {
    
    // Create table if not exists (one-time setup)
    $pdo->exec("CREATE TABLE IF NOT EXISTS form_submissions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        parent_first_name VARCHAR(100) NOT NULL,
        parent_last_name VARCHAR(100) NOT NULL,
        email VARCHAR(255) NOT NULL,
        request_call_back ENUM('Yes', 'No') NOT NULL,
        child1_first_name VARCHAR(100) NOT NULL,
        child1_last_name VARCHAR(100) NOT NULL,
        child1_dob DATE NULL,
        child1_entry_term VARCHAR(50) NULL,
        child1_year INT NULL,
        child1_interests TEXT NULL,
        address1 VARCHAR(255) NULL,
        city VARCHAR(100) NULL,
        postcode VARCHAR(20) NULL,
        country VARCHAR(100) NULL,
        has_additional_children ENUM('Yes', 'No') NOT NULL DEFAULT 'No',
        child2_first_name VARCHAR(100) NULL,
        child2_last_name VARCHAR(100) NULL,
        child2_dob DATE NULL,
        child2_entry_term VARCHAR(50) NULL,
        child2_year INT NULL,
        child2_interests TEXT NULL,
        ip_address VARCHAR(45) NOT NULL,
        user_agent TEXT NULL,
        submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX (email),
        INDEX (submitted_at)
    )");
    
    // Process and validate form data
    $fields = $_POST['fields'] ?? [];
    
    // Validate required fields
    $required = [
        'yourName.firstName' => 'Parent first name',
        'yourName.lastName' => 'Parent last name',
        'emailAddress' => 'Email address',
        'nameOfChild1.firstName' => 'Child first name',
        'nameOfChild1.lastName' => 'Child last name'
    ];
    
    $errors = [];
    foreach ($required as $field => $label) {
        $parts = explode('.', $field);
        $value = $fields;
        foreach ($parts as $part) {
            $value = $value[$part] ?? null;
        }
        
        if (empty(trim($value ?? ''))) {
            $errors[] = "$label is required";
        }
    }
    
    // Validate email
    if (!filter_var($fields['emailAddress'] ?? '', FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address";
    }
    
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
        exit;
    }
    
    // Prepare data for insertion
    $data = [
        ':parent_first_name' => substr(trim($fields['yourName']['firstName']), 0, 100),
        ':parent_last_name' => substr(trim($fields['yourName']['lastName']), 0, 100),
        ':email' => substr(trim($fields['emailAddress']), 0, 255),
        ':request_call_back' => ($fields['requestACallBackFromOurAdmissionsTeam'] ?? '') === 'Yes' ? 'Yes' : 'No',
        ':child1_first_name' => substr(trim($fields['nameOfChild1']['firstName']), 0, 100),
        ':child1_last_name' => substr(trim($fields['nameOfChild1']['lastName']), 0, 100),
        ':child1_dob' => !empty($fields['dateOfBirth']['datetime']) ? date('Y-m-d', strtotime($fields['dateOfBirth']['datetime'])) : null,
        ':child1_entry_term' => !empty($fields['proposedEntryTerm1']) ? substr($fields['proposedEntryTerm1'], 0, 50) : null,
        ':child1_year' => !empty($fields['year']) ? (int)$fields['year'] : null,
        ':child1_interests' => !empty($fields['childsInterestsHobbiesOrAreasOfTheScho']) ? substr(trim($fields['childsInterestsHobbiesOrAreasOfTheScho']), 0, 65535) : null,
        ':address1' => !empty($fields['address']['address1']) ? substr(trim($fields['address']['address1']), 0, 255) : null,
        ':city' => !empty($fields['address']['city']) ? substr(trim($fields['address']['city']), 0, 100) : null,
        ':postcode' => !empty($fields['address']['zip']) ? substr(trim($fields['address']['zip']), 0, 20) : null,
        ':country' => !empty($fields['address']['country']) ? substr(trim($fields['address']['country']), 0, 100) : null,
        ':has_additional_children' => ($fields['additionalChildren'] ?? '') === 'Yes' ? 'Yes' : 'No',
        ':child2_first_name' => null,
        ':child2_last_name' => null,
        ':child2_dob' => null,
        ':child2_entry_term' => null,
        ':child2_year' => null,
        ':child2_interests' => null,
        ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null
    ];
    
    // Additional child data if provided
    if ($data[':has_additional_children'] === 'Yes') {
        $data[':child2_first_name'] = !empty($fields['nameOfChild11']['firstName']) ? substr(trim($fields['nameOfChild11']['firstName']), 0, 100) : null;
        $data[':child2_last_name'] = !empty($fields['nameOfChild11']['lastName']) ? substr(trim($fields['nameOfChild11']['lastName']), 0, 100) : null;
        $data[':child2_dob'] = !empty($fields['dateOfBirth1']['datetime']) ? date('Y-m-d', strtotime($fields['dateOfBirth1']['datetime'])) : null;
        $data[':child2_entry_term'] = !empty($fields['proposedEntryTerm']) ? substr($fields['proposedEntryTerm'], 0, 50) : null;
        $data[':child2_year'] = !empty($fields['year1']) ? (int)$fields['year1'] : null;
        $data[':child2_interests'] = !empty($fields['secondChildsInterestsHobbiesOrAreasOfT']) ? substr(trim($fields['secondChildsInterestsHobbiesOrAreasOfT']), 0, 65535) : null;
    }
    
    // Insert data
    $stmt = $pdo->prepare("INSERT INTO form_submissions (
        parent_first_name, parent_last_name, email, request_call_back,
        child1_first_name, child1_last_name, child1_dob, child1_entry_term, child1_year, child1_interests,
        address1, city, postcode, country,
        has_additional_children,
        child2_first_name, child2_last_name, child2_dob, child2_entry_term, child2_year, child2_interests,
        ip_address, user_agent
    ) VALUES (
        :parent_first_name, :parent_last_name, :email, :request_call_back,
        :child1_first_name, :child1_last_name, :child1_dob, :child1_entry_term, :child1_year, :child1_interests,
        :address1, :city, :postcode, :country,
        :has_additional_children,
        :child2_first_name, :child2_last_name, :child2_dob, :child2_entry_term, :child2_year, :child2_interests,
        :ip_address, :user_agent
    )");
    
    if ($stmt->execute($data)) {
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your submission! We will contact you shortly.'
        ]);
    } else {
        throw new Exception('Failed to save submission');
    }
    
} catch (Exception $e) {
    error_log("Form submission error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while processing your submission. Please try again later.'
    ]);
}