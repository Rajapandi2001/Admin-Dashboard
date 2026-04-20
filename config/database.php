<?php
/**
 * Database Configuration
 * Midas Touch School - Media Management System
 */

// Database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'midas_media');
define('DB_USER', 'root');  // Change this for production
define('DB_PASS', '');      // Change this for production
define('DB_CHARSET', 'utf8mb4');

// Create PDO connection
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
} catch (PDOException $e) {
    // Log error (don't expose database errors to users)
    error_log("Database Connection Error: " . $e->getMessage());
    
    // Show user-friendly error
    die("Database connection failed. Please contact the administrator.");
}

/**
 * Helper function to get database connection
 * @return PDO
 */
function getDB() {
    global $pdo;
    return $pdo;
}
