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

$result = mysqli_query($conn, "select * from donor");

?>

<section>
    <div class="container-fluid p-5 text-dark text-center">
        <h1 class="mb-3 d-flex justify-content-center align-items-center h-100vh text-dark" style="font-family: georgia, garamond, serif; font-size: 32px;">Donor List</h1>
        <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Donor ID</th>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile No.</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Address</th>
                        <th scope="col">Message</th>
                        <th scope="col">Posting Date</th>
                        <th scope="col">Image</th>
                        <th scope="col">Show/Hide</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>

                <tbody>
                     <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<th>$row[0]</th>";
                            echo "<td>$row[1] $row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "<td>$row[4]</td>";
                            echo "<td>$row[5]</td>";
                            echo "<td>$row[6]</td>";
                            echo "<td>$row[7]</td>";
                            echo "<td>$row[8]</td>";
                            echo "<td>$row[9]</td>";
                            echo "<td>$row[10]</td>";
                            echo "<td><img src='../".$row[11]."'  height=40px width=70px></td>";
                            echo "<td>";
                            if ($row[12] == '1') {
                                // If status is 1, you can show whatever content you want here
                            } else {
                                echo "<button class='btn btn-success show-details' data-id='$row[0]'><i class='fas fa-eye'></i> Show</button>";
                            }
                            if ($row[12] == '0') {   }
                            else{
                            echo "
                                <button class='btn btn-warning hide-details' data-id='$row[0]'><i class='fa-eye-slash'></i> Hide</button>
                                </td>";}
                            echo "<td><a href='DonorDelete.php?id=$row[0]' class='btn btn-danger' role='button'>Delete</a></td>";
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.show-details').click(function(){
        var id = $(this).data('id');
        $.ajax({
            url: 'update_status.php',
            type: 'POST',
            data: { id: id },
            success: function(response){
                location.reload();
                // Handle success
                console.log(response);
            },
            error: function(xhr, status, error){
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    });

     $('.hide-details').click(function(){
        var id = $(this).data('id');
        $.ajax({
            url: 'hide_status.php',
            type: 'POST',
            data: { id: id },
            success: function(response){
                location.reload();
                // Handle success
                console.log(response);
            },
            error: function(xhr, status, error){
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

</body>
</html>
