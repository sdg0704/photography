<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Booking for Photoshoot">
    <meta name="keywords" content="Photography,Videography">
    <meta name="author" content="Gandhi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaptureMomentsStudio</title>
    <link rel="stylesheet" href="Service.css" type="text/css">
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
                <div class="menu">
                    <span style="color: aliceblue;">MENU</span>
                    <div style="color: aliceblue;" class="bx bx-menu" id="menu-icon"></div>
                </div>
            </nav>

        </div>
    </header>
    <div class="heading_container1">
        <h1>
            OUR SERVICES
        </h1>
    </div>
    <!-- Slideshow container -->
    <section div="slide">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/wedding1 (2).jpg" style="width:100%">
                <div class="text">Wedding Photography</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/festival4 (2).jpg" style="width:100%">
                <div class="text">Festival Photography</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/Model8.jpg" style="width:100%">
                <div class="text">Model Photography</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script> slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </section>
    <!--This is Booking Section-->

    <div class="background">
        <div class="booking-form">
            <h2>Book Your Photoshoot Now</h2>
            <form action="Booking.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>&nbsp;

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>&nbsp;

                <label for="Select-Service">Select Service</Select>:</label>
                <select name="service">
                    <option>Photography</option>
                    <option>Videography</option>
                    <option>Album</option>
                    <option>Prints</option>
                </select>&nbsp;

                <label for="Select-Service-Type">Select Service-Type</Select>:</label>
                <select name="service_type">
                    <option>Portrait</option>
                    <option>Baby Photoshoot</option>
                    <option>Festival Photoshoot</option>
                    <option>Pre-Wedding Photoshoot</option>
                    <option>Wedding Photoshoot</option>
                    <option>Fuction Photoshoot</option>
                    <option>Commercial</option>
                </select>&nbsp;

                <label for="Booking-date">Booking Date:</label>
                <input type="date" name="booking_date" id="booking_date" required>&nbsp;

                <input type="hidden" name="status" required>&nbsp;

                <button type="submit">Book Now</button>&nbsp;
            </form>
        </div>
    </div>
    <!--This is End of Booking Section-->
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
            <li class="menu__item"><a class="menu__link" href="Services_Page.php">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="About_Page.php">About</a></li>
            <li class="menu__item"><a class="menu__link" href="Contact_Page.php">Contact</a></li>

        </ul>
        <p>&copy;2024 Shraddha Gandhi | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--End of footer section-->
</body>

</html>