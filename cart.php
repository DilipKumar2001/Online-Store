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
        <div class="container">
            <div class="row row_style">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $users_id= $_SESSION['users_id'];
                       
                        
                        $query="select products.price as price, products.id , products.item_name "
                                . " as name from users_products JOIN products ON users_products"
                                . ".products_id=products.id where users_products.users_id="
                                . "'$users_id' and status = 'added to cart'";
                       
                      
                        
                        $result= mysqli_query($con, $query) or die(mysqli_error($con));
                        
                        
                        if(mysqli_num_rows($result)>=1)
                        {
                         ?>
                         <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>price</th>
                                <th> </th>
                            </tr>
                                
                        </thead>
                        <tbody>
                            <?php $x=0;
                             while ($row =mysqli_fetch_array($result))
                             {
                             $x=$x+1;
                                 $sum+=$row["price"];
                                 $id="";
                                 $id =$row["id"].",";
                                 echo "<tr> <td>"."#".$x."</td>"
                                         . "<td>" . $row["name"] . "</td>"
                                         . "<td>RS ".$row["price"]."</td>"
                                         . "<td><a href='cart-remove.php?id={$row['id']}'"
                                         . "class='remove_item_link'>X</a></td>"
                                       . "</tr>";
                             }
                             $id = rtrim($id,",");
                             echo "<tr><td></td>"
                             . "<td>Total</td>"
                                     . "<td>RS ". $sum . "</td>"
                                     . "<td><a href='success.php? products_id=".$id.""
                                     . "'class='btn btn-primary'>confirm order</a></td>"
                                     . "</tr>";
                              
                             
                            ?>
                        </tbody>
                        <?php
                        }
 else {
                            echo "<center><h2><br>add items to the cart first !</h2>"
     . "<p><a href='products.php'>click here</a> to explore products <p></center>";
                 
 }
                        ?><?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
                        
       
        <?php
   include 'includes/footer.php';
   ?>
    </body>    
</html>

