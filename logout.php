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
        <?php
       session_start();
       header('location:index.php');
       session_destroy();
        ?>
         <?php
        include 'includes/footer.php'; 
         ?>
    </body>
</html>
