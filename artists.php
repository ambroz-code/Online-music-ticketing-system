<?php
// Start session at the top of the file to check login status
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
    <link rel="stylesheet" href="artists.css?v=<?php echo time(); ?>">
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
     <script>
        function followArtist(url) {
            <?php if (!$isLoggedIn): ?>
                // If user is not logged in, show alert message
                alert("Please sign up or log in to follow this artist.");
            <?php else: ?>
                // If logged in, redirect to the artist's Twitter page
                window.location.href = "https://twitter.com/Ambroseambroz";;
            <?php endif; ?>
        }
    </script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Artists</div>
            <ul class="nav-links">
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

    <section class="artists-section">
        <h2>Featured Artists</h2>
        <div class="artists-grid">
           
            <div class="artist-card">
                <img src="cindy2.jpeg" alt="Cindy Sanyu" class="artist-photo">
                <h3>Artist Name</h3>
                <button class="btn-follow" onclick="followArtist('https://twitter.com/Ambroseambroz')">Follow</button>
                <a href="#albums" class="btn-view-albums">View Albums</a>
            </div>
            
            <div class="artist-card">
                <img src="spice.jpeg" alt="Spice Diana" class="artist-photo">
                <h3>Artist Name</h3>
                 <button class="btn-follow" onclick="followArtist('https://twitter.com/ninsiima_sylvia')">Follow</button>
                <a href="#albums" class="btn-view-albums">View Albums</a>
            </div>
            <div class="artist-card">
                <img src="saha.jpeg" alt="King Saha" class="artist-photo">
                <h3>Artist Name</h3>
                <button class="btn-follow">Follow</button>
                <a href="#albums" class="btn-view-albums">View Albums</a>
            </div>
            
        </div>
    </section>

    <footer>
        <p>© 2024 e-music ticketing. All rights reserved.</p>
    </footer>
</body>
</html>
