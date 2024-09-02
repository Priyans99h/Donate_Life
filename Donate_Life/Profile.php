<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); // Start the session

// Include the necessary files
include("DonorLogin\DonorHead.php");
include("config.php"); // Include your database connection file
?>

<head>
    <style>
        .box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );;
        }
    </style>
</head>

<body>
    <?php include("DonorLogin\DonorHeader.php"); ?>
    <div class="container-fluid text-dark text-center">
        <br><br>
        <h3 class="container-fluid p-2 text-dark text-center"> <dt style="font-family:georgia,garamond,serif;font-size:32px;">Donor Profile</dt></h3>
    </div>

    <div class="container-fluid text-dark text-center">
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-2 mt-5 mt-lg-0"></div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="box">
                                <div class="box" style="background: linear-gradient(145deg, #ffffff, #ffffff);">
                                    <div class="box" style="background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );">

                                    <form action="ProfileUpdate.php" method="post" class="php-email-form" enctype="multipart/form-data">
                                        <?php
                                        // Assuming you have a donor ID available in the session
                                        if(isset($_SESSION['id'])) {
                                            $id = $_SESSION['id'];

                                            // Fetch donor information from the database
                                            $query = "SELECT * FROM donor WHERE id = $id";
                                            $result = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                        ?>

                                        
                                            <div class="container mt-3">        
                                            <img src="<?php echo $row['photo']; ?>" class="rounded-circle" alt="Cinque Terre" width="250" height="250" style="border: 7px solid black;">  
                                            <br><br>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="firstname">First Name :</label>
                                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your First Name" value="<?php echo $row['firstname']; ?>" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                    <label for="lastname">Last Name :</label>
                                                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your Last Name" value="<?php echo $row['lastname']; ?>" required>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="email">Email :</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?php echo $row['email']; ?>" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="mobile">Mobile Number </label>
                                                    <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" pattern="[0-9]{10}" value="<?php echo $row['mobile']; ?>" required>
                                                </div>
                                            </div>


                                           <div class="row">
                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="age">Age :</label>
                                                    <input type="number" class="form-control" name="age" id="age" placeholder="Your Age" value="<?php echo $row['age']; ?>" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="gender">Gender :</label>
                                                    <select class="form-control" name="gender" id="gender" required>
                                                        <option value="" disabled selected>Select Gender</option>
                                                        <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                                                        <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                                                        <option value="Others" <?php if ($row['gender'] == 'Others') echo 'selected'; ?>>Others</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <?php
                                            $blood = mysqli_query($conn, "SELECT * FROM bloodgroup");
                                            $blood_options = '';
                                            while ($a1 = mysqli_fetch_array($blood)) {
                                                $selected = ($row['bloodgroup'] == $a1[1]) ? 'selected' : '';
                                                $blood_options .= "<option value='$a1[1]' $selected>$a1[1]</option>";
                                            }
                                            ?>
                                            <div class="row">
                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="bloodgroup">Blood Group :</label>
                                                    <select class="form-control" name="bloodgroup" id="bloodgroup" required>
                                                        <option value="" disabled selected>Select Blood Group</option>
                                                        <?php echo $blood_options; ?>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="form-group mt-3">
                                                    <label for="address">Address :</label>
                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" value="<?php echo $row['address']; ?>" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="message">Message :</label>
                                                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required><?php echo $row['message']; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="fill_date">Posting Date :</label>
                                                    <input type="date" class="form-control" name="date" id="fill_date" required value="<?php echo $row['date']; ?>">
                                                </div>

                                                <div class="col-md-6 form-group mt-3">
                                                    <label for="photo">Profile Photo :</label>
                                                    <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
                                                </div>
                                            </div>


                                            <div class="container-fluid p-3 text-dark text-center">
                                                <input type="submit" name="submit" value="Update Profile" class="btn btn-primary btn-lg">
                                            </div>
                                        <?php
                                            } else {
                                                echo "No donor found with the provided ID.";
                                            }
                                        } else {
                                            echo "Donor ID not found in the session.";
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
        </section>
    </div>
    <?php include("DonorLogin\DonorFooter.php"); ?>
</body>

</html>

