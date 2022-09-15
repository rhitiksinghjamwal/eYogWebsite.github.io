<!--PHP Section start-->

<?php
session_start();
?>

<!--PHP Section end-->




<!--HTML Section start-->

<!DOCTYPE html>
<html>

<head>

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/yoga_courses.css">

	<!----font-awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="assets/images/icon.ico">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>e-Yog | Official Website</title>
</head>

<body>

	<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="assets/images/logo.png" height="60px" width="120px">
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="#courses-section">Yoga Courses</a></li>
					<li> <a href="#footer-section">About Us</a></li>
					<li> <a href="" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
					<li> <a href="logout.php" class="btn-danger">Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!---Header Ends--->


	<br><br><br><br>


	<!---Background Section Starts---->

	<section class="banner-2">
		<img class="med-img" src="assets/images/yoga1.jpg" height="550px" width="100%">
	</section>

	<!---Background Section Ends---->




	<!---Yoga Courses Section Start------->

	<section id="courses-section">
		<div class="container-fluid coursesbody" id="courses_section">
			<div class="courses-area" id="courses">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2><b>YOGA COURSES</b></h2>
							<div class="sub-heading">
								<strong>Below are the available yoga audio and video course playlists</strong><br><br>
								<strong>Start practicing today</strong> <br> <br>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="courses-wrap text-center">
							<div class="courses-icon">
								<i class="fa fa-headphones"></i>
							</div>
							<h3><a href="audio_yoga.php">AUDIO COURSE</a></h3>
							<p>
								Here you will have access to audio guided yoga playlist
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="courses-wrap text-center">
							<div class="courses-icon">
								<i class="fa fa-video-camera"></i>
							</div>
							<h3><a href="video tutorials\yoga\display_video_courses.php">VIDEO COURSE</a></h3>
							<p>
								Here you will have access to video yoga playlist
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>
	</section>

	<!------Yoga Courses Section Ends------->




	<!---Footer Section Start---->
	<section id="footer-section">
		<br>
		<div class="container">
			<footer>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<h2><b>CONNECT WITH US ON SOCIAL MEDIA</b></h2>
					</div>
				</div>
				<br>
				<div class="social-networks text-center">
					<a href="" class="fa fa-facebook"></a>
					<a href="" class="fa fa-twitter"></a>
					<a href="" class="fa fa-instagram"></a>
					<a href="" class="fa fa-linkedin"></a>
					<br><br>
					<a href="index.php">Home</a>
					&nbsp;
					&nbsp;
					<a href="https://rhitiksinghjamwal.github.io/MyWebsite/">About Developer</a>
				</div>
				<p class="text-center">© 2022 Rhitik Jamwal</p>
				<br>
			</footer>
		</div>
	</section>
	<!---Footer Section Ends--->



</body>

</html>

<!--HTML Section end-->