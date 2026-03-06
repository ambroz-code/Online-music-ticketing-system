<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
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
        <h1>About Us</h1>
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
        <section class="mission">
            <h2>Our Mission</h2>
            <p>Our mission is to connect fans with the best music experiences by offering a user-friendly platform for discovering and purchasing event tickets. We strive to provide exceptional service, innovative features, and a community for music enthusiasts.</p>
        </section>

        <section class="team">
            <h2>Founders</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="team_member1.jpg" alt="Team Member 1">
                    <h3>Ambrose Mubangizi</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-member">
                    <img src="team_member2.jpg" alt="Team Member 2">
                    <h3>Atukwase Godson</h3>
                    <p>Chief Operating Officer</p>
                </div>
                <div class="team-member">
                    <img src="team_member3.jpg" alt="Team Member 3">
                    <h3>Mwunvaneeza Godfrey</h3>
                    <p>Head of Marketing</p>
                </div>
            </div>
        </section>

        <section class="values">
            <h2>Our Values</h2>
            <ul>
                <li><strong>Integrity:</strong> We operate with honesty and transparency in everything we do.</li>
                <li><strong>Innovation:</strong> We continuously improve our platform to deliver the best user experience.</li>
                <li><strong>Community:</strong> We believe in building a supportive and inclusive community for music lovers.</li>
                <li><strong>Customer Satisfaction:</strong> Our customers are at the heart of everything we do, and we strive to exceed their expectations.</li>
            </ul>
        </section>

        <section class="history">
            <h2>Brief History</h2>
            <p>Founded in 2023, we started as a small team with Ambrose Mubangizi as the vision bearer: to revolutionize the way fans buy tickets for music events. Over the years, we have grown into a trusted platform used by thousands of music lovers. From local gigs to major festivals, we’ve been part of countless unforgettable moments.</p>
        </section>
      <p>Need to talk to us? <a href="contact.htm">Contact Us</p>
    </main>

    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>
</body>
</html>