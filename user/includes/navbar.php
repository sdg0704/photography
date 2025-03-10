<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  

  <?php

if($_SESSION["Username"]) {
?>
Welcome <?php echo "SELECT * FROM registration WHERE Username =".$_SESSION["Username"] ; ?>.
Click here to <a href="logout.php" tite="Logout">Logout.<br /> <a href="profile.php" tite="profile"> see my profile
<?php
}
?><div class="container-fluid py-1 px-3">
  <h4>Welcome User!</h4>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group input-group-outline">
          <a href="Home_Page.php"><i class="fa fa-home"></i> Home</a>
          </div> 
        </div>
      </div>

    </div>
  </div>
</nav>