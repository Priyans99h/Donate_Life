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

        .donor-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .donor-card:hover {
            transform: scale(1.05);
        }

        .donor-photo {
            width: 100px;
            height: 100px;
            border-radius: 70%;
            object-fit: cover;
            margin-right: 15px;
        }

        .donor-details {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .donor-details div {
            flex-grow: 1;
        }

        .donor-details h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .donor-details p {
            margin: 0;
            color: #777;
        }

        .request-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php include("AfterLogin\AfterHeader.php"); ?>

    <div class="container-fluid p-5 text-dark text-center">

        <h1 class="mb-3" style="font-family:georgia,garamond,serif;font-size:32px;font-style:italic;">Donor List</h1>

        <hr style="border: 10px solid green; border-radius: 5px;">
        <br>
        <?php
        include "config.php"; // Include your database connection configuration

        // Fetch data from the "donor" table
        $result = mysqli_query($conn, "SELECT id, firstname, lastname, email, mobile, age, gender, bloodgroup, address, message, date, photo FROM donor WHERE status = '1'");

        // Check if there are any donors
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='row'>";
            echo "<br>";
            while ($row = mysqli_fetch_assoc($result)) {
                // Retrieve data for each donor
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $age = $row['age'];
                $gender = $row['gender'];
                $bloodgroup = $row['bloodgroup'];
                $address = $row['address'];
                $message = $row['message'];
                $date = $row['date'];
                $photo = $row['photo'];

                // Display the Donor information
                echo '<div class="col-md-4">';
                echo '<div class="donor-card">';
                echo '<div class="donor-details">';
                echo '<img class="donor-photo" src="' . $photo . '">';
                echo '<div>';
                echo '<h2>' . $firstname . ' ' . $lastname . '</h2>';
                echo '<p>Gender: ' . $gender . '</p>';
                echo '<p>Age: ' . $age . '</p>';
                echo '<p>Mobile: ' . $mobile . '</p>';
                echo '<p>Email: ' . $email . '</p>';
                echo '<p>Blood Group: ' . $bloodgroup . '</p>';
                echo '<p>Address: ' . $address . '</p>';
                echo '<p>Message: ' . $message . '</p>';
                echo '<p>Post Date : ' . $date . '</p>';
                echo '</div>';
                echo '</div>';
                echo '<a class="request-button" style="text-decoration: none;" href="RequestForm.php?donor_id=' . $id . '">Request Blood Donation</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo 'No products available.';
            
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
    <?php include("AfterLogin\AfterFooter.php"); ?>
</body>

</html>


