<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    <h4>Insert Data into Database
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
                        <a href="insert.php" class="btn btn-primary float-end">Insert Data</a>
                    </h4>

                </div>
                <div class="card-body">
                            <form action="code.php" method="POST">
                                <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="Username" id="exampleInputEmail1" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="Email" id="exampleInputEmail1" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="Password" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" name="Number" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">City</label>
                                    <input type="text" class="form-control" name="City" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_btn" class="btn btn-primary">Update Data</button>
                                </div>



                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include('includes/footer.php') ?>