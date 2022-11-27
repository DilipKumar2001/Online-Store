<?php
include 'includes/common.php';
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
        <div >
        <div class="container  jumbotron row row_style">
            <h2>Change password</h2><br><br>
            <div class="col-sm-6 col-sm-offset-3">
            <form method="POST" action="setting_script.php">
                <div class="form-group ">
                    <input type="password" class="form-control form-group-sm" placeholder="Enter old password" name="old password">
                </div><br> 
                <div class="form-group ">
                    <input type="password" class="form-control form-group-sm" placeholder="Enter new password" name="new password">
                </div><br>
                <div class="form-group ">
                    <input type="password" class="form-control form-group-sm" placeholder="Re-type new password" name="re-type password">
                </div><br>
                <button class="btn  btn-primary">Change</button>
            </form>
            </div>
        </div>
        </div>
    </center>
    <?php
    include 'includes/footer.php';
    ?>
    </body>
</html>
