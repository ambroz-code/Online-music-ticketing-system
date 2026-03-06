<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "You must be logged in to download videos.";
    exit;
}

// Define the video directory
$video_dir = "videos/";

// Get the video file name from the query parameter
$filename = basename($_GET['file']); // Prevent directory traversal
$filepath = $video_dir . $filename;

// Check if the file exists in the directory
if (file_exists($filepath)) {
    // Set headers to prompt download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($filepath));

    // Clear output buffering and read the file
    ob_clean();
    flush();
    readfile($filepath);
    exit;
} else {
    echo "File not found.";
}
?>
