<?php

session_start();

$adminusername=$_POST['admin_username'];
$adminpassword=$_POST['admin_password'];

if($adminusername=='priyansh' && $adminpassword==123)
{
    header("location:Index1.php");
}
else
{
    echo"<h1>Wrong Admin Username or Password";
}

?>