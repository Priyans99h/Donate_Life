<!DOCTYPE html>
<html lang="en">
<?php include("AfterLogin\AfterHead.php"); ?>

<head>
    <style>
        .box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            background-color: rgba(0, 0, 0, 0);
        }
    </style>
</head>

<body style="background: linear-gradient(145deg, #f7d4d6 , #f9f8f5);">

<div class="container-fluid text-dark text-center">
  <br><br>
      <h3 class="container-fluid p-2  text-dark text-center"> <dt style= "font-family:georgia,garamond,serif;font-size:32px;">...Donor Log In...</dt></h3>
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
                            

                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="php-email-form">
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
                                                          
                                                             <input type="submit" name="submit" value="Send"
                                                class="btn btn-primary btn-lg">
                                                        </div>
                                        </form>

                                           <div class="container-fluid p-1 text-dark text-center mt-3">
                                                Don't have an account? <a href="DonorForm.php">Signup now</a>
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
session_start();

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM donor WHERE username = '$username'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count > 0) {
        $arr = mysqli_fetch_assoc($res);

        if ($username == $arr['username'] && $password == $arr['password']) {
            $_SESSION['id'] = $arr['id'];
            header("location:DIndex.php");
            exit();
        } else {
            echo "<h1>Wrong username or password</h1>";
        }
    } else {
        echo "<h1>No such user exists!</h1>";
    }
}
?>
</body>
</html>
