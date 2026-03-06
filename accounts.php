<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Music Events Ticketing</title>
    <link rel="stylesheet" href="home.css">
    <script>
        function validateSignupForm() {
            const firstname = document.querySelector("#signup-firstname").value;
            const surname = document.querySelector("#signup-surname").value;
            const username = document.querySelector("#signup-username").value;
            const password = document.querySelector("#signup-password").value;
            const email = document.querySelector("#signup-email").value;
            const confirmpassword = document.querySelector("#signup-confirmpassword").value;
            const phonenumber = document.querySelector("#signup-phonenumber").value;

            // Basic form validation
            if (username === "" || password === "" || email === "" || confirmpassword === "") {
                alert("All fields are required!");
                return false;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters long!");
                return false;
            }
            if (password !== confirmpassword) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <header>
        <h1>Signup</h1>
    </header>

    <main>
        <form action="register.php" method="POST" onsubmit="return validateSignupForm()">
            <label for="signup-firstname">First Name</label>
            <input type="text" id="signup-firstname" name="firstname"><br>

            <label for="signup-surname">Surname</label>
            <input type="text" id="signup-surname" name="surname"><br>

            <label for="signup-username">Username</label>
            <input type="text" id="signup-username" name="username"><br>

            <label for="signup-email">Email</label>
            <input type="email" id="signup-email" name="email"><br>

            <label for="signup-password">Password</label>
            <input type="password" id="signup-password" name="password"><br>

            <label for="signup-confirmpassword">Confirm Password</label>
            <input type="password" id="signup-confirmpassword" name="confirmpassword"><br>

            <label for="signup-phonenumber">Phone Number</label>
            <input type="text" id="signup-phonenumber" name="phonenumber"><br>

            <button type="submit" class="btn-primary">Signup</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </main>
</body>
</html>


