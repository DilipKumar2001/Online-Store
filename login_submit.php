<?php
require 'includes/common.php';

$password = $_POST['password'];
if(strlen($password)<6)
{
   echo "password should have at-least 6 character"; 
}

$email = mysqli_real_escape_string($con,$_POST['email']); 
$password = mysqli_real_escape_string($con,$_POST['password']);
$pass=  md5($password);
$select_query = "select id,email from users where email='$email' and password='$password'";
$select_query_result = mysqli_query($con, $select_query)
 or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);

if($total_rows_fetched == 0)
{  
    
    header('location:index.php');  
}
else {
   $row=  mysqli_fetch_array($select_query_result);
 $_SESSION['email'] = $row['email'];
$_SESSION['users_id'] = $row['id'];
echo $_SESSION['email'];
echo $_SESSION['users_id'];
if(isset($_SESSION['email']))
{
 header('location:products.php');
}
  
}
  
