<?php
session_start();
$connection = mysqli_connect("localhost","root","","photography");
include('includes/header.php');
?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
      <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
          <div class="card card-plain mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <h2 class="font-weight-bolder mb-0">General Statistics</h2>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="card  mb-4">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                    <?php 
                    $dash_booking_q = "SELECT * from booking";
                    $dash_booking_q_run = mysqli_query($connection, $dash_booking_q);

                    if($booking_total = mysqli_num_rows($dash_booking_q_run))
                    {
                      echo '<h4 class="mb-0"> ',$booking_total.' </h4>';
                    }
                    else{
                      echo '<h4 class="mb-0">No data found</h4>';
                    }
                    ?>
                    
                  </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Just updated</p>
                </div>
              </div>

              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                    <h4 class="mb-0">+100</h4>
                  </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Just updated</p>
                </div>
              </div>

            </div>
            <div class="col-lg-6 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-4">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Comments</p>
                    <?php 
                    $dash_contact_q = "SELECT * from contact";
                    $dash_contact_q_run = mysqli_query($connection, $dash_contact_q);

                    if($contact_total = mysqli_num_rows($dash_contact_q_run))
                    {
                      echo '<h4 class="mb-0"> ',$contact_total.' </h4>';
                    }
                    else{
                      echo '<h4 class="mb-0">No data found</h4>';
                    }
                    ?>
                  </div>
                </div>

                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">Just updated</p>
                </div>
              </div>

              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">User's Registrations</p>
                    <?php 
                    $dash_registration_q = "SELECT * from registration";
                    $dash_registration_q_run = mysqli_query($connection, $dash_registration_q);

                    if($registration_total = mysqli_num_rows($dash_registration_q_run))
                    {
                      echo '<h4 class="mb-0"> ',$registration_total.' </h4>';
                    }
                    else{
                      echo '<h4 class="mb-0">No data found</h4>';
                    }
                    ?>
                  </div>
                </div>

                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">Just updated</p>
                </div>
              </div>

            </div>
          </div>


        </div>
      </div>

     
        </div>
      </div>
    </div>



 
 
    <?php include('includes/footer.php') ?>