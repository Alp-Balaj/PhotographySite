<?php
    session_start();
    include("connections.php");

    function sanitize($data) {
        return htmlspecialchars(strip_tags($data));
    }
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = sanitize($_POST['email']);
        $password = sanitize($_POST['password']);

        if (!validateEmail($email)) {
            echo "Invalid email format";
        } else {

            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = $conn->query($query);
    
            if ($result->num_rows > 0) {
                header("Location: index.php");
                $_SESSION['Id'] = $userId;
            } else {
                header("Location: Login.php");
            }
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
    <div class="login-box">
        <a href="index.php" class="name">ASPIRE</a>
        <form method="post" name="form">
            <div class="user-box"><input type="email" name="email" placeholder="Email or Username" id="email"></div>
            <div id="email_error">Please fill in your email</div>
            <div class="user-box"><input type="password" name="password" placeholder="Password" id="password"></div>
            <div id="pass_error">Please fill in your password</div>
            <div class="ForgotP"><a href="">Forgot your password?</a></div>
            <div class="Submit-Button"><button type="submit">Log-in</button></div>
            <div class="par"><p>Dont have an account? <a href="Register.php" class="register">Register</a> with us</p></div>
        </form>
    </div>
    <script src="valid.js"></script>
</body>
</html> 