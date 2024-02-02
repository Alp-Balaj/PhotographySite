<?php
include("connections.php");
include("user_info.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $imageUrl = $_POST['image_url'];  
    $description = $_POST['description'];
    $type = $_POST['type'];  

    if($isAdmin){
        $query = "INSERT INTO gallery (image_url, description, admin_description, type) VALUES ('$imageUrl', '$description', '$emri', '$type')";
    } else { 
        echo "You're not an admin. ";
    }

    if ($conn->query($query) === TRUE) {
        header("Location: ./Gallery.php");
        exit();
    }

    $conn->close();
}
?>
