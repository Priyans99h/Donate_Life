<!DOCTYPE html>
<html lang="en">
<?php
	include("DonorLogin\DonorHead.php");
?>
<head>

</head>
<body>

<?php
include("config.php");

session_start();
$id = $_SESSION['id'];

include("DonorLogin\DonorHeader.php");

$query = "SELECT requester.donor_id, requester.name, requester.email, requester.mobile, requester.relation, requester.message, requester.address, donor.id AS donor_id 
          FROM requester 
          JOIN donor ON donor.id = requester.donor_id 
          WHERE requester.donor_id = ?";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

?>


<section>
    <div class="container-fluid p-5 text-dark text-center">
        <h1 class="mb-3 d-flex justify-content-center align-items-center h-100vh text-dark" style="font-family: georgia, garamond, serif; font-size: 32px;">Request List</h1>
        <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Requester Name</th>
                        <th scope="col">Mobile No.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Blood Require For</th>
                        <th scope="col">Address</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['relation'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">
    </div>
</section>

<?php
	include("DonorLogin\DonorFooter.php");
?>
</body>
</html>

        
