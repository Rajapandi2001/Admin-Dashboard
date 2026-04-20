<?php
// Enable detailed error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

// --- Step 1: Database Connection ---
require_once __DIR__ . '/config/database.php';

// --- Step 2: Handle POST Request and Prepare Data ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect all form data using null coalescing operator for safety
    $parentFirstName = $_POST['fields']['yourName']['firstName'] ?? '';
    $parentLastName = $_POST['fields']['yourName']['lastName'] ?? '';
    $email = $_POST['fields']['emailAddress'] ?? '';
    $telephone = $_POST['phone'] ?? '';
    $requestCallback = $_POST['fields']['requestACallBackFromOurAdmissionsTeam'] ?? '';
    $child1FirstName = $_POST['fields']['nameOfChild1']['firstName'] ?? '';
    $child1LastName = $_POST['fields']['nameOfChild1']['lastName'] ?? '';
    $child1DOB = $_POST['fields']['dateOfBirth']['datetime'] ?? '';
    $child1Year = $_POST['fields']['year'] ?? '';
    $child1Interests = $_POST['fields']['childsInterestsHobbiesOrAreasOfTheScho'] ?? '';
    $address1 = $_POST['fields']['address']['address1'] ?? '';
    $city = $_POST['fields']['address']['city'] ?? '';
    $postCode = $_POST['fields']['address']['zip'] ?? '';
    $state = $_POST['fields']['address']['state'] ?? '';
    $country = $_POST['fields']['address']['country'] ?? '';
    $additionalChildren = $_POST['fields']['additionalChildren'] ?? '';

    // Handle data for the second child, but only if 'Yes' is selected
    $child2FirstName = null;
    $child2LastName = null;
    $child2DOB = null;
    $child2Year = null;
    $child2Interests = null;

    if ($additionalChildren === 'Yes') {
        $child2FirstName = $_POST['fields']['nameOfChild11']['firstName'] ?? '';
        $child2LastName = $_POST['fields']['nameOfChild11']['lastName'] ?? '';
        $child2DOB = $_POST['fields']['dateOfBirth1']['datetime'] ?? '';
        $child2Year = $_POST['fields']['year1'] ?? '';
        $child2Interests = $_POST['fields']['secondChildsInterestsHobbiesOrAreasOfT'] ?? '';
    }

    // --- Step 3: Execute the Query and Send Response ---
    try {
        // SQL query using a PDO prepared statement to prevent SQL injection
        $sql = "INSERT INTO visits (parent_first_name, parent_last_name, email, telephone, callback_request, child1_first_name, child1_last_name, child1_dob, child1_year, child1_interests, address1, city, post_code, state, country, additional_children, child2_first_name, child2_last_name, child2_dob, child2_year, child2_interests)
                VALUES (:parent_first_name, :parent_last_name, :email, :telephone, :callback_request, :child1_first_name, :child1_last_name, :child1_dob, :child1_year, :child1_interests, :address1, :city, :post_code, :state, :country, :additional_children, :child2_first_name, :child2_last_name, :child2_dob, :child2_year, :child2_interests)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':parent_first_name'  => $parentFirstName,
            ':parent_last_name'   => $parentLastName,
            ':email'              => $email,
            ':telephone'          => $telephone,
            ':callback_request'   => $requestCallback,
            ':child1_first_name'  => $child1FirstName,
            ':child1_last_name'   => $child1LastName,
            ':child1_dob'         => $child1DOB,
            ':child1_year'        => $child1Year,
            ':child1_interests'   => $child1Interests,
            ':address1'           => $address1,
            ':city'               => $city,
            ':post_code'          => $postCode,
            ':state'              => $state,
            ':country'            => $country,
            ':additional_children'=> $additionalChildren,
            ':child2_first_name'  => $child2FirstName,
            ':child2_last_name'   => $child2LastName,
            ':child2_dob'         => $child2DOB,
            ':child2_year'        => $child2Year,
            ':child2_interests'   => $child2Interests,
        ]);

        echo json_encode(['success' => true, 'message' => 'Booking successfully submitted!']);

    } catch (PDOException $e) {
        error_log("process_form.php error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Error submitting booking. Please try again.']);
    }

} else {
    // If the request method is not POST
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
}
?>