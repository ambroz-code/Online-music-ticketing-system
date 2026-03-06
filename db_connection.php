<?php
$host = 'localhost';
$dbname = 'tracking_system';
$username = 'your_username';
$password = 'your_password';

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Database connection failed. Please try again later.');
}
?>