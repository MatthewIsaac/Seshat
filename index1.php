<?php

session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bookStyles.css" />
    <title>Seshat's Scribes</title>
</head>
<body>
    <!--- <img src="images/pic.jpeg" alt="Image of book cover"> -->
    <header>
        <div class="flexbox-container">
            <div class="flexbox-item flexbox-item-1">
                <ul>
                    <?php if(!isset($_SESSION['user_name'])): ?>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                    <?php elseif($_SESSION['admin_status'] === true): ?>
                        <li>Welcome, <?= $_SESSION['user_name']?></li>
                        <li><a href="logout.php">Log out</a></li>
                        <li><a href="#"><?= $_SESSION['user_name']?></a></li>
                        <li><a href="admin.php">View Admin Page</a></li>
                    <?php else: ?>
                        <li>Welcome, <?= $_SESSION['user_name']?></li>
                        <li><a href="logout.php">Log out</a></li>
                        <li><a href="#"><?= $_SESSION['user_name']?></a></li>
                    <?php endif ?>
                </ul>
            </div>  
        </div> 
    </header>
    <div id="horizontalNavBar">
        <ul>
        <li><a href="index.php">HOME</a></li>
		<li><a href="authors.php">ABOUT THE AUTHORS</a></li>
        <li><a href="blog.php">BLOG</a></li>
        </ul>
    </div>
    <div id="bookInfo">
        <img id="bookCover" src="images/pic.jpeg" alt="Image of book cover">
        <h1>TITLE OF BOOK</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt neque modi libero architecto consequuntur quibusdam nihil asperiores, ratione beatae omnis maxime magni accusamus incidunt aliquid saepe repellendus ut cupiditate fugiat!</p>
    </div>
    <footer>
        <nav id="layerOne" title="FirstFooterNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <nav id="layerTwo" title="SecondFooterNav">
            <p>Copyright C 2023 <a href="index.php">Seshat's Scribes</a></p>
        </nav>

        <nav id="layerThree" title="ThirdFooterNav">
            <p>Winnipeg, MB, CA</p>
            <a href="#">Map</a>
        </nav>
    </footer>
</body>
</html>