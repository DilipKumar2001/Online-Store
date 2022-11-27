<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) 
    { header('location: products.php'); }
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
      require  'includes/header.php';
      ?>
        
        <div id="banner_image">
            <div class="container">
                <center><div id="banner_content"><h1>We Sell Lifestyle</h1>
                        <p>Flat 40% of on premium brands</p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>        
                    </div></center>
                
            </div>   
        </div>
        <br><br><br>
        <?php
      include 'includes/footer.php';
        ?>
              
    </body>
</html>
