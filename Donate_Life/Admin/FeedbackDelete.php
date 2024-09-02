<?php 

		include("AdminHeader.php");
		include("config.php");
		mysqli_query($conn,"delete from feedback where id=".$_REQUEST["id"]);
	
		echo "<script>window.location='FeedBackView.php';</script>";
?>	

<?php

		include("AdminFooter.php");
		
?>
