<?php
include("connections.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //prej formes vin qito 
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(strlen($name)>=4){
        $query = "UPDATE users SET Name = '$name', Email = '$email' WHERE User_id = '$userId'";
    }
    else{
        header("Location: errorEdit.php");
        exit();
    }
    

    if ($conn->query($query) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } 
}
?>
