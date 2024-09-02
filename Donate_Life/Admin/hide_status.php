<?php
// Assuming you have already connected to your database
include("config.php");

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    // Update status to 1 for the corresponding ID
    $update_query = "UPDATE donor SET status = '0' WHERE id = $id";
    $result = mysqli_query($conn, $update_query);

    if($result) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    echo "ID parameter is missing";
}
?>
