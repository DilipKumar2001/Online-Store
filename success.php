<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$users_id = $_SESSION['users_id'];
$query = "UPDATE users_products SET status ='confirmed' where users_id = '$users_id' and "
        . "status = 'added to cart'";
$result=  mysqli_query($con, $query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
          <title>Life Style Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" 
        type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
        </script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <?php
      include 'includes/header.php';
      
      ?>
    <center>
        <div class="jumbotron row_style">
            <h2>Your order is confirmed. Thank you for shopping
                with us.<a href="products.php"> Click here</a> to purchase any other item.</h2>    
        </div>
    </center>
    </body>
</html>
