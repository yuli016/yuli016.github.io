<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailheader = "From:".$name."<".$email.">\r\n";

  $recipient = "yulipantoja@gmail.com";

  mail($recipient, $subject, $message, $mailheader)
  or die("Error has Occured! Please refresh page and try again.");

  echo'


    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/darkversion_16px.svg">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet"/>
        <script src="js/nav.js" defer></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" type="text/css" href="./css/background.css">
        <link rel="stylesheet" type="text/css" href="./css/navbar.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <link rel="stylesheet" type="text/css" href="./css/page.css">
        <link rel="stylesheet" type="text/css" href="./css/contact.css">
      </head>
      <body>

        <nav id="navbar" class="">
          <div class="nav-wrapper">
            <div class="logo">
              <a href="index.html"><img id="logo" src="img/lightversion_16px.svg">uli</a>
            </div>

            <ul id="menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="works.html">Works</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About</a></li>
            </ul>
          </div>
        </nav>

        <!-- Menu Icon -->
        <div class="menuIcon">
          <span class="icon icon-bars"></span>
          <span class="icon icon-bars overlay"></span>
        </div>

        <div class="overlay-menu">
          <ul id="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="works.html">Works</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About</a></li>
            </ul>
        </div><br><br>

        <div class="center-div">

          <div class="contact-form-wrapper d-flex justify-content-center">

            <form class="contact-form" action="email.php" method="POST">

              <h2 class="contact">Message Sent!</h2>
              <p class="contact">Thank you for contacting me. I will get back to you as soon as possible!</p><br>

            </form>
          </div>

        </div>

        <footer class="text-center text-white">

          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3s">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4s">
                  <!-- Content -->
                  <h2 class="footer-title"><img id="logo" src="img/lightversion_16px.svg">uli Pantoja</h2>
                  <p class="contact"></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4s">
                  <!-- Links -->
                  <h2 class="footer-title"> Links</h2>
                  <nav id="footer-nav">
                    <li><a href="index.html">Home</a></li><br>
                    <li><a href="works.html">Works</a></li><br>
                    <li><a href="contact.html">Contact</a></li><br>
                    <li><a href="about.html">About</a></li>
                  </nav>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4s">
                  <!-- Links -->
                  <h2 class="footer-title"> Contacts</h2>
                  <p class="contact"><i class="fas fa-envelope"></i> yulipantoja@gmail.com</p>
                  <p class="contact"><i class="fas fa-phone"></i> (831) 783-8856</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Grid container -->
          <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4s">

              <!-- Itch.io -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://yuli0.itch.io/" target="_Itch" role="button" data-mdb-ripple-color="dark"><i class="fab fa-itch-io"></i></a>

              <!-- Github -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/Yuli016" target="_Github" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.linkedin.com/in/yulitsa-pantoja/" target="_Linkedin" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>

            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
            <div class="text-center p-3s">
              © 2022 by <img id="logo" src="img/lightversion_16px.svg">uli Pantoja
            </div>
            <!-- Copyright -->
        </footer>

      </body>
    </html>

  ';

  ?>
