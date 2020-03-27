<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Service | SageIT Services</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
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
          
          <li><a href="dashboard.php" class="ion-ios-locked-outline"> Login</a></li>
          <li><a href="other_services.php" class="ion-ios-arrow-forward"> Other</a></li>

        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!-- ======= Intro Section ======= -->
  <section id="" class="clearfix" style="width: 100%; padding: 82px 0 50px 0;">
    <div class="container">
<!-- Start WOWSlider.com BODY section -->
		<div id="wowslider-container1">
		<div class="ws_images"><ul>
				<li><a href="http://wowslider.net"><img src="data2/images/desert.jpg" alt="jquery carousel" title="Desert" id="wows1_0"/></a></li>
				<li><img src="data2/images/hydrangeas.png" alt="Hydrangeas" title="Hydrangeas" id="wows1_1"/></li>
			</ul></div>
			<div class="ws_bullets"><div>
				<a href="#" title="Desert"><span><img src="data2/tooltips/desert.jpg" alt="Desert"/>1</span></a>
				<a href="#" title="Hydrangeas"><span><img src="data2/tooltips/hydrangeas.png" alt="Hydrangeas"/>2</span></a>
			</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">cssslider</a> by WOWSlider.com v8.7</div>
		<div class="ws_shadow"></div>
		</div>	
		<script type="text/javascript" src="engine2/wowslider.js"></script>
		<script type="text/javascript" src="engine2/script.js"></script>
		<!-- End WOWSlider.com BODY section -->
		<!--wow slider ends here -->

    </div>
  </section>
<!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container">

      <?php
        // session_start();
        require_once('forms/config.php');
        if(isset($_GET["service"])){
          session_start();

          $service_type = $_GET["service"];
          if($service_type == 'advisory'){
            $name_ = "Technology Advisory and IT Support Services";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
            
          }
          else if($service_type == 'web_dev'){
            $name_ = "Web Development and Hosting";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'networking'){
            $name_ = "Computer Networking and Server Configuration";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'software'){
            $name_ = "Software Solutions";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'cctv'){
            $name_ = "CCTV Surveillance and Security Equipment Installation";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'access_control'){
            $name_ = "Access Control Installation";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'graphic'){
            $name_ = "Graphic Designing";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'marketing'){
            $name_ = "Digital Marketing";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'hardware'){
            $name_ = "Hardware Solutions";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title = $load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }
          else if($service_type == 'other_IT'){
            $name_ = "Dealers in all IT Tools and Equipment";
            $load_query = $con->prepare("SELECT s_name,s_description,service_image,activity_1_title,
            activity_1_description, activity_2_title, activity_2_description 
            FROM services WHERE s_name = ?"); 
  
            $load_query->execute(array($name_));
            $load_check = $load_query->fetch();
  
            $name = $load_check["s_name"];
            $description = $load_check["s_description"];
            $service_image = $load_check["service_image"];
            $a_1_title =$load_check["activity_1_title"];
            $a_1_description = $load_check["activity_1_description"];
            $a_2_title = $load_check["activity_2_title"];
            $a_2_description = $load_check["activity_2_description"];
          }

          echo "<header class='section-header'>";
            echo "<h3>"; echo $name; echo "</h3>";
          echo "</header>";
          
          echo "<div class='row about-container'>";
            echo "<div class='col-lg-6 content order-lg-1 order-2'>";
              echo "<p>"; $description; echo "</p>";
              echo "<div class='icon-box wow fadeInUp'>";
                echo "<div class='icon'><i class='fa fa-shopping-bag'></i></div>";
                echo "<h4 class='title'><a href=''>"; echo $a_1_title; echo "</a></h4>";
                echo "<p class='description'>"; echo $a_1_description; echo "</p>";
              echo "</div>";

              echo "<div class='icon-box wow fadeInUp' data-wow-delay='0.2s'>";
                echo "<div class='icon'><i class='fa fa-photo'></i></div>";
                echo "<h4 class='title'><a href=''>"; echo $a_2_title; echo "</a></h4>";
                echo "<p class='description'>"; echo $a_2_description; echo "</p>";
              echo "</div>";
            echo "</div>";

            echo "<div class='col-lg-6 background order-lg-2 order-1 wow fadeInUp'>";
              echo "<img src='"; echo $service_image; echo "' class='img-fluid' alt=''>";
            echo "</div>";
          echo "</div>";
        }
      ?>
      </div>
    </section><!-- End About Section -->

   

   

  
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
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/mobile-nav/mobile-nav.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>