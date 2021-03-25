<?php 
   
//Message Vars
$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')) {
  //Get Form Data
  $mail = htmlspecialchars($_POST['mail']);

  //Check Required Fields
  if(!empty($mail)) {
    //Passed Check email
    include_once 'assets/php/dbh.inc.php';

    $mail = $_POST['mail'];

    $sql = "INSERT INTO email (user_email) VALUES ('$mail');";
    mysqli_query($conn, $sql);

    $msg = 'Registration Successful!';
    $msgClass = 'alert-success';
    
  } else {
    Failed
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

  <title>Flux | Home</title>
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

      <!-- navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto " href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="contact-us.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center"> 

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Elegant and creative solutions</h1>
          <h2>We are team of talented developers and designers providing quality services of all kinds . </h2>
          <!-- <div class="d-flex">
            <a href="services.html" class="btn-get-started scrollto">Get Started</a>
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
          <div class="container">
    
            <div class="row">
              <div class="col-lg-6">
                <img src="assets/img/about.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>What makes us who we are today…</h3>
                <p class="font-italic">
                  At FlUX, we develop innovative and creative products and services that provide total communication and information
                  solutions. Among a plethora of services, social media advertisements , web design and development, SEO, graphic design, content creation,  are few that we offer.                     
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> The general purpose of FlUX is to develop and promote advanced information technologies for multi-user operation.</li>
                  <li><i class="bi bi-check-circle"></i> Our team has all the necessary skills, talent and know-how to take on even the most demanding digital marketing campaigns.</li>
                  <li><i class="bi bi-check-circle"></i> We have worked with clients in diverse industry segments including marketing services, content creation, designing and developing websites as per your needs.</li>
                </ul>
              </div>
            </div>
    
          </div> 
        </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
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
          <h4><a href="services-inner.php" style="text-decoration:none;">Web Development</a></h4>
          <p>We offer our customers custom web applications dependent on their business needs, relocate inheritance backend, or streamline existing
            front-end usefulness, we can achieve that in a productive and financially savvy way</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="fab fa-facebook-square"></i></div>
          <h4><a href="services-inner.php" style="text-decoration:none;">Facebook Ads</a></h4>
          <p>As a Facebook advertising agency, FlUX has a talented team of social media experts and creative designers who know what it takes to develop and implement effective Facebook ad campaigns for Ecommerce, SaaS, and Tech companies.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-layer-group"></i></div>
          <h4><a href="services-inner.php" style="text-decoration:none;">Graphic Designing</a></h4>
          <p>At FlUX, we offer a wide range of custom graphic design services, and ably translate your thoughts and ideas into creative graphic designs that bring out superior results. We stress on creating custom graphics that work to your advantage.</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 d-flex justify-content-center mt-4 mt-lg-0">
        <a href="services.php" class="btn-get-started scrollto">See All</a>
    </div>
  </div>
</section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>--> <!-- End Counts Section  -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <span>Testimonials</span>
          <h2>Testimonials</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Teams Section ======= -->
    <section id="team" class="team section-bg">
         <div class="container">

            <div class="section-title">
               <span>Team</span>
               <h2>Team</h2>
               <p>These are the people that make the magic happen.</p>
            </div>

            <div class="row justify-content-around">
               <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                     <img src="assets/img/team/team-1.jpg" alt="Abdullah's picture" class="teams-img">
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
                        <img src="assets/img/team/team-2.jpg" alt="Burhan's picture" class="teams-img">
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
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>