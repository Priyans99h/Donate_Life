<!DOCTYPE html>
<html lang="en">
<?php include("AdminHead.php"); ?>
<body>

<?php include("AdminHeader.php");?>


<section>
    <div class="container-fluid p-5 text-dark text-center">
        <h1 class="mb-3 d-flex justify-content-center align-items-center h-100vh text-dark" style="font-family: georgia, garamond, serif; font-size: 32px;">Add Blood Group</h1>
        <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">

        <form action="BloodAdd1.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bloodID" class="form-label">Blood ID</label>
                            <input type="number" name="id" class="form-control" id="bloodID" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bloodGroupName" class="form-label">Blood Group Name</label>
                            <input type="text" name="bloodgroup" class="form-control" placeholder="Blood Group Name" id="bloodGroupName" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="dateOfInfo" class="form-label">Date of Info</label>
                    <input type="date" name="date" class="form-control" id="dateOfInfo">
                </div>

                <div class="text-center col-md-4 container-fluid p-5 text-dark text-center">
                    <input type="submit" class="btn btn-primary btn-block form-control" name="submit" value="Add">
                </div>
            </div>
        </form>
        <hr style="border: 3px solid rgba(84, 80, 80, 0.95); border-radius: 5px;">
    </div>
</section>


<?php
include("AdminFooter.php");
?>
</body>
</html>


