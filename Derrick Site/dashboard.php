<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | SageIT Services</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">
      <nav class="main-nav animated fadeInLeftBig bg bg-light float-left d-none d-lg-block" style="border-radius: 20px;padding:10px;">
        <ul>
          <li class="active"><a href="index.php#intro" class="ion-ios-home-outline"> Home</a></li>
          <li><a href="index.php#about" class="ion-ios-information-outline"> About Us</a></li>
          <li><a href="index.php#services" class="ion-ios-help-outline"> Services</a></li>
          <li><a href="index.php#portfolio" class="ion-code-working"> Portfolio</a></li>
          <li><a href="#logoutModal" class='trigger-btn ion-ios-locked-outline' data-toggle='modal'> Sign out</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title ml2">Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <?php
            session_start();
            if($_COOKIE['isloggedin'] == "false"){
                // if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
                    echo "<script type='text/javascript'> document.location = 'login.php';</script>";
            }else{
                if(isset($_GET['out'])){
                    session_destroy();
                    // unset($_SESSION['name']);
                    setcookie("isloggedin","false",time() + (18400 * 30), "/");
                    header("Refresh:0; url=index.php");    
                }else{
                    require_once('forms/config.php');
                    $select_query = $con->prepare("SELECT id, title, image, work_type
                    FROM portfolio"); 
                    $select_query->execute();

                    $the_portfolio_array = array();

                    while($getIt = $select_query->fetch()){
                        array_push($the_portfolio_array,array(
                            
                            "id" => $getIt["id"],
                            "title" => $getIt["title"],
                            "image" => $getIt["image"],
                            "work_type" => $getIt["work_type"],
                        ));
                        echo "<div class='col-lg-4 col-md-6 portfolio-item filter-web' data-wow-delay='0.1s'>";
                            echo "<div class='portfolio-wrap'>";
                                echo "<img src='"; echo $getIt['image']; echo "' class='img-fluid' alt=''>";
                                echo "<div class='portfolio-info'>";
                                    echo "<h4><a href='#'>"; echo $getIt['title']; echo "</a></h4>";
                                    echo "<p>"; echo $getIt['work_type']; echo "</p>";
                                echo "<div>";
                                echo "<a href='"; echo $getIt['image']; echo"' class='venobox link-preview' data-gall='portfolioGallery' title='"; echo $getIt['title']; echo "'><i class='ion ion-eye'></i></a>";
                                echo "<a href='#' class='link-details' title='More Details'><i class='ion ion-android-open'></i></a>";
                            echo "</div>";
                        echo "</div>";        
                    }
                }
            }
        ?> 
        </div>
      </div>
    </section>
    
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Messages</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->


  <!-- ======= Logout Modal ======= -->
  <div id="logoutModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title">LOGOUT?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to logout?</p>
			</div>
			<div class="modal-footer">
				<?php
					echo "<form action='dashboard.php?out=3' method ='POST'>";
						echo "<button type='button' class='btn btn-info' data-dismiss='modal'>Cancel</button>";
						echo "<input type='submit' value='Logout' class='btn btn-danger'/>";
					echo "</form>";
				?>
				<!-- <button type="button" class="btn btn-danger">Delete</button> -->
			</div>
		</div>
	</div>
</div>
  <!-- ======= Logout Modal Ends======= -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <!-- <h3>NewBiz</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> -->
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="index.php#intro">Home</a></li>
              <li><a href="index.php#about">About us</a></li>
              <li><a href="index.php#services">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Kasoa <br>
              Central Region, Ghana<br>
              <strong>Phone:</strong><br> +233 548 801 288 <br> +233 274 756 446 <br> +233 241 990 710<br>
              <strong>Email:</strong> info.sageITservices@gmail.com<br>
            </p>

            <div class="social-links">
              <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
              <a href="https://www.facebook.com/SagetitServices-101664768145332" class="facebook"><i class="fa fa-facebook"></i></a>
              <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
              <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
              <!-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/mobile-nav/mobile-nav.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    // Wrap every letter in a span
  var textWrapper = document.querySelector('.ml2');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  
  anime.timeline({loop: true})
    .add({
      targets: '.ml2 .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.ml2',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
    </script>

</body>

</html>