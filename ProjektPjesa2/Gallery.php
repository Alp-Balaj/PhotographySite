<?php include("user_info.php"); ?>
<?php include("GalleryPhotos.php"); ?>
<?php include("connections.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery-Aspire</title>
    <link rel="stylesheet" href="./Style.css">
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
                <!-- display users name when logged in -->
                <div style=" margin-left: 15px;" class="Name">
                    <?php echo $emri; ?>
                </div>
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
    <div class="hero">
        <div class="container">
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++++Landscapes++++++++++++++++++++++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <h2 class="title">Best of our landscapes </h2>
            <div class="hidden-row">  
                <?php if ($isAdmin): ?>
                    <button class="add-image" id="toggleForm1">+</button>
                <?php endif; ?>
            </div>  
            <div class="hidden-form">   
                <?php if ($isAdmin): ?>
                    <form id="imageForm1" action="add_image.php" method="post" enctype="multipart/form-data" style="display: none;">
                        <label for="image">Choose Image (#url):</label>
                        <input type="text" name="image_url" id="image" required>

                        <label for="description">Description:</label>
                        <input type="text" name="description" id="description" required></input>

                        <!-- use users(admins) name -->
                        <input type="hidden" name="admin_description" value="<?php echo $emri; ?>">
                        <input type="hidden" name="type" value="1">

                        <input type="submit" value="Add Image">
                    </form>
                <?php endif; ?>
            </div> 
            <div class="row">
                <div class="scroll">
                    <!-- show images and respective descriptions prej databazes -->
                <?php foreach ($LSImages as $image): ?>
                    <div class="cards">
                        <div class="wrapper-cards">
                            <img src="<?php echo $image['image_url']; ?>" alt="">
                            <p><?php echo $image['description']; ?></p>
                            <div class="addedBy">   
                                <?php if ($isAdmin): ?>
                                    <p>Added by Admin: <?php echo $image['admin_description']; ?></p>
                                    <form action="deleteImage.php" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $image['ID']; ?>">
                                        <input class="deleteB" type="submit" value="Delete Image">
                                    </form>
                                <?php endif; ?>
                            </div> 
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="row-2">
                <div class="profile">
                    <div>
                        <img class="profile-img" src="https://upload.wikimedia.org/wikipedia/commons/6/64/G%C3%ABrmia_Park%2C_Prishtin%C3%AB%2C_Kosova.jpg" alt="">
                    </div>
                </div>
                <div class="profile">
                    <h3 class="sub-title">Germia Park</h3>
                    <p class="parag">These photos were chosen by our very best, and were captured by some of the worldwide most known photographers. In capturing landscapes people find peace and quite this is the pinicle of what that.</p>
                    <span class="more">
                        <span></span>
                        <a href="#">Learn more</a>
                    </span>
                </div>
            </div>
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <h2 class="title">Best of our Animals </h2>
            <div class="hidden-row">  
                <?php if ($isAdmin): ?>
                    <button class="add-image" id="toggleForm2">+</button>
                <?php endif; ?>
            </div>  
            <div class="hidden-form">   
                <?php if ($isAdmin): ?>
                    <form id="imageForm2" action="add_image.php" method="post" enctype="multipart/form-data" style="display: none;">
                        <label for="image">Choose Image (#url):</label>
                        <input type="text" name="image_url" id="image" required>

                        <label for="description">Description:</label>
                        <input type="text" name="description" id="description" required></input>

                        <!-- use users(admins) name -->
                        <input type="hidden" name="admin_description" value="<?php echo $emri; ?>">
                        <input type="hidden" name="type" value="2">

                        <input type="submit" value="Add Image">
                    </form>
                <?php endif; ?>
            </div> 
            <div class="row">
                <div class="scroll">
                    <!-- show images and respective descriptions prej databazes -->
                <?php foreach ($ANImages as $image): ?>
                    <div class="cards">
                        <div class="wrapper-cards">
                            <img src="<?php echo $image['image_url']; ?>" alt="">
                            <p><?php echo $image['description']; ?></p>
                            <div class="addedBy">   
                                <?php if ($isAdmin): ?>
                                    <p>Added by Admin: <?php echo $image['admin_description']; ?></p>
                                    <form action="deleteImage.php" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $image['ID']; ?>">
                                        <input class="deleteB" type="submit" value="Delete Image">
                                    </form>
                                <?php endif; ?>
                            </div> 
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="row-2">
                <div class="profile">
                    <div>
                        <img class="profile-img" src="https://upload.wikimedia.org/wikipedia/commons/6/64/G%C3%ABrmia_Park%2C_Prishtin%C3%AB%2C_Kosova.jpg" alt="">
                    </div>
                </div>
                <div class="profile">
                    <h3 class="sub-title">Germia Park</h3>
                    <p class="parag">These photos were chosen by our very best, and were captured by some of the worldwide most known photographers. In capturing landscapes people find peace and quite this is the pinicle of what that.</p>
                    <span class="more">
                        <span></span>
                        <a href="#">Learn more</a>
                    </span>
                </div>
            </div>
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <h2 class="title">Best of our Close-up </h2>
            <div class="hidden-row">  
                <?php if ($isAdmin): ?>
                    <button class="add-image" id="toggleForm3">+</button>
                <?php endif; ?>
            </div>  
            <div class="hidden-form">   
                <?php if ($isAdmin): ?>
                    <form id="imageForm3" action="add_image.php" method="post" enctype="multipart/form-data" style="display: none;">
                        <label for="image">Choose Image (#url):</label>
                        <input type="text" name="image_url" id="image" required>

                        <label for="description">Description:</label>
                        <input type="text" name="description" id="description" required></input>

                        <!-- use users(admins) name -->
                        <input type="hidden" name="admin_description" value="<?php echo $emri; ?>">
                        <input type="hidden" name="type" value="3">

                        <input type="submit" value="Add Image">
                    </form>
                <?php endif; ?>
            </div> 
            <div class="row">
                <div class="scroll">
                    <!-- show images and respective descriptions prej databazes -->
                <?php foreach ($CLImages as $image): ?>
                    <div class="cards">
                        <div class="wrapper-cards">
                            <img src="<?php echo $image['image_url']; ?>" alt="">
                            <p><?php echo $image['description']; ?></p>
                            <div class="addedBy">   
                                <?php if ($isAdmin): ?>
                                    <p>Added by Admin: <?php echo $image['admin_description']; ?></p>
                                    <form action="deleteImage.php" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $image['ID']; ?>">
                                        <input class="deleteB" type="submit" value="Delete Image">
                                    </form>
                                <?php endif; ?>
                            </div> 
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="row-2">
                <div class="profile">
                    <div>
                        <img class="profile-img" src="https://upload.wikimedia.org/wikipedia/commons/6/64/G%C3%ABrmia_Park%2C_Prishtin%C3%AB%2C_Kosova.jpg" alt="">
                    </div>
                </div>
                <div class="profile">
                    <h3 class="sub-title">Germia Park</h3>
                    <p class="parag">These photos were chosen by our very best, and were captured by some of the worldwide most known photographers. In capturing landscapes people find peace and quite this is the pinicle of what that.</p>
                    <span class="more">
                        <span></span>
                        <a href="#">Learn more</a>
                    </span>
                </div>
            </div>
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
    <script src="./button.js"></script>
</body>
</html>