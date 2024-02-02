<?php include("user_info.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <link rel="stylesheet" href="Style.css">
</head>
    <body>

        <div class="TopNav">
            <div class="firstDiv">
                <a class="navLink" href="index.php"><div class="Name">ASPIRE</div></a>
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
                <?php endif; ?>
                <button class="dashboardBT"><a href="./dashboard.php">~</a></button>
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

        <footer>
        <div class="Footer-content">
            <h3>Company</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat laboriosam consequuntur voluptates excepturi. Reprehenderit itaque ex vero nostrum optio, minus obcaecati quasi qui adipisci eaque suscipit animi odit laudantium? Veritatis?</p>
        </div>
        <div class="Footer-content">
            <h3>Contacts</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci magnam ad maxime pariatur numquam itaque excepturi, dicta molestiae qui error! Vitae perspiciatis deserunt omnis quidem magnam temporibus officiis dolor est.</p>
        </div>
        <div class="Footer-content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, corrupti cum. Sequi non, sunt temporibus qui itaque inventore debitis laborum nemo at dolore, magni ipsum. Voluptate quisquam expedita siteos?</p>
        </div>
        <div class="Footer-content">
            <h3>Socials</h3>
            <div class="logos-txt"><img src="./Images/facebook.webp" class="logos-footer" alt="1"><div class="txt-only"> <a class="links" href="">facebook</a></div></div>
            <div class="logos-txt"><img src="./Images/instagram.png" class="logos-footer" alt="2"><div class="txt-only"> <a class="links" href="">instagram</a></div></div>   
            <div class="logos-txt"><img src="./Images/twitter.png" class="logos-footer" alt="3">  <div class="txt-only"> <a class="links" href="">twitter</a></div></div> 
            <div class="logos-txt"><img src="./Images/pinterest.png" class="logos-footer" alt="4"><div class="txt-only"> <a class="links" href="">pinterest</a></div></div>    
        </div>
    </footer>

    </body>
</html>
