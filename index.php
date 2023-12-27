<?php

session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bookStyles.css" />

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>


    <title>Seshat's Scribes</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Simple header</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
        </header>
    </div>

























    <div class="header-container">
        <?php if(!isset($_SESSION['user_name'])): ?>
            <div class="header-item header-item-1">
                <li><a href="login.php">Log In</a></li>
            </div>
            <div class="header-item header-item-2">
                <li><a href="signup.php">Sign Up</a></li>
            </div>
        <?php elseif($_SESSION['admin_status'] === true): ?>
            <div class="header-item header-item-1">
                <li>Welcome, <?= $_SESSION['user_name']?></li>
            </div>
            <div class="header-item header-item-2">
                <li><a href="logout.php">Log out</a></li>
            </div>
            <div class="header-item header-item-3">
                <li><a href="#"><?= $_SESSION['user_name']?></a></li>
            </div>
            <div class="header-item header-item-4">
                <li><a href="admin.php">View Admin Page</a></li>    
            </div>
        <?php else: ?>
            <div class="header-item header-item-1">
                <li>Welcome, <?= $_SESSION['user_name']?></li>
            </div>
            <div class="header-item header-item-2">
                <li><a href="logout.php">Log out</a></li>
            </div>
            <div class="header-item header-item-3">
                <li><a href="#"><?= $_SESSION['user_name']?></a></li>
            </div>
        <?php endif ?>
    </div>
    <div class="horizontal-nav-bar-containter">
        <div class="horizontal-item horizontal-item-1">
            <li><a href="index.php">HOME</a></li>
        </div>
        <div class="horizontal-item horizontal-item-2">
            <li><a href="authors.php">ABOUT THE AUTHORS</a></li>
        </div>
        <div class="horizontal-item horizontal-item-3">
            <li><a href="blog.php">BLOG</a></li>
        </div>
    </div>
    <div class="content-container">
        <div class="content-item content-item-1">
            <h1>TITLE OF BOOK</h1>
        </div>
        <div class="content-item content-item-2">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere fuga suscipit earum dolores explicabo incidunt excepturi, praesentium eum. Facilis nesciunt quasi repellendus labore nostrum eius culpa ea distinctio dolores molestiae.</p>
        </div>
        <div class="content-item content-item-picture">
            <img src="images/pic.jpeg" alt="Image of book cover">
        </div>
    </div>
    <div class="footer-container">
        <div class="footer-subcontainer footer-subcontainer-1">
            <ul>
                <div class="footer-sub-1-item footer-sub-1-item-1">
                    <li><a href="index.php">Home</a></li>
                </div>
                <div class="footer-sub-1-item footer-sub-1-item-2">
                    <li><a href="#">Contact Us</a></li>
                </div>
            </ul>
        </div>
        <div class="footer-subcontainer footer-subcontainer-2">
            <div class="footer-sub-2-item footer-sub-2-item-1">
                <p>Copyright C 2023 <a href="index.php">Seshat's Scribes</a></p>
            </div>     
        </div>
        <div class="footer-subcontainer footer-subcontainer-3">
            <ul>
                <div class="footer-sub-3-item footer-sub-3-item-1">
                    <li>Winnipeg, MB, CA</li>
                </div>   
                <div class="footer-sub-3-item footer-sub-3-item-2">
                    <li><a href="#">Map</a></li>
                </div>
            </ul>
        </div>
    </div>
</body>
</html>