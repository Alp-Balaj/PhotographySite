<?php
include("connections.php");
include("user_info.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && $isAdmin) {
    
    $imageId = $_POST['ID'];

    
    $deleteQuery = "DELETE FROM gallery WHERE ID = '$imageId'";
    
    if ($conn->query($deleteQuery) === TRUE) {
        header("Location: ./Gallery.php");
        exit();
    } 
}

$conn->close();
?>
