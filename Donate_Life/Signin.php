<!DOCTYPE html>
<html lang="en">
<?php
	include("BeforeLogin\BeforeHead.php");
?>

<head>
  <style>
  .box {
    /* Background color for the boxes */
    padding: 20px; /* Adjust the padding as needed */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6); /* Box shadow for a subtle effect */
    background-color: rgba(0, 0, 0, 0);
    
  }
</style>
</head>

<body>
  <?php
	include("BeforeLogin\BeforeHeader.php");
?>

<div class="container-fluid text-dark text-center">
  <br><br>
      <h3 class="container-fluid p-2  text-dark text-center"> <dt style= "font-family:georgia,garamond,serif;font-size:32px;">...Log In...</dt></h3>
</div>

<div class="container-fluid text-dark text-center">
<section id="contact">
    <div class="container" data-aos="fade-up">
        <div class="row mt-5">
                <div class="col-lg-2 mt-5 mt-lg-0"> </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                                <div class="box">
                                <div class="box" style="background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );">
                                    <div class="box" style="background: linear-gradient(145deg, #ffffff, #ffffff);">
                            

                                        <form action="Signin1.php" method="post" class="php-email-form">
                                         <div class="row">
                                                            <div class="form-group mt-3">
                                                            <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" required>
                                                            </div>

                                                            <div class="form-group mt-3">
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                                                            </div>
                                         </div>
<br>
                                                        <div class="container-fluid p-1 text-dark text-center">
                                                            <input type="submit" name="submit" value="Log In" class="btn btn-primary btn-lg">
                                                        </div>
                                        </form>

                                           <div class="container-fluid p-1 text-dark text-center mt-3">
                                                Don't have an account? <a href="Signup.php">Signup now</a>
                                            </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                </div>
        </div>
    </div><br><br>
</section>
</div>


<?php
	include("BeforeLogin\BeforeFooter.php");
?>

</body>
</html>