<?php
session_start();

$username = "";
$email = "";
$errors = "";

$db = mysqli_connect('localhost', 'root', '', 'projektdb');

if (isset($_POST['reg_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($username)) { array_push($errors, "Username is requried");}
    if (empty($email)) { array_push($errors, "Email is requried");}
    if (empty($password_1)) { array_push($errors, "Password is required");}
    if ($password_1 != $password_2) { array_push($errors,"The two passwords dont match");
    }

    $user_check_query = "SELECT * FROM users WHERE username ='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_array($result);

    if($user){
        if ($user['username']=== $username){
            array_push($errors,'Username already exists');
        }
        if ($user['email']=== $email){
            array_push($errors,'Email already in use');
        }
    }
    if (count($errors) == 0) {
        $password = md5 ($password_1);

        $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        
        mysqli_query($db, $query);
        $_SESSION['username']= $username;
        $_SESSION['success']= "You are now logged in";
        header('location: index.php');

    }
}