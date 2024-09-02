<?php 

		include("AdminHeader.php");
		include("config.php");
		mysqli_query($conn,"delete from requester where id=".$_REQUEST["id"]);
	
		echo "<script>window.location='RequestView.php';</script>";
?>	

<?php

		include("AdminFooter.php");
		
?>
