<?php
include("connections.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //prej formes vin qito 
    $userId = $_POST['userId'];


    $query = "DELETE FROM users WHERE User_id = '$userId'";

    if ($conn->query($query) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } 
}
?>