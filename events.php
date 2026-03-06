<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="events.css">
    <script src="js/buy_ticket.js" defer></script>
</head>
<body>
    <header>
          <nav><ul>
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
        <h1>Upcoming Events</h1>
    </header>

    <main>
 <?php
if (isset($_POST['eventid']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $eventid = $_POST['eventid'];
    $eventdate = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO tickets (username, eventid, eventdate) VALUES ('$username', '$eventid', '$eventdate')";
    if ($conn->query($sql) === TRUE) {
        echo "Ticket purchased successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Error: Please make sure you are logged in and have selected an event.";
}
?>

        <section id="dawa" class="event-list">
            <div class="event-item">
                <img src="dawa.jpeg" alt="Concert 3">
                <h2>Dawa Concert</h2>
                <p><strong>Date:</strong> September 30, 2024</p>
                <p><strong>Venue:</strong> University Inn</p>
                <p><strong>Description:</strong> Join us for a night of incredible music with top artists led by Elijah Kitaka.</p>
                <button class="buy-ticket-button" data-event-id="1" onclick="togglePaymentOptions()">Buy Ticket</button>
                <button class="business-booking-button" data-event-id="1" onclick="toggleBusinessOptions()">Business Booking</button>
    
                     <!-- Payment Options - Hidden initially -->
    <div id="payment-options" style="display: none; margin-top: 10px;">
        <h3>Select Payment Method</h3>
        <ul>
            <li><button onclick="processPayment('Credit Card')">Credit Card</button></li>
            <li><button onclick="processPayment('PayPal')">PayPal</button></li>
            <li><button onclick="processPayment('Mobile Money')">Mobile Money</button></li>
            <li><button onclick="processPayment('Bank Transfer')">Bank Transfer</button></li>
        </ul>
    </div>
    
    <!-- Business Booking Options - Hidden initially -->
    <div id="business-options" style="display: none; margin-top: 10px;">
        <h3>Select Your Business Type</h3>
        <ul>
            <li><button onclick="processBusinessType('Corporate')">Corporate</button></li>
            <li><button onclick="processBusinessType('Non-profit')">Non-profit</button></li>
            <li><button onclick="processBusinessType('Small Business')">Small Business</button></li>
            <li><button onclick="processBusinessType('Educational Institution')">Educational Institution</button></li>
        </ul>
    </div>
</div>

<script>
function togglePaymentOptions() {
    var paymentOptions = document.getElementById("payment-options");
    var businessOptions = document.getElementById("business-options");
    
    // Show payment options and hide business options
    paymentOptions.style.display = paymentOptions.style.display === "none" ? "block" : "none";
    businessOptions.style.display = "none";
}

function toggleBusinessOptions() {
    var paymentOptions = document.getElementById("payment-options");
    var businessOptions = document.getElementById("business-options");

    // Show business options and hide payment options
    businessOptions.style.display = businessOptions.style.display === "none" ? "block" : "none";
    paymentOptions.style.display = "none";
}

function processPayment(method) {
    alert("You selected " + method + " as your payment method.");
    // Additional code for processing the payment method can go here.
}

function processBusinessType(type) {
    alert("You selected " + type + " as your business type.");
    // Additional code for processing the business type can go here.
}
</script>
          
             <div id="irene" class="event-item">
                <img src="irene.jpg">
                <h2>Irene Ntale Live in Concert</h2>
                <p><strong>Date:</strong> Otober 04, 2024</p>
                <p><strong>Venue:</strong> Cricket Oval, Lugogo</p>
                <p><strong>Description:</strong> Join us for a night of incredible music with top artists.</p>
                <button class="buy-ticket-button" data-event-id="1">Buy Ticket</button>
                <button class="business-booking-button" data-event-id="1">Business Booking</button>
            </div>
             <div id="prity" class="event-item">
                <img src="pretty.jpeg">
                <h2>Prity Prity Fire Friday</h2>
                <p><strong>Date:</strong> October 17, 2024</p>
                <p><strong>Venue:</strong> University Inn</p>
                <p><strong>Description:</strong> Come experience the best of King Saha.</p>
                <button class="buy-ticket-button" data-event-id="1">Buy Ticket</button>
                <button class="business-booking-button" data-event-id="1">Business Booking</button>
            </div>
            <!-- Modal Structure for Payment Options -->
<div id="paymentModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2>Select Payment Method</h2>
        <p>Choose your preferred payment method:</p>
        <ul class="payment-options">
            <li><button class="payment-option" data-method="card">Credit/Debit Card</button></li>
            <li><button class="payment-option" data-method="paypal">PayPal</button></li>
            <li><button class="payment-option" data-method="mobile-money">Mobile Money</button></li>
            <li><button class="payment-option" data-method="bank">Bank Transfer</button></li>
        </ul>
    </div>
</div>

            
        </section>
 </main>
 
    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>
</body>
</html>
