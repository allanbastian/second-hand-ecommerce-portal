<?php
$conn = mysqli_connect("localhost", "root", "", "the_store");
if (!$conn) {
    die('Mysql error : ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Store</title>
        <link rel="stylesheet" href="css/home-page.css">
    </head>
    <body>
        <div class="main-header">
            <h1 id="logo"><a href="index.php" class="account">The Store</a></h1>
        </div>
        <div class="sub-header" style="background-color: #4CAF50;">
            <ul id="nav-bar">
                <!-- TODO : Add link to signup and login -->
                <?php
                if(isset($_COOKIE['details'])){
                    echo "<li style='float: right'><a href='#' class='account'>Sign Out</a></li>";
                    echo "<li style='float: right'><a href='Profilepage.php' class='account'>Profile</a></li>";
                } else {
                    echo "<li style='float: right'><a href='index.php' class='account'>Sign Up</a></li>";
                    echo "<li style='float: right'><a href='loginpg.php' class='account'>Log In</a></li>";
                }
                ?>
                <li>&nbsp</li>
            </ul>
        </div>
        <div>
            <h2 style="margin: 24px" id="home">School</h2>
            <?php
                $query1 = mysqli_query($conn,"select * from products WHERE prodCat = 'Home'");
                echo "<ul>";
                while ($data = mysqli_fetch_assoc($query1)){
                    $imgSrc = $data['prodImg'];
                    $name = $data['prodName'];
                    $price = $data['prodPrice'];
                    echo "<li style='display: inline-block;margin: 16px;'>
                       <img src=$imgSrc width='200px' height='200px'>
                       <h3 align='center'>$name</h3>
                       <h4 align='center'>Rs. $price</h4>
                    </li>";
                }
                echo "</ul>";
            ?>
        </div>
        <div>
            <h2 style="margin: 24px" id="pers">Watch</h2>
            <?php
            $query1 = mysqli_query($conn,"select * from products WHERE prodCat = 'Personal'");
            echo "<ul>";
            while ($data = mysqli_fetch_assoc($query1)){
                $imgSrc = $data['prodImg'];
                $name = $data['prodName'];
                $price = $data['prodPrice'];
                echo "<li style='display: inline-block;margin: 16px;'>
                       <img src=$imgSrc width='220px' height='250px'>
                       <h3 align='center'>$name</h3>
                       <h4 align='center'>Rs. $price</h4>
                </li>";
            }
            echo "</ul>";
            ?>
        </div>
        <div>
            <h2 style="margin: 24px" id="books">Books</h2>
            <?php
            $query1 = mysqli_query($conn,"select * from products WHERE prodCat = 'Book'");
            echo "<ul>";
            while ($data = mysqli_fetch_assoc($query1)){
                $imgSrc = $data['prodImg'];
                $name = $data['prodName'];
                $price = $data['prodPrice'];
                echo "<li style='display: inline-block;margin: 24px;'>
                       <img src=$imgSrc width='150px' height='250px'>
                       <h3 align='center'>$name</h3>
                       <h4 align='center'>Rs. $price</h4>
                </li>";
            }
            echo "</ul>";
            ?>
        </div>
    </body>
</html>