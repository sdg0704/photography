<?php
session_start();
$connection = mysqli_connect("localhost","root","","photography");
include('includes/header.php');
?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
        <div class="card mt-5">
        <div class="card-header">
          <h4>Registeration Entries

            <a href="insert.php" class="btn btn-primary float-end">Insert Data</a>
          </h4>
        </div>

        <div class="card-body">
          <table class="table table-primary table-stripped table-bordered">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Number</th>
                <th scope="col">City</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $fetch_query = "SELECT * FROM registration";
              $fetch_query_run = mysqli_query($connection, $fetch_query);

              if (mysqli_num_rows($fetch_query_run) > 0) {
                foreach ($fetch_query_run as $row) {
              ?>

                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['City']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                   
                    <td>
                      <form action="code.php" method="post">
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                  </tr>

                <?php
                }
              } else {
                ?>
                <tr>
                  <td colspan="5">No record found</td>
                </tr>
              <?php

              }

              ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <?php include('includes/footer.php') ?>