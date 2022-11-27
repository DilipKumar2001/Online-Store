<?php
include 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$select_query = "select email from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con)) ;
$num_row_fetched = mysqli_num_rows($select_query_result);
if($num_row_fetched>0)
{
    echo 'already registered';  
}
else{
$insert_query = "INSERT INTO users (name,email,password,contact,city,address)"
        . " values('$name','$email','$password','$contact','$city','$address')";
$insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
echo 'REGISTRATION IS SUCCESSFUL';
$_SESSION['email']=$email;
$users_id=$mysqli_insert_id($con);
$_SESSION['users_id']=$users_id;
if (isset($_SESSION['email'])) 
    { header('location: products.php'); }

}      

