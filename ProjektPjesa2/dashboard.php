<?php include("user_info.php"); ?>
<?php include("contact.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <div class="TopNav">
        <div class="firstDiv">
            <a class="navLink" href="index.php">
                <div class="Name">ASPIRE</div>
            </a>
            <div class="link">
                <a class="navLink" href="./Gallery.php">Gallery</a>
            </div>
            <div class="link">
                <a class="navLink" href="./Awards.php">2023 Awards</a>
            </div>
            <div class="link">
                <a class="navLink" href="./AboutUs.php">About Us</a>
            </div>
            <div class="link">
                <a class="navLink" href="./ContactUs.php">Contact Us</a>
            </div>
            <?php if ($logged): ?>
                <!-- Display user's name when logged in -->
                <div style=" margin-left: 15px;" class="Name">
                    <?php echo $emri; ?>
                </div>
                <?php if ($isAdmin): ?>
                    <button class="dashboardBT"><a href="./dashboard.php">~</a></button>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="secondDiv">
            <?php if (!$logged): ?>
                <div class="Login">
                    <a class="LoginLink" href="Login.php">Log-in</a>
                </div>
                <div class="Signup">
                    <a class="SignupButton" href="Register.php">Sign-up</a>
                </div>
            <?php else: ?>
                <div style="margin-right: 20px;" class="Signup">
                    <a class="SignupButton" href="Logout.php">Log-out</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="PTopNav">
        <div class="unlink">
            <div class="plink">
                <a class="navLink" href="./Gallery.php">Gallery</a>
            </div>
            <div class="plink">
                <a class="navLink" href="./Awards.php">2023 Awards</a>
            </div>
            <div class="plink">
                <a class="navLink" href="./AboutUs.php">About Us</a>
            </div>
            <div class="plink">
                <a class="navLink" href="./ContactUs.php">Contact Us</a>
            </div>
        </div>
    </div>


    <div class="dash">
        <div class="container">
            <h1>Users</h1>
            <div class="row">
                <div>
                    <table class="tableDiv" border="1">
                        <tr>
                            <th>User-ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($dashUsers as $currentUser): ?>
                            <tr>
                                <td>
                                    <?= isset($currentUser['User_id']) ? $currentUser['User_id'] : 'Null' ?>
                                </td>

                                <td>
                                    <?= isset($currentUser['Name']) ? $currentUser['Name'] : 'Null' ?>
                                </td>

                                <td>
                                    <?= isset($currentUser['Email']) ? $currentUser['Email'] : 'Null' ?>
                                </td>

                                <td>
                                    <!-- Edit form -->
                                    <form method="post" action="admin.php">
                                        <input type="hidden" name="userId"
                                            value="<?= isset($currentUser['User_id']) ? $currentUser['User_id'] : '' ?>">
                                        <button type="submit" name="action" value="edit">Edit</button>
                                    </form>

                                    <!-- Delete form -->
                                    <form method="post" action="delete.php">
                                        <input type="hidden" name="userId"
                                            value="<?= isset($currentUser['User_id']) ? $currentUser['User_id'] : '' ?>">
                                        <input type="hidden" name="username"
                                            value="<?= isset($currentUser['Name']) ? $currentUser['Name'] : '' ?>">
                                        <button type="submit" name="action" value="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <h1>Contact Messages</h1>
            <div class="row">
                <div>
                    <table  class="tableDiv" border="1">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                        <?php foreach ($Messages as $message): ?>
                            <tr>
                                <td>
                                    <?= $message['ID'] ?>
                                </td>
                                <td>
                                    <?= $message['full_name'] ?>
                                </td>
                                <td>
                                    <?= $message['email'] ?>
                                </td>
                                <td>
                                    <?= $message['message'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>