<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackMate - Emergency Assistance Tracker</title>
    <style>
        /* Style the report button */
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-top: 20px;
        }

        #report-btn {
            padding: 15px 30px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        #report-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <h1>Emergency Assistance Tracker</h1>

    <!-- Emergency Report Button -->
    <button id="report-btn">Report Emergency</button>

    <script>
        function reportEmergency() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(async position => {
                    const emergencyData = {
                        latitude: position.coords.latitude,
                        longitude: position.coords.longitude,
                        timestamp: new Date().toISOString()
                    };

                    // Get IP address and add to emergency data
                    const response = await fetch('https://api64.ipify.org?format=json');
                    const data = await response.json();
                    emergencyData.ip = data.ip;

                    // Send emergency data to server
                    alert("Emergency reported! Authorities will be notified.");
                    await fetch('https://yourserver.com/report', {  // Replace with your server endpoint
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(emergencyData)
                    });
                }, () => {
                    alert("Unable to detect location. Please enable location services.");
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        document.getElementById('report-btn').addEventListener('click', reportEmergency);
    </script>
</body>
</html>
