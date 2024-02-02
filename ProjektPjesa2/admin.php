<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['action']) && $_POST['action'] === 'edit') {
        
        $userId = isset($_POST['userId']) ? $_POST['userId'] : '';

        //qitu tqon te ni file tjeter ku munesh me edit userin
        header("Location: edit_user.php? userId=$userId");
        exit();
    }
}

?>
