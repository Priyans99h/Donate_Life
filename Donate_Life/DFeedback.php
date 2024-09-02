<!DOCTYPE html>
<html lang="en">
<?php
	include("DonorLogin\DonorHead.php");
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
	include("DonorLogin\DonorHeader.php");
?>

<div class="container-fluid text-dark text-center">
  <br><br>
  <h1 class="mb-3" style= "font-family:georgia,garamond,serif;font-size:32px;font-style:italic;">Feedback</h1>
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
        <form action="DFeedback1.php" method="post" class="php-email-form">
          <br><div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
          </div>
          <div class="row">
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
          </div>
          
                  <div class="container-fluid p-3 text-dark text-center">
                    <input type="submit" name="submit" value="Send" class="btn btn-primary btn-lg">
                  </div>
        </form>
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
	include("DonorLogin\DonorFooter.php");
?>


</body>
</html>