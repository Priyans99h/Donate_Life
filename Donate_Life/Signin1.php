<?php

    session_start();

    include("config.php");

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from signin where username='$username'";

    $res=mysqli_query($conn,$sql);

    $count=mysqli_num_rows($res);

    if($count>0)
    {
        $arr=mysqli_fetch_assoc($res);

        if($username==$arr['username'] && $password==$arr['password'])
        {
            $_SESSION['username']=$username;
            header("location:Index1.php");
        }
        else
        {
            echo "<h1>Wrong username or password</h1>";
        }
    }
    else
    {
        echo"<h1>No such user exists!</h1>";
    }

?>