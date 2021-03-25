<?php
   
  // Message Vars
  $msg = '';
  $msgClass = '';

  if(filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $mail = htmlspecialchars($_POST['mail']);

    //Check Required Fields
    if(!empty($mail)) {
      // Passed Check email
      include_once 'assets/php/dbh.inc.php';

      $mail = $_POST['mail'];

      $sql = "INSERT INTO email (user_email) VALUES ('$mail');";
      mysqli_query($conn, $sql);

      $msg = 'Registration Successful!';
      $msgClass = 'alert-success';
      
    } else {
      // Failed
      $msg = 'Please enter an email';
      $msgClass = 'alert-danger';
    }

  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Flux | About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php" style="text-decoration:none;">FlUX</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="team.php">Team</a></li>
          <li><a class="nav-link scrollto" href="contact-us.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="margin-top: 50px;">
        <div class="container">
          
          <div class="section-title">
            <span>About</span>
            <h2>About</h2>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <img src="assets/img/about.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>What makes us who we are today…</h3>
                <p class="font-italic">
                  At FlUX, we develop innovative and creative products and services that provide total communication and information
                  solutions. Among a plethora of services, social media advertisements , web design and development, SEO, graphic
                  design, content creation, are few that we offer.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> The general purpose of FlUX is to develop and promote advanced information technologies for multi-user operation.</li>
                  <li><i class="bi bi-check-circle"></i> Our team has all the necessary skills, talent and know-how to take on even the most demanding digital marketing campaigns.</li>
                  <li><i class="bi bi-check-circle"></i> We have worked with clients in diverse industry segments including marketing services, content creation, designing and developing websites as per your needs.</li>
              </ul>
              <!-- <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
              </p> -->
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>FlUX</h3>
            <p>
            Subscribe to receive notifications about our irresistable deals and discounts.
            <br> Also a little insight on us and our work!
            </p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <?php if($msg != ''): ?>
              <div class="alert <?php echo $msgClass; ?>">
                <?php  echo $msg; ?>
              </div>
            <?php endif; ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input type="email" name="mail" placeholder="Enter your Email">
              <input type="submit" name="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <!-- <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span class="footer-copyright-companyname">FlUX</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>