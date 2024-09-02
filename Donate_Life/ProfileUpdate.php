<?php
include("config.php");
session_start();

if(isset($_POST["submit"])) {
    // Assuming you have a donor ID available in the session
    if(isset($_SESSION['id'])) {
        $id = $_SESSION['id'];

        // Fetch donor information from the database
        $query = "SELECT * FROM donor WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Process form data and update the donor record
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $bloodgroup = $_POST['bloodgroup'];
            $address = $_POST['address'];
            $message = $_POST['message'];
            $date = $_POST['date'];
            
            // Upload profile photo if provided
            if(isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
                $photo = "uploads/" . basename($_FILES["photo"]["name"]);
                move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);
            } else {
                $photo = $row['photo'];
            }

            // Update donor record in the database
            $update_query = "UPDATE donor SET firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile', age='$age', gender='$gender', bloodgroup='$bloodgroup', address='$address', message='$message', date='$date', photo='$photo' WHERE id=$id";
            
            if(mysqli_query($conn, $update_query)) {
                echo "<script>alert('Profile updated successfully!');</script>";
                echo "<script>window.location='Profile.php';</script>";
            } else {
                echo "Error updating profile: " . mysqli_error($conn);
            }
        } else {
            echo "No donor found with the provided ID.";
        }
    } else {
        echo "Donor ID not found in the session.";
    }
}
?>
