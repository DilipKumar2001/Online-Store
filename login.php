<?php
require 'includes/common.php';
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
        <div class="container">
            <div class="row row_style">
              
                <div class="col-xs-5 col-xs-offset-3 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><b>LOG IN</b></h4>
                        </div>
                        <div class="panel-body">
                            <text-warning><p>Log in to make purchase</p></text-warning>
                            <?php
                            
                            ?>
                            <form method="POST" action="login_submit.php" >
                                <div class="form-group">
                                    <input type="email" placeholder="Enter e-mail id" name="email" class="input-md form-control">
                                <br><br>
                                
                                <input type="password" placeholder="Enter password" name="password" class=" input-md form-control "
                                       >
                               <br><br> 
                                <button type="Log in" class="btn  btn-primary">Log in</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                           Don't have an account?<a href="signup.php"> Register</a> 
                        </div>
                    </div>
                    
                </div>
               
            </div>
            
        </div>
        <?php 
      include 'includes/footer.php';
        ?> 
    </body>
</html>
