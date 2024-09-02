<?php
session_start();
include("config.php"); // Make sure to include your database configuration file

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $donor_id = isset($_GET['donor_id']) ? $_GET['donor_id'] : "";
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
    $address = isset($_POST['address']) ? $_POST['address'] : "";
    $relation = isset($_POST['relation']) ? $_POST['relation'] : "";
    // $other_brf = isset($_POST['other_brf']) ? $_POST['other_brf'] : ""; // Handle the case when "Others" is selected
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    // echo '<pre>';
    // print_r($donor_id);
    // exit();
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO requester (name, email, mobile, address, relation, message,donor_id) VALUES (?, ?, ?, ?, ?, ?, ?)"; 

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $mobile, $address, $relation, $message, $donor_id);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to a success page
            header("location: Index1.php");
            exit();
        } else {
            // Display error message if insertion fails
            echo "Error in submitting form: " . mysqli_error($conn);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>