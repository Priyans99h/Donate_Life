<?php 
		include("AdminHeader.php");
		include("config.php");
		mysqli_query($conn,"delete from bloodgroup where id=".$_REQUEST["id"]);
	
		echo "<script>window.location='BloodView.php';</script>";
?>	