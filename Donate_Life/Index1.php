<!DOCTYPE html>
<html lang="en">
<?php include("AfterLogin\AfterHead.php"); ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            background-color: rgba(0, 0, 0, 0);
        }

        .bg-image {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: auto;
            height: auto;
            width: 100%;
            height: 50vh;
            display: flex;
        }

        .rounded {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .container-fluid {
            background-color: rgba(0, 0, 0, 0);
        }

        .text-white {
            color: #ffffff;
        }

        #about {
            background: linear-gradient(145deg, ,#f7d4d6 , #f9f8f5);
        }

        #about1 {
            background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );
        }

        ul {
            list-style-type: none;
        }

        /* Additional styles for the Blood Bank Management System */
        .section-title {
            font-family: georgia, garamond, serif;
            font-size: 40px;
            text-align: center;
        }

        .section-content {
            font-family: Times New Roman, garamond, serif;
            font-size: 18px;
            text-align: justify;
        }

        .fa-tint {
            color: #007bff;
        }
    </style>
</head>

<body>
    <?php include("AfterLogin\AfterHeader.php"); ?>

    <!-- Hero Image -->
    <div class="box" style="background-image: url('Image/Index/Nav_image.png'); ">
        <div class="container-fluid p-5 text-center bg-image rounded-6">
            <div class="rounded">
                <div class="d-flex justify-content-center align-items-center h-100vh">
                    <div class="text-white">
                        <h1 class="mb-3" style="font-family:georgia,garamond,serif;font-size:32px;font-style:italic;">
                            Donate Life</h1>
                        <h4 class="mb-3" style="font-family:courier;">...Be Someone’s Lifeline...</h4><br>
                        <h5 class="mb-3" style="font-family:courier;">Join us in our mission to save lives through blood
                            donation. Your contribution can make a significant impact on the health and well-being of
                            others.</h5> 
                            <br> 
                            <a class="be-donor-button" style="background-color: #800020;
    color: #ffffff; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; font-size: 18px; margin-bottom: 10px; text-decoration: none;" href="DSignin.php">Be a Donor</a>
 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="w3ls-bnrbtm py-2" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row pb-5">
                <div class="col-lg-6">
                    <div class="box" id="about1">
                        <img class="img-fluid" src="Image\Index\2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5 abou-right-w3layuts mt-lg-0 mt-5">
                    <br><br>
                    <h3 class="mb-4 section-title">Welcome to the World of Saving Lives...</h3>
                    <p class="section-content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discover the power of blood donation
                        at Donate Life. We believe that donating blood is not just an act of kindness but a
                        life-saving gesture. Join us in our commitment to providing a stable and safe blood supply for
                        those in need.</p>
                </div>
            </div>
            <hr>

            <div class="row flex-row-reverse">
                <div class="col-lg-6 text-center"><br><br><br><br><br><br>
                    <div class="box" id="about1">
                        <img class="img-fluid" src="Image\Index\3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 abou-right-w3layuts mt-5">
                    <h3 class="mb-4 section-title">Why Donate Blood?</h3>
                    <ul>
                        <li>
                            <h3 class="fas fa-tint" style="color: #800020;"> Save Lives</h3>
                            <br>
                            <p class="section-content">Donating blood can help save the lives of individuals
                                undergoing medical treatments, surgeries, and emergencies.</p>
                        </li>
                        <li>
                            <h3 class="fas fa-tint" style="color: #800020;"> Community Impact</h3>
                            <p class="section-content">Your contribution has a direct and positive impact on your
                                community, ensuring a steady supply of blood for those in need.</p>
                        </li>
                        <li>
                            <h3 class="fas fa-tint" style="color: #800020;"> Health Benefits</h3>
                            <p class="section-content">Regular blood donation has potential health benefits for
                                donors, such as reducing the risk of certain diseases.</p>
                        </li>
                        <li>
                            <h3 class="fas fa-tint" style="color: #800020;"> Easy and Safe</h3>
                            <p class="section-content">The blood donation process is simple, safe, and conducted by
                                trained professionals in a sterile environment.</p>
                        </li>
                        <li>
                            <h3 class="fas fa-tint" style="color: #800020;"> Join the Cause</h3>
                            <p class="section-content">Be a part of the Donate Life community, making a difference
                                through the simple act of blood donation.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
    <!-- Services Section -->
            <div class="row pb-5">
                <div class="col-lg-12 text-center">
                    <h3 class="mb-4 section-title">Our Services</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="box" id="about">
                        <i class="fas fa-user-md fa-4x mb-3"></i>
                        <h4 class="mb-3">Blood Donation</h4>
                        <p class="section-content">Contribute to our blood donation drives and help save lives. Your
                            donation can make a significant impact on someone's health.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="box" id="about1">
                        <i class="fas fa-notes-medical fa-4x mb-3"></i>
                        <h4 class="mb-3">Health Checkups</h4>
                        <p class="section-content">Participate in our health checkup programs as a donor. We prioritize
                            your well-being and offer additional health-related services.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="box" id="about">
                        <i class="fas fa-hospital-alt fa-4x mb-3"></i>
                        <h4 class="mb-3">Emergency Support</h4>
                        <p class="section-content">Our blood bank provides emergency support, ensuring a rapid response to
                            critical situations where blood is urgently needed.</p>
                    </div>
                </div>
            </div>
 <hr>

  <!-- Donor Information Section -->

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="mb-4 section-title">Donor Information</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <br><br>
                    <div class="box" id="about1">
                        <img class="img-fluid" src="Image\Index\4.jpg" alt="">
                    </div>
                </div>
            
                <div class="col-lg-6">
                        <br>
                <br>
                <br>
                
                    <h4 class="mb-3 section-title">Become a Blood Donor</h4>
                    <p class="section-content">Join our community of blood donors and make a difference. Your
                        contribution can save lives, and the process is simple and safe.</p>
                    <ul>
                        <li>
                            <h4 class="fas fa-user-plus" style="color: #800020;"> Registration</h4>
                            <p class="section-content">Register as a blood donor with Donate Life. Your information will
                                be securely stored, and you'll receive updates on upcoming donation events.</p>
                        </li>
                        <li>
                            <h4 class="fas fa-hand-holding-medical" style="color: #800020;"> Donation Process</h4>
                            <p class="section-content">Participate in blood donation drives organized by Donate Life.
                                Our trained professionals will guide you through the donation process.</p>
                        </li>
                        <li>
                            <h4 class="fas fa-calendar-check" style="color: #800020;"> Schedule Appointments</h4>
                            <p class="section-content">Schedule convenient donation appointments through our online
                                portal. Your commitment ensures a stable blood supply.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>


        </div>
    </section>

    <?php include("AfterLogin\AfterFooter.php"); ?>

</body>

</html>
