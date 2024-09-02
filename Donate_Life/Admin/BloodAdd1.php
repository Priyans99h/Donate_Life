<?php

include("config.php");

	if(isset($_POST["submit"]))
	{
		
        $id=$_POST['id'];
        $bloodgroup=$_POST['bloodgroup'];
        $date=$_POST['date'];
        mysqli_query($conn,"insert into bloodgroup values('$id','$bloodgroup','$date')");
		
		echo "<script>window.location='BloodView.php';</script>";
	}
	else
		echo "<script>window.location='Index1.php';</script>";

?>