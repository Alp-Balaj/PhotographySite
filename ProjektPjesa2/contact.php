<?php

include("connections.php");

$query = "SELECT * FROM contact_messages";
$Messages = $conn->query($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $insertQuery = "INSERT INTO contact_messages (full_name, email, subject, message) 
              VALUES ('$fullName', '$email', '$subject', '$message')";

    
    if ($conn->query($insertQuery) === TRUE) {
        header("Location: ./ContactUs.php");
        exit();
    } else {
        echo "Kishte probleme gjate dergimit te mesazhit";
    }

   
    $conn->close();
}
?>
