<?php
$con = mysqli_connect("localhost", "root", "","temp_db") or
     die(mysqli_error($con));
if (!isset($_SESSION))
{
    session_start();
}
