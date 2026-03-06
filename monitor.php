<?php
session_start();
require_once 'config/db_connect.php';

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Get tracked users
$query = "SELECT DISTINCT u.id, u.username, 
          t.latitude, t.longitude, t.timestamp, t.battery_level
          FROM users u
          LEFT JOIN tracking_data t ON u.id = t.user_id
          WHERE t.id IN (
              SELECT MAX(id)
              FROM tracking_data
              GROUP BY user_id
          )
          ORDER BY t.timestamp DESC";

$result = $conn->query($query);
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Monitor</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="monitor-container">
        <div class="users-list">
            <h2>Tracked Users</h2>
            <div class="users-grid">
                <?php foreach ($users as $user): ?>
                    <div class="user-card" data-user-id="<?php echo $user['id']; ?>">
                        <h3><?php echo htmlspecialchars($user['username']); ?></h3>
                        <p class="last-seen">
                            Last seen: 
                            <?php echo $user['timestamp'] ? date('Y-m-d H:i:s', strtotime($user['timestamp'])) : 'Never'; ?>
                        </p>
                        <?php if ($user['battery_level']): ?>
                            <p class="battery">Battery: <?php echo $user['battery_level']; ?>%</p>
                        <?php endif; ?>
                        <p class="coordinates">
                            <?php if ($user['latitude'] && $user['longitude']): ?>
                                Lat: <?php echo $user['latitude']; ?><br>
                                Lng: <?php echo $user['longitude']; ?>
                            <?php else: ?>
                                No location data
                            <?php endif; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="monitor-map"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        let map;
        let markers = {};

        // Initialize map
        function initMap() {
            map = L.map('monitor-map').setView([0, 0], 2);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
        }

        // Update user locations
        async function updateLocations() {
            try {
                const response = await fetch('get_locations.php');
                const data = await response.json();

                data.forEach(user => {
                    if (user.latitude && user.longitude) {
                        if (markers[user.id]) {
                            markers[user.id].setLatLng([user.latitude, user.longitude]);
                        } else {
                            markers[user.id] = L.marker([user.latitude, user.longitude])
                                .bindPopup(user.username)
                                .addTo(map);
                        }
                    }
                });
            } catch (error) {
                console.error('Error updating locations:', error);
            }
        }

        // Initialize map and start updates
        initMap();
        updateLocations();
        setInterval(updateLocations, 60000); // Update every minute
    </script>
</body>
</html>