<?php
        $con = mysqli_connect("localhost", "root", "", "the_store") or 
                die(mysqli_error() . "occurs");
        mysqli_select_db($con, "the_store");
        $uname = "";
        $pwd = "";
        if (!empty($_POST['uname'])) {
            $uname = $_POST['uname'];
            //echo $uname;
        }
        if (!empty($_POST['pwd'])) {
            $pwd = $_POST['pwd'];
        }
        if(!empty($uname) && !empty($pwd)){
            //echo "a";
        $query = "select * from Userdetails where username = \"$uname\" "
                . "and password = \"$pwd\"";
        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);
        if($num){
            setcookie("details",$uname);
            header("location:Profilepage.php");
        }
        else{
            $msg = 'Login Failed! Please make sure that you enter the correct '
                    . 'details';
            echo "<script type = \"text/javascript\">alert(\"$msg\")</script>";
        }
        }
        
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" type="text/css" href = "css/style.css" >
        <link href = "css/style2.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul>
            <li><a class= "logo" href="index.php"><b>The Store</b></a></li>
            <div class = "floatright">
            <li><a class="active" href="loginpg.php">Login</a></li>
            <li><a class= "navbar" href="signup.php">Signup</a></li>
            </div>
        </ul>
        <form method="post" action="loginpg.php" class="loginform">
        <table align = "center">
                <tr>
                <td>
                    <h1 style="color: #ff6666;">Login</h1>
                </td>
                </tr>
                <tr>
                    <td><input required type="text" name="uname" placeholder="Username" class="input"></td>
                </tr>
                <tr>
                    <td><input required type="password" name="pwd" placeholder="Password" class="input"></td>
                </tr>
                <tr>
                    <td>
                        <br><br><input type="submit" class = "button" value = "Login!">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><br><a href ="signup.php">New user? Sign up.</a>
                    </td>
                </tr>
        </table>
        </form>
        
    </body>
</html>
