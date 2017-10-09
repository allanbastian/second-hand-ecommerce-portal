
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href = "css/style2.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
    $con = mysqli_connect("localhost", "root", "", "the_store") or die(mysqli_error() . "occurs");
    mysqli_select_db($con, "the_store");
        /* 
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
    $uname = $_COOKIE["details"];
    $query = "select * from Userdetails where username = \"$uname\"";
    $result = mysqli_query($con, $query);
    $rec_set = mysqli_fetch_assoc($result);
    echo
        "<div>
        <ul>
            <li><a class= \"logo\" href=\"index.php\"><b>The Store</b></a></li>
            <div class = \"floatright\">
            <li><a class=\"active\" href=\"Profilepage.php\">Profile</a></li>
            <li><a class= \"navbar\">Signout</a></li>
            </div>
        </ul>
        </div>
        <div class = \"userdetail\">
            <table align = \"center\">
                <tr><td style = \"float:left;\"><br><b>Name: </b>$rec_set[name]</td>"
            . "<td style = \"float:right;\"><br><b>Address:</b> $rec_set[Address]</td></tr>
                <tr><td style = \"float:left;\"><br><b>Username: </b>$rec_set[username]<br><br></td>"
            . "<td style = \"float:right; margin-left: 100px;\"><br><b>Contact Number: </b> $rec_set[contactno]<br><br></td></tr>
            </table>
        </div>
        <div class = \"posted\">
            No Items Sold!
        </div>
        <div class = \"bought\">
            No Items Bought!
        </div>"
       ?>
    </body>
</html> 
