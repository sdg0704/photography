<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Online Booking for Photoshoot">
  <meta name="keywords" content="Photography,Videography">
  <meta name="author" content="Gandhi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CaptureMomentsStudio</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <!--BoxiIcon Link-->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
  <!--This is Header Section-->
  <header>
    <div class="top">
      <nav>
        <img src="images/logo.png" class="logo" height="300px">
        <ul>
          <li><a href="Home_Page.php">HOME</a></li>
          <li><a href="Portfolio_Page.php">PORTFOLIO</a></li>
          <li><a href="About_Page.php">ABOUT</a></li>
          <li><a href="Services_Page.php">SERVICES / BOOKING</a></li>
          <li><a href="Contact_Page.php">CONTACT</a></li>
        </ul>
        <!--DropDown Login start-->
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Login</button>
          <div id="myDropdown" class="dropdown-content">
            <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin</a>
            <a onclick="document.getElementById('id02').style.display='block'" style="width:auto;">User</a>
          </div>
        </div>
        <script>
          /* When the user clicks on the button, 
          toggle between hiding and showing the dropdown content */
          function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
          }

          // Close the dropdown if the user clicks outside of it
          window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
              var dropdowns = document.getElementsByClassName("dropdown-content");
              var i;
              for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
                }
              }
            }
          }
        </script>
        <div id="id01" class="modal">

          <form class="modal-content animate" action="Admin.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
              <img src="images/img_avatar1.png" alt="Avatar" class="avatar">
            </div>

            <div class="login_container">
              <label for="Aname"><b>Admin Name</b></label>
              <input type="text" placeholder="Enter Admin Name" name="Aname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit"
                style="background-color: #04AA6D; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; ">Login
                <style>
                  button :hover {
                    opacity: 0.8;
                  }
                </style>
              </button>

              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="login_container" style="background-color:#f1f1f1">
              <button type="button" name="submit" onclick="document.getElementById('id01').style.display='none'"
                class="cancelbtn">Cancel</button>
              <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
            </div>
          </form>
        </div>
        <script>
          // Get the modal
          var modal = document.getElementById('id01');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function (event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
        </script>

<div id="id02" class="modal">

  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close"
        title="Close Modal">&times;</span>
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="login_container">
      <label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" value="<?=$Username?>" name="Username" required>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>

      <button type="submit" name="submit" value="submit"
        style="background-color: #04AA6D; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; ">Login
        <style>
          button :hover {
            opacity: 0.8;
          }
        </style>
      </button>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="login_container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'"
        class="cancelbtn">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </form>
</div>
<script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
        <!--DropDown Login end-->
        <div class="menu">
          <span style="color: aliceblue;">MENU</span>
          <div style="color: aliceblue;" class="bx bx-menu" id="menu-icon"></div>
        </div>
      </nav>

    </div>

  </header>
  <!--This is Main Portfolio Section-->
  <section class="place">
    <div class="detail">
      <b>HELLO THERE!</b><br>
      <br>
      <span>I'm a </span><br>
      <span id="element"></span>
      <p>Capturing Moments, Creating Memories</p>

      <div class="btnss">
        <button onclick="window.location.href='Registration_Page.php';">Register Now</button>
      </div>
    </div>
    <div class="images">
      <img src="images/shape.png" class="shape">
      <img src="images/girl2.png" class="girl2">
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
      var typed = new Typed('#element', {
        strings: ['Photographer', 'Videographer', 'Designer'],
        loop: true,
        typeSpeed: 50,
        backSpeed: 80,
        backDelay: 1500
      });
    </script>
  </section>


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container1">
        <h1>
          About Studio
        </h1>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
          <div class="about_img-bg">
            <img src="images/about-img-bg.png" alt="">
          </div>
        </div>
        <div class="detail-box">
          <p>
            Welcome to the captivating world of CaptureMomentsStudio Photography, where every image tells a story and
            every
            moment is frozen in time.<br>Our commitment goes beyond the ordinary; it's a dedication to crafting images
            that
            transcend the mere pixels on a screen.<br>
            Photography, where the ordinary transforms into extraordinary, and distraction becomes a delightful journey.
          </p>
          <div>
            <a href="About_Page.php">
              about More
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end about section -->
  <!--Start of footer section-->
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="Home_Page.php">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="Portfolio_Page.php">Portfolio</a></li>
      <li class="menu__item"><a class="menu__link" href="Services.html">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="About_Page.php">About</a></li>
      <li class="menu__item"><a class="menu__link" href="Contact._Page.php">Contact</li>

    </ul>
    <p>&copy;2024 Shraddha Gandhi | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--End of footer section-->
</body>

</html>