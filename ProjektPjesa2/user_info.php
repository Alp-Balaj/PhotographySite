<?php
session_start();
include("connections.php");
$logged = false;
$isAdmin = false;

if (isset($_SESSION['Id'])) {
    $userId = $_SESSION['Id'];

    
    $query = "SELECT * FROM users WHERE user_id = '$userId'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        
        $emri = $user['Name'];
        // Variable qe na vyn te dijm a eshte logged in edhe a eshte admin
        $logged = true;

        if('Admin'!=0){
            $isAdmin = true;
        }
        

    } else {
        
        $emri = "Unknown User";
    }
} else {
    
    $emri = "Guest";
}

?>