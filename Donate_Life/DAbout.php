<!DOCTYPE html>
<html lang="en">
<?php include("DonorLogin\DonorHead.php"); ?>

<head>
    <style>
        .box {
            /* Background color for the boxes */
            background: linear-gradient(145deg, #e0e9f0 ,#f7d4d6 );
            padding: 20px; /* Adjust the padding as needed */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6); /* Box shadow for a subtle effect */
            background-color: rgba(0, 0, 0, 0);
        }
    </style>
</head>

<body>

    <?php include("DonorLogin\DonorHeader.php"); ?>

    <!-- Hero Image -->
    <div class="box">
        <div class="p-5 text-center bg-image rounded-6" style="background-image: url('Image/About/1.jpg'); background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: auto;
            height: auto;">
            <br> <br>
            <br> <br>
            <br> <br>
            <br> <br>
            <div class="rounded" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100vh">
                    <div class="text-white">
                        <h1 class="mb-3" style="font-family:georgia,garamond,serif;font-size:32px;font-style:italic;">Donate Life's Story</h1>
                        <h4 class="mb-3" style="font-family:courier;"><p>From a Vision to Save Lives,<br> Donate Life Blood Bank is dedicated to serving communities...</p></h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 text-dark text-center">
        <div class="box">
            <h1>Our Story</h1>
            <hr style="border: 10px solid red; border-radius: 5px;">
            <p>Established with a noble vision in 2023, Donate Life Blood Bank strives to bridge the gap between blood donors and recipients. Our journey is marked by a commitment to saving lives and ensuring a stable and accessible blood supply for those in need.</p>
            <p>With cutting-edge facilities and a passionate team, we have become a trusted name in the healthcare sector. Every donation contributes to our mission of making a positive impact on the well-being of individuals and communities.</p>
        </div>
    </div>

    <div class="container mt-3 text-dark">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="box">
                    <h2>Our Vision</h2>
                    <hr style="border: 10px solid red; border-radius: 5px;">
                    <p>To create a world where no life is lost due to the unavailability of blood. We envision a society united in the cause of saving lives through voluntary blood donation and compassionate service.</p>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="box">
                    <h2>Our Mission</h2>
                    <hr style="border: 10px solid red; border-radius: 5px;">
                    <p>Our mission is to ensure a safe and sustainable blood supply for hospitals and clinics. We are dedicated to fostering a culture of voluntary blood donation, raising awareness about the importance of donating blood, and providing support to patients in need.</p>
                </div>
            </div>
        </div>
    </div>
    <br>



<!-- Services Section -->
<div class="container mt-4 text-dark">
    <div class="box d-flex align-items-center justify-content-center">
        <div>
            <h1 class="text-center">Our Services</h1>
            <hr style="border: 10px solid red; border-radius: 5px;">
            <p class="text-center">Donate Life Blood Bank provides a range of services to meet the diverse needs of the community. Our services include:</p>
            <ul>
                <li>Blood Donation and Collection</li>
                <li>Blood Testing and Typing</li>
                <li>Emergency Blood Supply</li>
                <li>Donor Education and Awareness Programs</li>
                <li>Community Outreach Initiatives</li>
            </ul>
        </div>
    </div>
    <br>
</div>
    <?php include("DonorLogin\DonorFooter.php"); ?>

</body>

</html>
