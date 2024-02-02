<?php
session_start();
include("connections.php");
$logged = false;
$isAdmin = false;

if (isset($_SESSION['Id'])) {
    $userId = $_SESSION['Id'];

    // me rujt informatat e userit qe ka log in
    $query = "SELECT * FROM users WHERE User_id = '$userId'";
    $result = $conn->query($query);

    // me i rujt users dikun qe na vyn me i access ndashboard
    $query = "SELECT * FROM users";
    $dashUsers = $conn->query($query);    

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        
        $emri = $user['Name'];
        // Variable qe na vyn te dijm a eshte logged in edhe a eshte admin
        $logged = true;

        $testAD = $user['Admin'];

        if($testAD!=0){
            $isAdmin = true;
        }

    } else {
        
        $emri = "Unknown User";
    }
} else {
    
    $emri = "Guest";
}

?>