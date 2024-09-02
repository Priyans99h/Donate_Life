<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      
      
  body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	/* background:linear-gradient(454deg, #4f4080, #9553ff); */
	overflow-x: hidden;
}

/* General Website Style rules */

  #neubar {
     background: linear-gradient(-50deg, #800025 20%, rgba(0, 0, 0, 0.1) 60%);
    box-shadow: 4px 6px 12px rgba(0,0,0,0.4);
    border-radius: 6px;
  }
  
  .nav-item .active {
   
    border-radius: 6px;
   
  /*  background: linear-gradient(145deg, #b03a4e,#b03a4e);*/
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.4); 
  }

  #neubar .nav-item {
    margin : auto 4px;
  }
  #neubar a {
  
    padding-left:12px;
    padding-right:12px;
  }
  #neubar .dropdown-menu {
    background : #545454
  }
  a.navbar-brand {
    color: #454545;
    color: rgb(20, 19, 19);
    color: rgb(20, 17, 17);
    color: rgb(12, 12, 12);
    color: rgb(12, 11, 11);
    color: rgb(0, 0, 0);
    color: #ffffff;

  }/* Hero Image ---------------------------------------------------------------------------------------------------------------------------------- */ 


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
  <!-- Nav-bar -->
  <nav class="navbar navbar-expand-sm" id="neubar">
    <div class="container">
      <a class="navbar-brand" href="Index.php"><img src="Image\Logo\Logo.png" height="60" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="Index1.php" style="color: #dddddd;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="AfterAbout.php" style="color: #dddddd;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="DonorList.php" style="color: #dddddd;">Donor List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="AfterContact.php" style="color: #dddddd;">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="Feedback.php" style="color: #dddddd;">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="Index.php" style="color: #dddddd;">Logout</a>
          </li>
        </ul>
    </div>
  </nav>  
  <!-- End of Nav-bar -->
</body>
</html>
