<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Upload | KMA Environmental department</title>
    <meta name="description" content="Bootstrap Responsive HTML5/CSS3">
    <meta name="author" content="">
    <meta name="description" content="">
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/chart.css" rel="stylesheet">
	
	<link href="css/theme.css" rel="stylesheet">	
	<link rel="stylesheet" href="switcher/switcher.css">
	<link href="css/colors/green.css" rel="stylesheet" class="colors">

	<!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144.png">

</head>
<body data-spy="scroll" data-target="#mynav" data-offset="85">

    <!-- Preloader --> 
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    
    <header>
    
    <!-- Bootstrap Menu -->
    <div id="navigation">
        <div class="navbar-wrapper">
            <nav class="navbar-inverse navbar-static-top" role="navigation">
                <a class="navbar-brand" href="#"><img src="images/kmalogo.png"></a>
    
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="#"></a>-->
                        </div>
                        <div id="mynav" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav main-nav-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="works.html">Works</a></li>
                            
                                <li><a href="news.php">News</a></li>
								<li><a href="#contacts">Contact</a></li>
								<li><a href="#logoutModal" class='trigger-btn' data-toggle='modal'>Logout</a></li>								
								
                            </ul>
                        </div>		
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Bootstrap Menu -->
    

<!-- Works Section --> 
<section class="section-wrapper" id="works">
	<div class="works">
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Upload News</span></h1>							
                    </div>	
                    <div class = "panel panel-default">
                        <div class = "panel_heading">
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms"><span class="main-color">News</span>, From around the Metropolis <span class="main-color">and beyond</span></h3>	
                        </div>
                    </div>			
				</div>
			</div>
		</div>
		<!-- End Block Title -->
		<div class="row">
			<div class="container-fluid">	 		
				<div class="wrapper-works">
					<div class="portfoliO">
						<ul id="filters" class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">
						  <li><span class="filter active" data-filter="all">All</span></li>
						  <!-- <li><span class="filter" data-filter=".category-1">IMAGES</span></li>
						  <li><span class="filter" data-filter=".category-2">VIDEO</span></li>
						  <li><span class="filter" data-filter=".category-3">PROJECTS</span></li> -->
						</ul>
						<div class="portfolio-wrap">
							<div class="myport wow fadeInDown" data-wow-duration="1s" data-wow-delay="600ms">
								
								<?php
									require_once('config.php');
									session_start();
									if($_COOKIE['isloggedin'] == "false"){
									// if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
										echo "<script type='text/javascript'> document.location = 'login.html';</script>";
										// header("Refresh:0; url=login.html");
									}else{
										$selectnews_query = $con->prepare("SELECT news_id, news_image, news_caption, news_message 
										FROM news"); 
										$selectnews_query->execute();

										$the_news_array = array();

										while($getIt = $selectnews_query->fetch()){
											array_push($the_news_array,array(
												
											"news_id" => $getIt["news_id"],
											"news_image" => $getIt["news_image"],
											"news_caption" => $getIt["news_caption"],
											"news_message" => $getIt["news_message"],
										));
											echo "<div class='mix category-1 portfolio col-md-6' data-myorder='1'>";
													echo "<div class='img-holder'>";
														echo "<a href='edit_news.php?id=".$getIt["news_id"]."' title='Launching' data-gallery>";
													// echo "<a href='"; echo $getIt["news_image"]; echo "' title='Launching' data-gallery>";
															echo "<img class='img-responsive' src='"; echo $getIt["news_image"]; echo "' alt='No internet'/>";
																echo "<div class='works-overlay'>";
																	echo "<div class='img-overlay'></div>";
																echo "</div>";
																echo "<div class='overlay-content'>";
																	echo "<div class='works-overlay-category'>"; echo $getIt["news_caption"]; echo "</div>";
																		// echo "<div class='works-overlay-text'>Single Image</div>";
																		echo "<div class='works-overlay-icon'><i class='fa fa-edit'></i>"; echo "</div>";
																echo "</div>";
														echo "</a>";
													echo "</div>";
											echo "</div>";
										}
									}
									// echo json_encode(array("Server_response" => $the_news_array));
                                ?>
								<div class="gap"></div>
								<div class="gap"></div>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
		<!-- Single Project -->
		<div id="works-single-wrap">
			<div id="works-single">
			</div>
		</div>
        <!-- End Single Project -->	
        </div>

<!-- upload news button Section --> 
<section class="section-wrapper" id="add_news" style="margin-top:100px; margin-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-circle btn-x1" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>
            </div>
        </div>
    </div>
</section> 
<!-- End upload news button Section -->		

<!-- modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        
        <!-- modal content -->
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Upload</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div> 
            <div class="modal-body mx-3">
                <image-cropper [imageChangedEvent] = "imageChangedEvent" [maintainAspectRatio] ="true"
                    [aspectRatio]="4 / 3" [resizeToWidth]="128" format="png" (imageCropped)="imageCropped($event)"
                    (imageLoaded)="imageLoaded()" (loadImageFailed)="loadImageFailed()">
                </image-cropper>
                <form action="upload_script.php" method="post" enctype="multipart/form-data">
					<input type="file" name="theimage" id="theimage">
					<!-- <input type="file" name="theimage" class="btn btn-default" id="theimage" value="select image" style="width:100%;"/> -->
                    <input type="text" name="caption" class="form-control" placeholder="Caption" id="caption" required>	
                    <textarea  name="message" class="form-control" placeholder="Your message" rows="8" required></textarea>	
                    <div class="modal-footer d-flex justify-content-center">
               
                        <!-- <textarea type="text" name="message" placeholder="Content" id="content" required> -->
                    
                        <button class="btn btn-default">Preview image</button>
                        <input type="submit" value="Upload" class="btn btn-default"/>
                        <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- content ends here -->
    </div>
</div>
<!-- ENd modal -->

<!-- logout Modal HTML -->
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
					echo "<form action='logout.php' method ='POST'>";
						echo "<button type='button' class='btn btn-info' data-dismiss='modal'>Cancel</button>";
						echo "<input type='submit' value='Logout' class='btn btn-danger'/>";
					echo "</form>";
				?>
				<!-- <button type="button" class="btn btn-danger">Delete</button> -->
			</div>
		</div>
	</div>
</div>
<!-- logout modal ends -->
	
<!-- Footer -->
<div class="bottom-footer">
	<div class="container"> 
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
			<ul class="bottom-social-icons">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-flickr"></i></a></li>
			</ul>
		</div>	
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="450ms">
			<p><!--I will put copyright here--></p>
		</div>		  
	</div>
</div>
<!-- End Footer -->		


<!-- Scroll to Top  -->
<a href="#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>	
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
  

</body>
</html>