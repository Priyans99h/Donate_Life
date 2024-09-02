<!DOCTYPE html>
<html lang="en">
<?php
	include("AdminHead.php");
?>
<head>

</head>
<body>

<?php
include("config.php");
include("AdminHeader.php");

$result = mysqli_query($conn, "SELECT * FROM requester"); // Assuming you have a table named "requests"

?>

<section>
    <div class="container-fluid p-5 text-dark text-center">
        <h1 class="mb-3 d-flex justify-content-center align-items-center h-100vh text-dark" style="font-family: georgia, garamond, serif; font-size: 32px;">Request List</h1>
        <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Requester ID</th>
                        <th scope="col">Donor ID</th>
                        <th scope="col">Requester Name</th>
                        <th scope="col">Mobile No.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Blood Require For</th>
                        <th scope="col">Address</th>
                        <th scope="col">Message</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['donor_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['relation'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td><a href='RequestDelete.php?id=" . $row['id'] . "' class='btn btn-danger' role='button'>Delete</a></td>";
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
	include("AdminFooter.php");
?>
</body>
</html>

        
