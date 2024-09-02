<!DOCTYPE html>
<html lang="en">
<?php include("DonorLogin\DonorHead.php"); ?>

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
        <h3 class="container-fluid p-2 text-dark text-center"> <dt style="font-family:georgia,garamond,serif;font-size:32px;">...Registration...</dt></h3>
    </div>

    <div class="container-fluid text-dark text-center">
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-2 mt-5 mt-lg-0"></div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="box">
                            <div class="box" style="background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );">
                                <div class="box" style="background: linear-gradient(145deg, #ffffff, #ffffff);">


                                    <form action="DonorForm1.php" method="post" class="php-email-form" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="firstname" class="form-control" id="firstname"
                                                    placeholder="Your First Name" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="text" name="lastname" class="form-control" id="lastname"
                                                    placeholder="Your Last Name" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group mt-3">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3">
                                                <input type="tel" class="form-control" name="mobile" id="mobile"
                                                    placeholder="Your Mobile Number" pattern="[0-9]{10}" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group mt-3">
                                                <input type="number" class="form-control" name="age" id="age"
                                                    placeholder="Your Age" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3">
                                                <select class="form-control" name="gender" id="gender" required>
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 form-group mt-3">
                                                <?php
                                                    include("config.php");
                                                    $result = mysqli_query($conn, "SELECT * FROM bloodgroup");
                                                ?>
                                                <select class="form-control" name="bloodgroup" id="bloodgroup" required>
                                                    <option value="" disabled selected>Select Blood Group</option>
                                                    <?php
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<option value='$row[1]'>$row[1]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group mt-3">
                                                <input type="text" class="form-control" name="address" id="address"
                                                    placeholder="Your Address" required>
                                            </div>

                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="message" rows="5"
                                                    placeholder="Message" required></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group mt-3">
                                                <label for="fill_date">Fill-up Date:</label>
                                                <input type="date" class="form-control" name="date" id="fill_date"
                                                    required>
                                            </div>

                                            <div class="col-md-6 form-group mt-3">
                                                <label for="photo">Upload Photo:</label>
                                                <input type="file" class="form-control" name="photo" id="photo"
                                                    accept="image/*" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group mt-3">
                                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3">
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="container-fluid p-3 text-dark text-center">
                                            <input type="submit" name="submit" value="Send"
                                                class="btn btn-primary btn-lg">
                                        </div>
                                    </form>

                                    <div class="container-fluid p-1 text-dark text-center mt-3">
                                        You have an account ? <a href="DSignin.php">Sign In</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
        </section>
    </div>

</body>

</html>
