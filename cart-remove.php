<?php
include 'includes/common.php';
if(isset($_GET['id'])&&  is_numeric($_GET['id']))
{
    $products_id=$_GET['id'];
    $users_id=$_SESSION['users_id'];
    $query="delete from users_products where products_id = '$products_id' and users_id="
            . "'$users_id'";
    $result=  mysqli_query($con, $query) or die(mysqli_error($con));
    header('location:cart.php');
}


