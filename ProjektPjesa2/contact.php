<?php

include("connections.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $query = "INSERT INTO contact_messages (full_name, email, subject, message) 
              VALUES ('$fullName', '$email', '$subject', '$message')";

    
    if ($conn->query($query) === TRUE) {
        header("Location: ./ContactUs.php");
        exit();
    } else {
        echo "Kishte probleme gjate dergimit te mesazhit";
    }

   
    $conn->close();
}
?>
