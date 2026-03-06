<?php
session_start();
require_once 'config/db_connect.php';

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    http_response_code(403);
    exit('Unauthorized');
}

$query = "SELECT u.id, u.username, t.latitude, t.longitude, t.timestamp, t.battery_level
          FROM users u
          LEFT JOIN tracking_data t ON u.id = t.user_id
          WHERE t.id IN (
              SELECT MAX(id)
              FROM tracking_data
              GROUP BY user_id
          )";

$result = $conn->query($query);
$locations = $result->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($locations);
?>