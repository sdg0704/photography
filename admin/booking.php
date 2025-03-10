<?php
session_start();
$connection = mysqli_connect("localhost","root","","photography");
include('includes/header.php');
?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">


            <div class="card">
                <div class="card-header">
                    <h4>Booking Request
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>

                </div>
                <div class="card mt-5">

        <div class="card-body">
          <table class="table table-primary table-stripped table-bordered">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Selected Service</th>
                <th scope="col">Selected Service type</th>
                <th scope="col">Booking Date</th>
                <th scope="col">Status</th>
                <th scope="col">Accept</th>
                <th scope="col">Decline</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $fetch_query = "SELECT * FROM booking";
              $fetch_query_run = mysqli_query($connection, $fetch_query);

              if (mysqli_num_rows($fetch_query_run) > 0) {
                foreach ($fetch_query_run as $row) {
              ?>

                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['service']; ?></td>
                    <td><?php echo $row['service_type']; ?></td>
                    <td><?php echo $row['booking_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                   <td>
                      
                      <form action="code.php" method="post">
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="accept_btn" class="btn btn-danger btn-sm">Accept</button>
                        </form>
                    </td>
                   
                    <td>
                      <form action="code.php" method="post">
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="decline_btn" class="btn btn-danger btn-sm">Decline</button>
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
    </div>


    <?php include('includes/footer.php') ?>