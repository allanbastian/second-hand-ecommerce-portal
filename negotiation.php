<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/Form.css">
        <script type="text/javascript" src="js/scrpt.js"></script>
        <title> Negotiation </title>
    </head>
    <body>
        <?php
        $con = mysqli_connect("localhost", "root", "", "the_store");
        if (!$con) {
            die(mysqli_error());
        }
        $query = mysqli_query($con, "SELECT price FROM negotiation");
        $res = mysqli_fetch_assoc($query);
        $val = $res['price'];
        ?>
        <div>
            <table align="center">
                <tr>
                    <td align="center"> Current price: <p id="priceHolder"> <?php
                            echo $val;
                            ?> </p></td>
                </tr>
                <tr>
                    <td align="center"><input type="number" id="price" name="price"></td>
                </tr>
                <tr>
                    <td align="center"><br>
                        <button class="button" id="increase" onclick="add()">Increase</button>
                        <button class="button" id="decrease" onclick="sub()">Decrease</button>
                    </td>
                </tr>
                <tr>
                    <td align="center"><br>
                        <button><a href="payment.php">AGREE</a></button>
                </tr>
            </table>
        </div>
    </body>
</html>
