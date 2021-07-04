<?php
    session_start();
?>
<html>
<head>
    <title>VML-home</title>
    <link rel="icon" type="image/png" href="img/gear00.PNG">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="mobile_menu.js"></script>
</head>
<body>
<div class="row header_2">
        <div class="col-1 col-m-3 header_img">
            <img src="img\gear00.PNG" width="100%">
        </div>
        <div class="col-3 col-m-6 header_text_2">
            <p>VEHICLE MAINTENANCE LOG</p>
        </div>
    
        <div class="col-8 navigation">
            <a href = "logout.php">
                <div class="col-3 col-m-3 navigation_logout_div">
                    <?php 
                        if (!isset($_SESSION['id'])) {
                            echo '<p class="navigation_links">Login</p>';
                        }
                        else {
                            echo '<p class="navigation_links">Log Out</p>';
                        }
                    ?>
                </div>
            </a>
            <a href = "#home_footer">
                <div class="col-3 navigation_links_div" id="nav_link_4">
                    <p class="navigation_links">Contact</p>
                </div>
            </a>
            <a href = "About.php">
                <div class="col-3 col-m-3 navigation_links_div">
                    <p class="navigation_links">About Us</p>
                </div>
            </a>
            <a href = "index.php">
                <div class="col-3 col-m-3 navigation_links_div">
                    <p class="navigation_links">Home</p>
                </div>
            </a>
        </div>
        <div class="col-m-3 dropdown">
            <button onclick="myFunction()" class="dropbtn">...</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.php">Home</a>
                <a href="About.php">About</a>
                <a href="#home_footer">Contact</a>
                <a href="VML_loginpage.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>