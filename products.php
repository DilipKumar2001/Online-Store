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
     include 'includes/check_if_added.php';
     ?>
        <div class="container">
            <div class="jumbotron">
                <h2><b>Welcome to our Lifestyle Store</b></h2>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around,
                We have all in one place</p>
                
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail ">
                        <img src="img2/5.jpg">
                        <div class="caption">
                            <h3>CANNON EOS</h3> <P>PRICE RS. 36000.00</P>
                           <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 { 
                                 if (check_if_added_to_cart(1))
                                 {
                                 
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                        </div>
                    </div>        
                    </div> 
                 
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                      <img src="img2/2.jpg">
                        <div class="caption">
                            <h3>SONY DSLR</h3><P>PRICE RS. 40000.00</P>
                          <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 { 
                                 if (check_if_added_to_cart(2))
                                 {
                                  
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                      <img src="img2/3.jpg">
                        <div class="caption">
                            <h3>SONY DSLR</h3><P>PRICE RS. 50000.00</P>
                           <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {
                                 if (check_if_added_to_cart(3))
                                 {
                                 
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                        </div>  
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                      <img src="img2/4.jpg">
                        <div class="caption">
                            <h3>OLYMPUS DSLR</h3><P>PRICE RS. 80000.00</P>
                          <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 { 
                                 if (check_if_added_to_cart(4))
                                 {
                                  
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img2/9.jpg">
                        <h3>TITAN MODEL #301  </h3><P>PRICE RS. 13000.00</P>
                         <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 { 
                                 if (check_if_added_to_cart(5))
                                 {
                                  
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img2/10.jpg">
                        <h3>TITAN MODEL #201  </h3><P>PRICE RS. 3000.00</P>
                        <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(6))
                                 {
                                  
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img2/11.jpg">
                        <h3>HMT MILAN   </h3><P>PRICE RS. 8000.00</P>
                         <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(7))
                                 {
                                   
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img2/12.jpg">
                        <h3>FABER LUBA #111  </h3><P>PRICE RS. 18000.00</P>
                        <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(8))
                                 {
                                 
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 c0l-sm-6">
                    <div class="thumbnail">
                        <img src="img2/8.jpg">
                        <h3>H&W</h3><p>PRICE RS. 800.00</p>
                         <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(9))
                                 {
                                 
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>  
                </div>
                <div class="col-md-3 c0l-sm-6">
                    <div class="thumbnail">
                        <img src="IMG2/6.JPG">
                        <h3>LUIS PHIL</h3><p>PRICE RS. 1000.00</p>
                         <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(10))
                                 {
                                  
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>  
                </div>
                <div class="col-md-3 c0l-sm-6">
                    <div class="thumbnail">
                        <img src="IMG2/13.JPG">
                        <h3>JOHN ZOK</h3><p>PRICE RS. 1500.00</p>
                         <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(11))
                                 {
                                
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>  
                </div>
                <div class="col-md-3 c0l-sm-6">
                    <div class="thumbnail">
                        <img src="IMG2/14.JPG">
                        <h3>JHALSANI</h3><p>PRICE RS. 1300.00</p>
                         <?php
                           if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                             <?php } 
                             else
                                 {  
                                 if (check_if_added_to_cart(12))
                                 {
                                  
                                   
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                   else 
                                   { ?> 
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                                   } 
                                   } 
                                   ?>
                    </div>  
                </div>
            </div>
            
        </div>
        
       <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>
