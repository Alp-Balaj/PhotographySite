<?php
session_start();
include("connections.php");

if (isset($_POST['registerBtn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password_1'];
    $password2 = $_POST['password_2'];

    $userId = mt_rand(1, 999);

    $sql = "INSERT INTO users (User_id, Name, Email, Password) VALUES ('$userId', '$username', '$email', '$password')";



    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register page</title>
    <link rel="stylesheet" href="RegisterCSS.css">
    <link rel="stylesheet" href="script.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="login-box">
        <a href="index.php" class="name">ASPIRE</a>
        <form method="post" name="form">


            <div class="user-box"><input type="text" placeholder="Name" id="emri" name="username"></div>
            <div id="emri_error">Shkruaj Emrin</div>
            <div class="user-box"> <input type="email" placeholder="Email" id="email" name="email"></div>
            <div id="email_error">Shkruaj Emalin</div>
            <div class="user-box"><input type="password" placeholder="Password" id="password" name="password_1"></div>
            <div id="password_error">Shkruaj Passwordin</div>
            <div class="user-box"><input type="password" placeholder="Confirm Password" id="ConfirmPassword"
                    name="password_2">
                <div id="ConfirmPassword_error">Confirmo Passwordin</div>
                <div class="Submit-Button"><button type="submit" name="registerBtn">Register</button></div>

                <div class="par">
                    <p>Already have an account?<a class="login" href="Login.php"> Log-in</a> here</p>
                </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>