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
     
        <div class="container row row_style">
            <div class="col-xs-5 col-xs-offset-4">
                <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3><b>SIGN UP</b></h3>
                </div>
                    <div class="panel-body">
                        <form method="POST" action="signup_script.php" >
                <div class=" form-group ">
                <input type="text" name="name" placeholder="Enter your name" 
                       class="input-md form-control"><br><br>
                <input type="text" name="email" placeholder="Enter your Email" 
                       class="input-md form-control "  required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
                <input type="text" name="password" placeholder="password" 
                       class="input-md form-control" required="true" pattern=".{6,}"><br><br>
                <input type="text" name="contact" placeholder="Enter your contact no." 
                       class="input-md form-control" required="true"><br><br>
                <input type="text" name="city" placeholder=" Enter your city " 
                       class="input-md form-control" required="true"><br><br>
                <input type="text" name="address" placeholder="Enter your address" 
                       class="input-md form-control" required="true"><br><br>
            <button class="btn  btn-primary">Submit</button>
                </div>
            </form>
                    </div>
                </div>
            </div>
        </div>
     
     <?php
   include 'includes/footer.php';
     ?>
</body>
</html>
