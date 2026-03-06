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
    <title>Videos</title>
    <link rel="stylesheet" href="videos.css?v=<?php echo time(); ?>">
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
        <h1>Videos of Recent Shows</h1>
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
        <section class="featured-videos">
            <h2>Featured Videos</h2>
            <div class="video-featured">
                <video controls>
                    <source src="ulcer.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h3>Dawa Fest 2024 - Headliner Performance</h3>
                <p>Watch the incredible performance from the headliner at Dawa Fest 2024. Relive the energy and excitement of the live show.</p>
            </div>
        </section>

        <section class="video-gallery">
            <h2>Recent Show Videos</h2>
            <div class="filters">
                <input type="text" placeholder="Search videos..." class="search-bar">
                <label for="video-filter">Category:</label>
                <select id="video-filter">
                    <option value="all">All</option>
                    <option value="rock">Rock</option>
                    <option value="pop">Raggae</option>
                    <option value="jazz">Jazz</option>
                    <option value="hiphop">Hip-Hop</option>
                </select>
            </div>
            <div class="videos-list">
                <div class="video-item">
                    <video controls>
                        <source src="ulcer.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Jazz Nights -Kampala, Sheraton</h3>
                    <p>Duration: 4:15 | Date: September 20, 2024</p>
                    <button class="button">Watch Now</button>
                    <a href="download.php?file=ulcer.mp4" class="download-button">Download</a>

                </div>
                <div class="video-item">
                    <video controls>
                        <source src="ulcer.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Raggae Concert - Dance Highlights</h3>
                    <p>Duration: 3:45 | Date: October 1, 2024</p>
                    <button class="button">Watch Now</button>
                </div>
                
            </div>
        </section>

        <section class="video-info">
            <h2>Why Watch Our Videos?</h2>
            <p>Our video collection features the best moments from recent shows, including live performances, backstage access, exclusive interviews, and more. Whether you missed the show or want to relive the experience, our video gallery brings the concert to you.</p>
        </section>

        <section class="rating-system">
            <h2>Rate Our Videos</h2>
            <p>Enjoyed a video? Rate it to help others find the best content!</p>
            <div class="rating">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>
</body>
</html>

<!-- <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>rhythmhub.com/videos</title>
</head>
<body>
	<h2>Videos</h2>
	<footer>
<a href="#privacy">Privacy policy</a>
<a href="#terms">Terms & Conditions</a>
 <p>Copyright &copy; 2024. All rights reserved.</p>
</footer>
</body>
</html> -->