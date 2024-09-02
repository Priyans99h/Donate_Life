<!DOCTYPE html>
<html lang="en">
<?php
	include("AdminHead.php");
?>
<head>
    <title>

    </title>
<!-------Css ------------------------------------------->
<link rel="stylesheet" type="text/css" href="Css/Login.css"/>
</head>


<body>

<div class='container'>
  <div class='container__svgs'>
   <a href="#"><img src="Image\Logo\Logo.png" width="400" height="auto"></a>
  </div>
  <div class='container__content'>
    <form action="AdminLogin.php" method="post" class='container__form'>
      <input type='text' name='admin_username' placeholder='Username' class='container__inputField'>
      <input type='password' name='admin_password' placeholder='Password' class='container__inputField'>
      <input type='submit' name="submit" value='Login' class='container__sumbitButton'>
    </form>
  </div>
</div>


</body>
</html>

















