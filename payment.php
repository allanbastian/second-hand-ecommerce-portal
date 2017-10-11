<html>
  <head>
    <title> Payment Portal </title>
  </head>
  <body>
      <h1 align="center"> Please wait while we redirect you to a payment portal... </h1>
      <?php
        $con = mysqli_connect("localhost", "root", "", "the_store")
        or dies(mysqli_error(), " occurs");
        $que = mysqli_query($con, "select price from negotiation");
        $fin = mysqli_fetch_assoc($que);
        echo "<h1>", $fin['price'] , "</h1><br>";
        $clear = mysqli_query($con, "delete * from negotiation where 1");
        
        ?>
  </body>
</html>
