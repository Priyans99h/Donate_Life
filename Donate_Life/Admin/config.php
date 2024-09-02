
<?php

    $servername="localhost";
    $username="root";
    $password="";
    $db="donate_life";

    $conn=mysqli_connect($servername,$username,$password,$db);

    if(!$conn)
    {
        die("connection000 Failed".mysqli_connect_errno());
    }

?>

