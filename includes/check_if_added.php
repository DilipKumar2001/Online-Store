<?php

function check_if_added_to_cart($products_id)
{
  $con = mysqli_connect("localhost", "root", "","temp_db") or
     die(mysqli_error($con));
   
$users_id = $_SESSION['users_id'] ;


$select_query = "select*from users_products where products_id='$products_id' and users_id='$users_id' "
        . " and status='added to cart'";

$result=  mysqli_query($con, $select_query) or die(mysqli_error($con));


if(mysqli_num_rows($result)>=1)
{
    return 1;  
}
 else 
     {
    
       
    return 0;
     }
    
}

