<?php
session_start();
include("connections.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];



    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['Id'] = $row['User_id'];
        header("Location: index.php");
        exit();
    } else {
        header("Location: Login.php");
    }

}

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
            <div class="par">
                <p>Dont have an account? <a href="Register.php" class="register">Register</a> with us</p>
            </div>
        </form>
    </div>
    <script src="valid.js"></script>
</body>

</html>