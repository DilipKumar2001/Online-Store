<?php

include 'includes/common.php';
if(isset($_GET['id'])&&  is_numeric($_GET['id']))
{
    $products_id = $_GET['id'];
    $users_id=$_SESSION['users_id'];
    $query="insert into users_products(users_id,products_id,status) values('$users_id','$products_id','added to cart')";
    $result=  mysqli_query($con, $query) or die(mysqli_error($con));
    header('location:products.php');
}

