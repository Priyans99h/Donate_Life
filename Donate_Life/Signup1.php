<?php
session_start();

include("config.php");

if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // SQL query to insert data
    $sql = "INSERT INTO signup (name, username, email, mobile, password) VALUES ('$name', '$username', '$email', '$mobile', '$password')";
    $sql .= ";"; // Add a semicolon to separate queries
    $sql .= "INSERT INTO signin (username, password) VALUES ('$username', '$password')";

    // Execute the query
    if (mysqli_multi_query($conn, $sql)) {
        echo "<h1>Registration successful!</h1>";
        // Redirect to login page or any other page as needed
        header("location: Signin.php");
    } else {
        echo "<h1>Error: " . mysqli_error($conn) . "</h1>";
    }

    // Close the connection
    mysqli_close($conn);
} else {
    // Handle the case when the form is not submitted
    echo "<h1>Form not submitted</h1>";
}
?>
