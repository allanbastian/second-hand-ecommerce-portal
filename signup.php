<?php
    $con = mysqli_connect("localhost", "root", "", "the_store") or die(mysqli_error() . "occurs");
    mysqli_select_db($con, "the_store");
    $uname = "";
    $pwd = "";
    $name = "";
    $contact = "";
    $address = "";
    $secquesno = "";
    $secquesans = "";
    if (!empty($_POST['uname'])) {
        $uname = $_POST['uname'];
    }
    if (!empty($_POST['pwd'])) {
        $pwd = $_POST['pwd'];
    }
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (!empty($_POST['contactno'])) {
        $contact = $_POST['contactno'];
    }
    if (!empty($_POST['address'])) {
        $address = $_POST['address'];
    }
    if (!empty($_POST['secquesno'])) {
        $secquesno = $_POST['secquesno'];
    }
    if (!empty($_POST['secquesans'])) {
        $secquesans = $_POST['secquesans'];
    }
    if ($uname!="" && $pwd!="" && $name!="" && $contact!="" && $address!=""&& 
            $secquesans!="" && $secquesno!=""){
        
        $query = "insert into Userdetails values(\"$uname\",\"$pwd\",\"$name\",$contact,"
                . "\"$address\",\"$secquesans\",$secquesno)";
        
        echo mysqli_query($con,$query) or die(mysqli_error($con)."occurs");
        
        if(!mysqli_query($con,$query)){
            header('Location: loginpg.php');
        }
        
        else{
            echo 'Signup Failed!<br> Please make sure that you enter the correct '
                    . 'details';
        }
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href = "css/style2.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>
        <ul>
            <li><a class= "logo" href="home.php"><b>The Store</b></a></li>
            <div class = "floatright">
            <li><a class= "navbar" href="loginpg.php">Login</a></li>
            <li><a class="active" href="signup.php">Signup</a></li>
            </div>
        </ul>
    <form method="post" action="signup.php" class="signupform">
            <table align = "center">
                <tr>
                <td>
                    <h1 style="color: #ff6666;">Sign-Up</h1>
                </td>
                </tr>
                <tr>
                    <td><input required type="text" name="uname" placeholder="Username" 
                               class="input"></td>
                </tr>
                <tr>
                    <td><input required type="password" name="pwd" placeholder="Password" 
                               class="input"></td>
                </tr>
                <tr>
                    <td><input required type="text" name="name" placeholder="Name" 
                               class="input"></td>
                </tr>
                <tr>
                    <td><input required type="text" name="contactno" placeholder="Contact Number" 
                               class="input"></td>
                </tr>
                <tr>
                    <td><textarea required name="address" placeholder="Address" 
                                  class="input"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <select required name = "secquesno" placeholder="Select a question" 
                                class="input">
                            <option value = "1">What was your childhood nickname?</option>
                            <option value = "2">What was the name of your first pet?</option>
                            <option value = "3">What is your birthplace?</option>
                            <option value = "4">What is your mothers maiden name?</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input required type = "text" name="secquesans" 
                               placeholder="Answer" class="input"></td>
                </tr>
                <tr>
                    <td>
                        <br><br><input type="submit" class = "button" value = "Sign Up!">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><br><a href = "Loginpg.php" class="link">Existing user? Login.</a>
                    </td>
                </tr>
            </table>
        </form>

</body>
</html>
