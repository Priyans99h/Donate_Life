<?php
session_start();
include("config.php");

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
$username = $_POST['username'];
$password = $_POST['password'];

// File upload handling
$target_dir = "uploads/";
$photo = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($photo, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($photo)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photo)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Prepare the SQL statement for inserting donor data
$sql = "INSERT INTO donor (firstname, lastname, email, mobile, age, gender, bloodgroup, address, message, date, photo, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $firstname, $lastname, $email, $mobile, $age, $gender, $bloodgroup, $address, $message, $date, $photo, $username, $password);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Set session variable upon successful registration
        $_SESSION['id'] = mysqli_insert_id($conn); // Retrieve the ID of the last inserted row
        header("location: DIndex.php");
        echo "Donor data inserted successfully.";
    } else {
        echo "Error in inserting donor data: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error in preparing the statement: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
