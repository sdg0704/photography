<?php
include 'database.php';

$sql = "SELECT category, path FROM images";
$result = $conn->query($sql);
$images = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $images[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="Portfolio.css">

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

                <div class="menu">
                    <span style="color: aliceblue;">MENU</span>
                    <div style="color: aliceblue;" class="bx bx-menu" id="menu-icon"></div>
                </div>


            </nav>

        </div>
      
    </header>
    </div>
    
            
   
    <div class="heading_container1" style="margin-top: 80px;">
        <h1>
            Portfolio
        </h1>
    </div>
    <!--This is Portfolio Section-->
        <div class="gallery"
        style="margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; text-transform: capitalize; transition: all .2s cubic-bezier(.34, 1.12, .68, 1.31);">
        <ul class="controls">
            <li class="buttons active" data-filter="all">all</li>
            <li class="buttons" data-filter="BabyPhotoshoot">BabyPhotoshoot</li>
            <li class="buttons" data-filter="Birthday">Birthday</li>
            <li class="buttons" data-filter="Festivals">Festivals</li>
            <li class="buttons" data-filter="Wedding">Wedding</li>
            <li class="buttons" data-filter="Model">Model</li>
        </ul>
        
        <div class="image-container">
        <?php foreach ($images as $image): ?>
                <a href="<?php echo htmlspecialchars($image['path']); ?>" class="image <?php echo htmlspecialchars($image['category']);?>">
                    <img src="<?php echo htmlspecialchars($image['path']); ?>" alt="">
                </a>
            <?php endforeach; ?>
            <!--<a href="images/BabyPhotoshoot1.jpg" class="image ice-cream">
                <img src="images/BabyPhotoshoot1.jpg" alt="">
            </a><a href="images/BabyPhotoshoot2.jpg"
                class="image ice-cream"><img src="images/BabyPhotoshoot2.jpg" alt=""></a>
            <a href="images/BabyPhotoshoot3.jpg" class="image ice-cream"><img src="images/BabyPhotoshoot3.jpg"></a>
            <a href="images/Birthday1.jpg" class="image chocolate"><img src="images/Birthday1.jpg"></a>
            <a href="images/Birthday2.jpg" class="image chocolate"><img src="images/Birthday2.jpg"></a>
            <a href="images/festival1.jpg" class="image cake"><img src="images/festival1.jpg"></a>
            <a href="images/festival2.jpg" class="image cake"><img src="images/festival2.jpg"></a>
            <a href="images/festival3.jpg" class="image cake"><img src="images/festival3.jpg"></a>
            <a href="images/festival4.jpg" class="image cake"><img src="images/festival4.jpg"></a>
            <a href="images/festival5.jpg" class="image cake"><img src="images/festival5.jpg"></a>
            <a href="images/wedding1.jpg" class="image juice"><img src="images/wedding1.jpg"></a>
            <a href="images/wedding2.jpg" class="image juice"><img src="images/wedding2.jpg"></a>
            <a href="images/wedding3.jpg" class="image juice"><img src="images/wedding3.jpg"></a>
            <a href="images/Model1.jpg" class="image sandwich"><img src="images/Model1.jpg"></a>
            <a href="images/Model2.jpg" class="image sandwich"><img src="images/Model2.jpg"></a>
            <a href="images/Model3.jpg" class="image sandwich"><img src="images/Model3.jpg"></a>
            <a href="images/Model4.jpg" class="image sandwich"><img src="images/Model4.jpg" alt=""></a>
            <a href="images/Model5.jpg" class="image sandwich"><img src="images/Model5.jpg" alt=""></a>
            <a href="images/Model6.jpg" class="image sandwich"><img src="images/Model6.jpg" alt=""></a>
            <a href="images/Model7.jpg" class="image sandwich"><img src="images/Model7.jpg" alt=""></a>
        --></div>
    </div>
    <!-- jquery cdn link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--magnific popup js cdn link-->
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
            <script>$(document).ready(function () {

                    $('.buttons').click(function () {

                        $(this).addClass('active').siblings().removeClass('active');

                        var filter = $(this).attr('data-filter')
                        if (filter == 'all') {
                            $('.image').show(400);
                        }

                        else {
                            $('.image').not('.' + filter).hide(200);
                            $('.image').filter('.' + filter).show(400);
                        }

                    });

                    $('.gallery').magnificPopup({

                        delegate: 'a',
                        type: 'image',
                        gallery: {
                            enabled: true
                        }

                    });

                });

            </script>
            <!--End of Portfolio Section-->


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
        <li class="menu__item"><a class="menu__link" href="Contact_Page.php">Contact</li>

    </ul>
    <p>&copy;2024 Shraddha Gandhi | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--End of footer section-->
</body>

</html>