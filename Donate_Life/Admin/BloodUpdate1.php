<?php
include("config.php");


if(isset($_REQUEST["update"])) {
    // Check if id is set before using it in the query
    $id = $_REQUEST["id"];
    // Escape user inputs for security to prevent SQL injection
    $bloodgroup = mysqli_real_escape_string($conn, $_REQUEST["bloodgroup"]);
    $date = mysqli_real_escape_string($conn, $_REQUEST["date"]);

    // Update query with proper WHERE clause
    $sql = "UPDATE bloodgroup SET bloodgroup='$bloodgroup', date='$date' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location='BloodView.php';</script>";
    } else {
        // Handle SQL errors
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: 'id' parameter is missing.";
}
?>
