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

<body style="background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );">

    <div class="container-fluid text-dark text-center">
        <br><br>
        <h3 class="container-fluid p-2 text-dark text-center"> <dt style="font-family:georgia,garamond,serif;font-size:32px;">...Fill following form for blood...</dt></h3>
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
                                        <form action="RequestForm1.php?donor_id=<?php echo isset($_GET['donor_id']) ? $_GET['donor_id'] : ''; ?>" method="post" class="php-email-form">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="name" class="col-form-label">Your Full Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="email" class="col-form-label">Your Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="mobile" class="col-form-label">Your Mobile Number</label>
                                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" pattern="[0-9]{10}" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                 <div class="col-md-12 form-group">
                                                    <label for="address" class="col-form-label">Your Address</label>
                                                    <textarea rows="3" class="form-control" id="address" name="address" placeholder="Your Address" required></textarea>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="brf" class="col-form-label">Blood Require For</label>
                                                    <select class="form-control" id="brf" name="relation" onchange="checkOther(this);" required>
                                                        <option value="">Blood Require For</option>
                                                        <option value="Father">Father</option>
                                                        <option value="Mother">Mother</option>
                                                        <option value="Brother">Brother</option>
                                                        <option value="Sister">Sister</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="message" class="col-form-label">Message</label>
                                                <textarea rows="5" class="form-control" id="message" name="message" placeholder="Please enter your message" maxlength="999" style="resize:none"  required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="Send Message" name="submit" class="btn btn-primary">
                                            </div>
                                        </form>
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