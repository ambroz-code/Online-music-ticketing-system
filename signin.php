<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Music Events Ticketing</title>
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">

    <script>
        // Function to set focus on the input field based on the error type
        function setFocus(field) {
            document.getElementById(field).focus();
        }
    </script>
</head>
<body>

    <div class="containerz">
        <h2>Login</h2>
        
        <?php
        // Initialize error message
        $login_error = '';
        $focus_field = ''; // Variable to store which field to focus on
             session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim(htmlspecialchars($_POST['username']));
            $password = trim($_POST['password']);

            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "web");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare a SQL statement
            $stmt = $conn->prepare("SELECT password FROM accounts WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            // Check if username exists
            if ($stmt->num_rows > 0) {
                // Fetch the hashed password
                $stmt->bind_result($hashed_password);
                $stmt->fetch();

                // Verify the password
                if (password_verify($password, $hashed_password)) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['surname'] = $user['surname'];
                
                    // Redirect to a different page or handle successful login here
                    header("Location: home.php");
                    exit();
                } else {
                    $login_error = "Invalid password!";
                    $focus_field = 'password'; // Set focus to password field
                }
            } else {
                $login_error = "Username not found!";
                $focus_field = 'username'; // Set focus to username field
            }

            $stmt->close();
            $conn->close();
        }

        // Display login error if there is one
        if ($login_error) {
            echo "<p class='error'>$login_error</p>";
            echo "<script>setFocus('$focus_field');</script>"; // Set focus based on error
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-containerz">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
           <div class="button"><button type="submit" class="buttonz">Login</button></div>
        </form>
        <p>Don't have an account? <a href="registering.php">Sign up here</a></p>
    </div>
</body>
</html>
