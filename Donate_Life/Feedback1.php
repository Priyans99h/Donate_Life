<?php
session_start();
include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO feedback (name, email, subject, message) VALUES (?, ?, ?, ?)";

// Create a prepared statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        header("location: Index1.php");
    } else {
        echo "Error in submitting form: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error in preparing the statement: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
