<?php
session_start();
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
	<link rel="stylesheet" type="text/css" href="video_meditation.css">

	<!----font-awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="icon.ico">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		.mycard {
			transition: all 0.9s ease;
		}

		.mycard:hover {
			transform: scale(1.05);
		}
	</style>
	<title>e-Yog | Official Website</title>
</head>

<body>

	<!---Header Starts---->

	<nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="logo.png" height="60px" width="120px">
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
					<li> <a href="logout.php" class="btn-danger">Log Out</a></li>
				</ul>
				<!------Navigation menus ends---->
			</div>
		</div>
	</nav>
	<!---Header Ends--->



	<br><br>



	<!--Video Course card start-->

	<div class="container-fluid position-relative">
		<center style="height: 50px; background-color: deepskyblue; ">
			<p class="text-white h3" style="">Watch free online <?php echo $_GET['course_name']; ?> videos</p>
		</center><br><br>

		<div class="row">

			<?php

			$course_name = $_GET['course_name'];
			$q = "select * from videos where course_name='$course_name'";
			//echo $course_name;
			$query = mysqli_query($con, $q);
			while ($row = mysqli_fetch_array($query)) {

			?>
				<div class="col-md-3">
					<div class="card shadow mycard" style="width: 18rem; height: 7rem;">
						<div class="inner">
							<!--  to zoom in and zoom out effect -->
							<img class="card-img-top " style="height: 11rem;" src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?> alt="Card image cap">
						</div>

						<div class="card-body shadow" style="background-color: #f1f1f1;">
							<!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
							<p class="card-text"><?php echo $row['video_name']; ?></p>
							<a href="meditation_videos.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>" class="btn btn-primary border-0 ">Watch Videos</a>
						</div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>


			<?php } ?>
			<!--  while loop closed -->

		</div>


	</div>

	<!--Video Course card ends -->


	<br><br>	



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