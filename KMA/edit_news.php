<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Edit | KMA Environmental department</title>
    <meta name="description" content="Bootstrap Responsive HTML5/CSS3">
    <meta name="author" content="">
    <meta name="description" content="">
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/prettyPhoto.css" rel="stylesheet">
	
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
<div id="single-portfolio">
<?php
		require_once('config.php');
		session_start();
		$id = $_GET["id"];

		$load_query = $con->prepare("SELECT news_image,news_caption,news_message 
		FROM news WHERE news_id=?"); 

		$load_query->execute(array($id));
		$load_check = $load_query->fetch();

		$news_image = $load_check["news_image"];
		$news_caption = $load_check["news_caption"];
		$news_message = $load_check["news_message"];

		echo "<div id='portfolio-details' class='container'>";
			echo "<a class='close-folio-item' href='upload_news.php'><i class='fa fa-times' data-dismiss='news_info.php'></i></a>";
				echo"<div class='row'>";
					echo "<div class='col-sm-4'>";
						echo "<img src='"; echo $news_image; echo "' alt='' />";	
						echo "<h4 class='team-member-name'><span class='main-color'>"; echo $news_caption; echo "</span></h4>";
					echo "</div>";	
					echo "<div class='col-sm-8'>";
						echo "<div class='team-details'>";
							echo "<div class = 'panel panel-default'>";
								echo "<div class = 'panel_heading'>";
									echo "<h3 class='wow fadeInUp' data-wow-duration='1s' data-wow-delay='300ms'><span class='main-color'>"; echo "Edit News"; echo "</span>.<span class='main-color'></span></h3>";	
								echo "</div>";
							echo "</div>";
							echo "<label for='cap'>";
								echo "<i class='fa fa-edit'></i>";
							echo "</label>";
							echo "<form action='update_news.php?id="; echo $_GET['id']; echo "' method='POST'>";

							echo "<input type='text' value='"; echo $news_caption; echo "' style='height:50px; width:100%; text-align:center;font-size:20px;margin-top:30px;' id='cap' name='cap'";
							echo "<h3></h3>";
							echo "<input type='text' value='"; echo $news_message; echo "' style='height:100px; width:100%; text-align:center;font-size:20px;margin-top:30px;' id='message' name='message'";
							// echo "<textarea>"; echo $news_message; echo"</textarea>";
							// echo "<div contenteditable='true' style='border:1px solid gray; border-radius:10px;margin-top:10px;padding:5px;font-size:15px;' id='message' name='message'>"; echo $news_message; echo "</div>";
							// echo "<p>"; echo $news_message; echo "</p>";
						echo "</div>";

					echo "</div>";
				echo "</div>";
		echo "</div>";
		// header("Refresh:0; url=upload_news.php");

	echo "<div class='bottom-footer-center'>";
		echo "<ul class='bottom-social-icons'>";
	
					echo "<input type='submit' value='Save' class='btn btn-default' style='margin-top:-9px;'/>";
					//<!-- <li><a href='#'><i class='fa fa-save'></i></a></li> -->

					echo "<li><a href='#deleteModal' class='trigger-btn' data-toggle='modal'><i class='fa fa-trash' style='margin-top:10px;background-color:red;'></i></a></li>";
				echo "</form>";
	?>

			</ul>
	</div>
</div>

<!-- delete Modal HTML -->
<div id="deleteModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete this news? This process cannot be undone.</p>
			</div>
			<div class="modal-footer">
				<?php
					echo "<form action='delete.php?id="; echo $_GET['id']; echo "' method='POST'>";
						echo "<button type='button' class='btn btn-info' data-dismiss='modal'>Cancel</button>";
						echo "<input type='submit' value='Delete' class='btn btn-danger'/>";
					echo "</form>";
				?>
				<!-- <button type="button" class="btn btn-danger">Delete</button> -->
			</div>
		</div>
	</div>
</div> 
<!-- delete modal ends here -->

<!-- !-- Footer  -->
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


