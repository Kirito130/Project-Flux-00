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

   <title>Flux | Team</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets/img/favicon.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

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
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto active" href="team.php">Team</a></li>
          <li><a class="nav-link scrollto" href="contact-us.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      </div>
   </header>
   <!-- End Header -->


   <main style="margin-top: 2em;" id="main">
      <section id="team" class="team section-bg">
         <div class="container">

            <div class="section-title">
               <span>Team</span>
               <h2>Team</h2>
               <p>These are the people that make the magic happen</p>
            </div>

            <div class="row justify-content-around">
               <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                     <img src="assets/img/team/team-1.jpg" alt="Abdullah's picture" style="height: 520px;">
                     <h4>Abdullah Shaikh</h4>
                     <span>Co-Founder</span>
                     <div class="social">
                        <!-- <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a> -->
                        <a href="https://www.instagram.com/abdullahshhaikh/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/abdullah-shaikh-1b41b9204" target="_blank"><i class="bi bi-linkedin"></i></a>
                     </div>
                  </div>
               </div>
                          
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                     <div class="member">
                        <img src="assets/img/team/team-2.jpg" alt="Burhan's picture" style="height: 520px;">
                        <h4>Burhan Petiwala</h4>
                        <span>Co-Founder</span>
                        <div class="social">
                           <!-- <a href=""><i class="bi bi-twitter"></i></a>
                           <a href=""><i class="bi bi-facebook"></i></a> -->
                           <a href="https://www.instagram.com/burhan__13/" target="_blank"><i class="bi bi-instagram"></i></a>
                           <a href="https://www.linkedin.com/in/burhanuddin-petiwala-58b28b170" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
         

         </div>
      </section> <!-- End Team Section -->

   </main> <!-- End #main -->

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
   
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>
   
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