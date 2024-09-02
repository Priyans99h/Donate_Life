<!DOCTYPE html>
<html lang="en">
<?php include("AdminHead.php"); ?>
<body>

<?php 
include("config.php");
include("AdminHeader.php");

$result = mysqli_query($conn, "select * from feedback");
?>

<section>
  <div class="container-fluid p-5 text-dark text-center">
    <h1 class="mb-3 d-flex justify-content-center align-items-center text-dark" style="font-family: georgia, garamond, serif; font-size: 32px;">Feedback Information</h1>
    <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">

    <div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Feedback ID</th>
            <th scope="col">User Name</th>
            <th scope="col">User Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Details</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
          <?php
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<th>$row[0]</th>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td><a href='FeedbackDelete.php?id=$row[0]' class='btn btn-danger' role='button'>Delete</a></td>";
            echo "</tr>";
          }
          ?>
    </tbody>
</table>

    </div>

    <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">
  </div>
</section>

<br><br>
<br><br>
<br><br>



<?php
include("AdminFooter.php");
?>
</body>
</html>


