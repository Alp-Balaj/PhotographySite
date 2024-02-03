<?php
include("connections.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //prej formes vin qito 
    $ID = $_POST['ID'];


    $query = "DELETE FROM contact_messages WHERE ID = '$ID'";

    if ($conn->query($query) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } 
}
?>