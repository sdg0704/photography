<?php 
  $page = substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../Home_Page.php" target="_blank">
        <!--<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">-->
        <span class="ms-1 font-weight-bold text-white">Home</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "index.php"? 'active bg-gradient-primary':''; ?>" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Home Page</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "registration.php"? 'active bg-gradient-primary':''; ?>" href="registration.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">registration Entries</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "booking.php"? 'active bg-gradient-primary':''; ?>" href="booking.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Bookings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "messages.php"? 'active bg-gradient-primary':''; ?>" href="messages.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Messages</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "admin_upload.php"? 'active bg-gradient-primary':''; ?>" href="admin_upload.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Portfolio Images</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">

      </div>
    </div>
  </aside>