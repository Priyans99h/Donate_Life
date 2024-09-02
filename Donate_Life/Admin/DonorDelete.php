<?php 
		include("config.php");
		mysqli_query($conn,"delete from donor where id=".$_REQUEST["id"]);
		echo "<script>window.location='DonorView.php';</script>";
?>	


