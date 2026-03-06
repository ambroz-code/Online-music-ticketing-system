<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with real database interaction
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        // Save user to the database, and hash the password for security
        echo "Sign-up successful!";
    }
}
?>
