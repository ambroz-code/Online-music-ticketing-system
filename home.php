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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Events Ticketing - Home</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
  <style>      
        .social-media-container {
            text-align: center;
            margin-top: 20px;
        }

        .social-media-icon {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
            font-size: 24px;
        }

        .social-media-icon:hover {
            color: #007BFF; /* Change color on hover */
        }
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
.testimonials {
    background: navajowhite;
    padding: 40px 0;
}

.testimonials-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.testimonial {
    background: white;
    border-radius: 5px;
    width: 250px;
    margin: 20px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.special-offers{
    width: 100%;
    justify-content: center;
    text-align: center;
    box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.1);
}
.offers-container{
width: 100%;
padding: 10px;
display: flex;
margin: 10px;
height: 90px;
}
.offer{
padding: 10px;
}

.event-highlights{
    justify-content: center;
    border-radius: 10px;
    text-align: center;
    box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.1);

}
.video-gallery{
    display: flex;
    margin: 20px;
    width: 300px;

}
.video-card{
    align-content: center;
    border-radius: 5px;
}


.newsletter-form{
   display: flex;
    justify-content: center;
    
}
footer {
    background: #2c3e50;
    color: white;
    text-align: center;
    padding: 10px 0;
    margin-top: 30px;
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
        <div class="hero">
            <h1>Experience the Best Live Music</h1>
            <p>Find and buy tickets for the most exciting music events happening around you.</p>
            <a href="events.php" class="btn-primary">Buy Tickets Now</a>
        </div>
            <div class="auth-links" style="position: absolute; top: 20px; right: 20px;">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="signin.php">Login</a>
        <?php endif; ?>
    </div>
        
    </header>


    <main>
        <section class="featured-events">
            <h2>Featured Events</h2>
            <div class="events-container">
                <div class="event-card">
                    <img src="pretty.jpeg" alt="Concert 1">
                    <h3>Prity Prity Fire Friday</h3>
                    <p>Date: October 17, 2024</p>
                    <p>Location: University Inn</p><br>
                    <a href="events.php#prity" class="btn-secondary">View Details</a>
                </div>
                <div class="event-card">
                    <img src="cindy.jpeg" alt="Concert 2">
                    <h3>Cindy Sanyu Live in Concert</h3>
                    <p>Date: December 25, 2024</p>
                    <p>Location: Kololo</p><br>
                    <a href="events.php#irene" class="btn-secondary">View Details</a>
                </div>
                <div class="event-card">
                    <img src="dawa.jpeg" alt="Concert 3">
                    <h3>Dawa Show by Elijah Kitaka</h3>
                    <p>Date: November 20, 2024</p>
                    <p>Location: Freedom City</p><br>
                    <a href="events.php#dawa" class="btn-secondary">View Details</a>
                </div>
            </div>
            <div class="more-events">
                
            </div>
        </section>
        <section class="special-offers">
    <h2>Special Offers</h2>
    <div class="offers-container">
        <div class="offer">
            <h3>Early Bird Discounts</h3>
            <p>Get 20% off tickets for selected events.</p>
            <a href="events.php" class="btn-secondary">Grab Offer</a>
        </div>
        <div class="offer">
            <h3>Group Packages</h3>
            <p>Buy tickets for a group and save more!</p>
            <a href="events.php" class="btn-secondary">Explore Packages</a>
        </div>
         <div class="offer">
            <h3>Group Packages</h3>
            <p>Buy tickets for a group and save more!</p>
            <a href="events.php" class="btn-secondary">Explore Packages</a>
        </div>
    </div>
</section>
<section class="event-highlights">
    <h2>Event Highlights</h2>
    <div class="video-gallery">
        <div class="video-card">
            <iframe width="320" height="180" src="https://www.youtube.com/embed/sample1" title="Video"></iframe>
            <p>Highlight from Dawa Fest 2024</p>
        </div>
        <div class="video-card">
            <iframe width="320" height="180" src="https://www.youtube.com/embed/sample2" title="Video"></iframe>
            <p>Electric Freedom Night Recap</p>
        </div>
          <div class="video-card">
            <iframe width="320" height="180" src="https://www.youtube.com/embed/sample2" title="Video"></iframe>
            <p>Electric Freedom Night Recap</p>
        </div>
    </div>
</section>

        <section class="testimonials">
            <h2>What Our Fans Say</h2>
            <div class="testimonials-container">
                <div class="testimonial">
                    <p>"Amazing experience! The ticketing process was smooth, and the concert was incredible."</p>
                    <h4>- @alexkayz</h4>
                </div>
                <div class="testimonial">
                    <p>"I found tickets for my favorite band so easily. I'll definitely use this platform again!"</p>
                    <h4>- @ambroseambroz</h4>
                </div>
                <div class="testimonial">
                    <p>"Great service! I was able to get last-minute tickets and had an unforgettable night."</p>
                    <h4>- @niweshian</h4>
                </div>
            </div>
        </section>
        <section class="newsletter">
            <h2>Stay Updated with Latest Events</h2>
            <form action="#" method="POST" class="newsletter-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit" class="btn-primary">Subscribe</button>
            </form>
        </section>

        <div class="social-media-container">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com" class="social-media-icon" target="_blank">Facebook</a>
            <a href="https://twitter.com/Ambroseambroz" class="social-media-icon" target="_blank">Twitter</a>
            <a href="https://www.instagram.com/ambroseambrose10" class="social-media-icon" target="_blank">Instagram</a>
            <!-- <a href="https://www.linkedin.com/company/YourPage" class="social-media-icon" target="_blank">LinkedIn</a> -->
        </div>
    </main>
    <footer>
        <p>&copy; 2024 e-music ticketing. All rights reserved.</p>
    </footer>

</body>
</html>
