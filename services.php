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

  <title>Flux | Services</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
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

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto active" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="team.php">Team</a></li>
          <li><a class="nav-link scrollto" href="contact-us.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

      <section id="services" class="services section-bg" style="margin-top: 50px;">
        <div class="container">
      
          <div class="section-title">
            <span>Services</span>
            <h2>Services</h2>
            <p>Have a look at the wide range of services that we offer .</p>
          </div>
      
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-laptop-code"></i></div>
                <h4><a href="services-inner.php">Web Development</a></h4>
                <p>We offer our customers custom web applications dependent on their business needs, relocate inheritance backend, or streamline existing
                  front-end usefulness, we can achieve that in a productive and financially savvy way</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fab fa-facebook-square"></i></div>
                <h4><a href="services-inner.php">Facebook Ads</a></h4>
                <p>As a Facebook advertising agency, FlUX has a talented team of social media experts and creative designers who know what it takes to develop and implement effective Facebook ad campaigns for Ecommerce, SaaS, and Tech companies.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-layer-group"></i></div>
                <h4><a href="services-inner.php">Graphic Designing</a></h4>
                <p>At FlUX, we offer a wide range of custom graphic design services, and ably translate your thoughts and ideas into creative graphic designs that bring out superior results. We stress on creating custom graphics that work to your advantage.</p>
              </div>
            </div>
          </div>
        
          <div class="row" style="margin-top: 50px;">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-edit"></i></div>
                <h4><a href="services-inner.php">UI/UX Designing</a></h4>
                <p>Great online experiences happen only when a well planned UX strategy is visualized with top class design aesthetics; and
                we do it best.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="services-inner.php">Search Engine Optimization</a></h4>
                <p>By partnering with an SEO provider, you have a full team of experts working toward your digital success. So whatever your
                goal is—driving traffic, generating leads, maximizing sales, increasing brand awareness—we’ve got you covered. You could say our SEO strategies are optimized for success.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="services-inner.php">Video Production</a></h4>
                <p>We create awesome explainer videos of all types, that'd improve your brand story telling & user engagement which results
                in higher conversions</p>
              </div>
            </div>
          </div>


          <div class="row" style="margin-top: 50px;">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                
                <div class="icon"><i class="fas fa-edit"></i></div>
                <h4><a href="services-inner.html">Content Writing</a></h4>
                <p>Whether it’s a one-off project or a recurring one, our team of writers are specialized in content writing skills for every industry. Get on demand writing service when you need it  </p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-edit"></i></div>
                <h4><a href="services-inner.html">Digital-Marketing</a></h4>
                <p>We are working as advanced advertising administrations with Our master group have constantly empty for you to satisfy
                prerequisites and necessities. Our prepared representatives prepared to execute your directions to give a sharp and
                secure obligation for each finishing.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-layer-group"></i></div>
                <h4><a href="services-inner.html">Graphic Designing</a></h4>
                <p>At FlUX, we offer a wide range of custom graphic design services, and ably translate your thoughts and ideas into
                creative graphic designs that bring out superior results. We stress on creating custom graphics that work to your advantage.</p>
              </div>
            </div>
          </div>
      
        </div>
      </section>










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