<?php
include("connections.php"); 

if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];

    
    $query = "SELECT * FROM users WHERE User_id = '$userId'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="./Style.css">
</head>

<body>
    <div class="container">
        <div class="editUser">
        <h1 class="title">Edit User</h1>
        <form method="post" action="update_user.php"> 
        <input type="hidden" name="userId" value="<?= $user['User_id'] ?>">
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $user['Name'] ?>" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $user['Email'] ?>" required>

        <button type="submit">Update User</button>
        </form>
        </div>
    </div>
</body>

</html>
