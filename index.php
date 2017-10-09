<!DOCTYPE html>
<html>
    <head>
        <title>The Store</title>
        <link rel="stylesheet" href="css/home-page.css">
        <script src="js/home-page.js"></script>
    </head>
    <body>
        <div class="main-header">
            <h1 id="logo">The Store</h1>
        </div>
        <div class="sub-header" style="background-color: #4CAF50;">
            <ul id="nav-bar">
                <li><a href="category.php" class="account" style="margin-left: 0;">Categories</a></li>
                <?php
                if(isset($_COOKIE['details'])){
                    echo "<li style='float: right'><a href='#' class='account'>Sign Out</a></li>";
                    echo "<li style='float: right'><a href='Profilepage.php' class='account'> Profile</a></li>";
                } else {
                    echo "<li style='float: right'><a href='signup.php' class='account'>Sign Up</a></li>";
                    echo "<li style='float: right'><a href='loginpg.php' class='account'>Log In</a></li>";
                }
                ?>
            </ul>
        </div>
        <div>
            <a href="app.php"><img src="img/car1.jpg" width="100%" id="slider"></a>
        </div>
    </body>
</html>