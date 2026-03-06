<?php
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
    <style>
        .auth-links {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 16px;
}

.auth-links a {
    margin-left: 10px;
    color: #007bff;
    text-decoration: none;
}

.auth-links a:hover {
    color: #0056b3;
}
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="artists.php">Artists</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <h1>Contact Us</h1>
        </div>
            <div class="auth-links" style="position: absolute; top: 20px; right: 20px;">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="signin.php">Login</a>
        <?php endif; ?>
    </div>
    </header>

    <main>
        <section class="contact-form-section">
            <h2>Get in Touch</h2>
            <p>If you have any questions, feedback, or need assistance, please fill out the form below and we’ll get back to you as soon as possible.</p>
               <form class="contact-form" action="send_message.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
        </div>
        <button type="submit" class="button">Send Message</button>
    </form>

        </section>

        <section class="contact-details">
            <h2>Contact Information</h2>
            <ul>
                <li><strong>Email:</strong> mub.ambrose10@gmail.com</li>
                <li><strong>Phone:</strong> +256780105798</li>
                <li><strong>Address:</strong> Western Arcade Building, Mbarara City</li>
            </ul>
        </section>

        <section class="map-section">
    <h2>Our Location</h2>
    <div class="map-container">
        <!-- Updated Google Map iframe -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3181.835836666503!2d30.653723684295723!3d-0.6082618354049351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19ddcdbcfedb74d9%3A0x3b7a8a75c3e2b78!2sWestern%20Arcade%20Building%2C%20Mbarara%20City%2C%20Uganda!5e0!3m2!1sen!2sug!4v1634893449054!5m2!1sen!2sug"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>

    </main>

    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>
</body>
</html>