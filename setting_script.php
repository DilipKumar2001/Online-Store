<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
    {
    header('location:index.php');
     }
    $email=$_SESSION['email'] ;
    $old_pass= mysqli_real_escape_string($con,$_POST['old password']);
    $new_pass=  mysqli_real_escape_string($con,$_POST['new password']);
    $rep_pass= mysqli_real_escape_string($con,$_POST['re-type password']);
    $query="select email,password from users where email= '$email'";
    $result=  mysqli_query($con, $query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($result);
    $orig_pass=$row['password'];
    if($new_pass!=rep_pass)
    {
        header('location:setting.php?error=the two password do not match ');
    }    
     else
     {
         if( $old_pass==$orig_pass)
         {
             $query="UPDATE users SET password='$new_pass' where email ='$email'";
             $result=  mysqli_query($con, $query) or die(mysqli_error($con));
             header('location:setting.php?error=password updated successfully');
         }
 else {
             header('location:setting.php?error=wrong old password.');
       }
     }