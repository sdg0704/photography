<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "photography");
include('includes/header.php');
?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    <h4>Edit Data into Database
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                        <a href="insert.php" class="btn btn-primary float-end">Insert Data</a>
                    </h4>

                </div>

                <?php
                $id = $_GET['id'];
                $fetch_query = "SELECT * FROM registration WHERE ID='$id'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);

                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row)  {
                       
                ?>
                        <div class="card-body">
                            <form action="code.php" method="POST">
                                <div class="mb-3">
                                <input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Username']; ?>" name="Username" id="exampleInputEmail1" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" value="<?php echo $row['Email']; ?>" name="Email" id="exampleInputEmail1" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" value="<?php echo $row['Password']; ?>" name="Password" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" value="<?php echo $row['Number']; ?>" name="Number" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">City</label>
                                    <input type="text" class="form-control" value="<?php echo $row['City']; ?>" name="City" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_btn" class="btn btn-primary">Update Data</button>

                                </div>

                        <?php
                    }
                } else {
                    echo "No Record Found";
                }
                        ?>




                            </form>
                        </div>
            </div>
        </div>
    </div>


    <?php include('includes/footer.php') ?>