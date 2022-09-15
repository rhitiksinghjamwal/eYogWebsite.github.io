<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:../../login.php');
}
include 'conn.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
	<!----Linking google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/audio_courses.css">

	<!----font-awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="images/icon.ico">

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

	<nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="images/logo.png" height="60px" width="120px">
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="../../index.php">Home</a></li>
					<li> <a href="" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
					<li> <a href="../../logout.php" class="btn-danger">Log Out</a></li>
				</ul>
				<!------Navigation menus ends---->
			</div>
		</div>
	</nav>
	<!---Header Ends--->


	<br><br><br><br><br><br>
	<div>
		<center style="height: 50px; background-color: deepskyblue; ">
			<p class="text-white h3">Practice Audio Guided Yoga Free</p>
		</center><br><br>
	</div>


	<!---Background Section Starts---->

	<section class="banner-1">
		<img class="yoga-img" src="images/yoga.jpg" height="450px" width="100%">
	</section>

	<!---Background Section Ends---->


	<br><br><br>


	<!-- Video Course card starts -->

	<div class="container-fluid" id="yoga-card">
		<center>
			<div class="row">

				<?php

				$sql = "select * from audio_info where course_name = 'Yoga'";
				$result = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_array($result)) {

				?>
					<div class="">
						<div class="card-shadow" style="width: 22rem; height: 22rem;">
							<div class="inner">
								<!--  to zoom in and zoom out effect -->
								<img class="card-img-top " style="height: 15rem;" src=<?php echo $row['image']; ?> alt="Card image cap">
							</div>
							<br>
							<div class="card-body text-center shadow">
								<a href="display_audio_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary">Play Yoga Audios</a>
							</div>
						</div><br><br><br><br><br><br><br><br><br>
					</div>


				<?php } ?>
				<!--  while loop closed -->

			</div>

		</center>
	</div>

	<!--Video Course card ends -->




	<!---Footer Section Start---->
	<section id="footer-section">
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