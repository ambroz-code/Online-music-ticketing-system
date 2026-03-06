<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My tickets</title>
    <link rel="stylesheet" href="tickets.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="artists.php">Artists</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="my-tickets-container">
            <h2>My Tickets</h2>

            <!-- Ticket List -->
            <div class="ticket-list">
                <!-- Ticket Item -->
                <div class="ticket-item">
                    <h3>Prity Prity Fire Friday</h3>
                    <p><strong>Date:</strong> October 17, 2024</p>
                    <p><strong>Location:</strong>University Inn</p>
                    <p><strong>Category:</strong> VIP</p>
                    <p><strong>Ticket Number:</strong>000105788</p>
                </div>

                <div class="ticket-item">
                    <h3>Irene Ntale Live in Concert</h3>
                    <p><strong>Date:</strong> October 04, 2024</p>
                    <p><strong>Location:</strong> Cricket Oval, Lugogo</p>
                    <p><strong>Category:</strong> Ordinary</p>
                    <p><strong>Ticket Number:</strong>987654321</p>
                </div>

                <div class="ticket-item">
                    <h3>Gloria Buggie X Victor Ruz</h3>
                    <p><strong>Date:</strong> September 30, 2024</p>
                    <p><strong>Location:</strong> Maria Flow, Masaka</p>
                    <p><strong>Category:</strong> Platinum</p>
                    <p><strong>Ticket Number:</strong>456789123</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>

</body>
</html>
