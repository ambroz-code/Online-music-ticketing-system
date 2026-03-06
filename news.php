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
    <title>Music Events News</title>
    <link rel="stylesheet" href="news.css">
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
        <h1>Latest Music News</h1>
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
        <section class="trending-news">
            <h2>Trending Now</h2>
            <div class="news-item">
                <img src="raggae.jpeg" alt="Trending News 1">
                <h3>Top Music Festival This Summer</h3>
                <p>Discover the top music festivals happening this summer, featuring the biggest artists from around the world. <span class="read-more">Read more...</span></p>
            </div>
            <div class="news-item">
                <img src="artists.jpeg" alt="Trending News 2">
                <h3>Exclusive Interview with Top Artist</h3>
                <p>Get an inside look at the life of a top artist with our exclusive interview. <span class="read-more" onclick="toggleContent(this)">Read more...</span></p>
                    <div class="additional-info">
                    <p>Here is some more detailed information about the interview, including quotes, insights, and other exclusive details.</p>
    </div>
    <script>
    function toggleContent(element) {
        const additionalInfo = element.parentElement.nextElementSibling; // Select the next sibling (additional-info div)
        if (additionalInfo.style.display === "none") {
            additionalInfo.style.display = "block"; // Show additional info
            element.textContent = "Read less..."; // Change text to "Read less..."
        } else {
            additionalInfo.style.display = "none"; // Hide additional info
            element.textContent = "Read more..."; // Change text back to "Read more..."
        }
    }
</script>
            </div>
            
        </section>

        <section class="latest-news">
            <h2>Latest News</h2>
            <article>
                <h3>New Album Releases This Week</h3>
                <img src="trending.jpeg" alt="New Album Releases">
                <p>Check out the latest album releases and what to expect from your favorite artists.</p>
                <a href="#" class="button">Read More</a>
            </article>
            <article>
                <h3>Upcoming Concerts in Your Area</h3>
                <img src="shows.jpeg" alt="Upcoming Concerts">
                <p>Find out which concerts are happening near you and book your tickets now.</p>
                <a href="#" class="button">Read More</a>
            </article>
           
        </section>
    </main>

    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>
</body>
</html>