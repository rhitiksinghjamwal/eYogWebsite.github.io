<?php
session_start();
include 'conn.inc.php';
require 'comments.inc.php';


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');
}
date_default_timezone_set('Asia/Kolkata');
// echo date_default_timezone_get();




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
	<link rel="stylesheet" type="text/css" href="css/yoga_videos.css">

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

	<style type="text/css">
	    textarea {
			resize: none;
		}
	</style>
</head>

<body id="mybody" class="bg-white">

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



	<br><br><br><br><br>



	<!---Video iframe Start	----->
	<div>
		<center style="height: 50px; background-color: deepskyblue; ">
			<p class="text-white h3" style="">Watch Free Online <?php echo $_GET['course_name']; ?> Videos</p>
		</center><br><br><br><br>
	</div>

	<br>
	<div class="container-fluid">
		<center>
		<div class="row">
			<section class="col-md-7 mt-4">


				<iframe style="border:1px #999 solid;" width="760" height="415" <?php
																				$_SESSION['vid'] = $_GET['video_id'];
																				$video_id = $_GET['video_id'];
																				$sql = "select * from videos where video_id='$video_id'";
																				$result = mysqli_query($con, $sql);
																				while ($row = mysqli_fetch_array($result)) {
																				?> src=<?php echo $row['video_path'];   //fetching youtube video path from database & storing into src attribute
																					}



																						?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


				<!---Video iframe Ends	----->


				<!---Comments Section Start	----->
				<br><br>

				<div class='commentdiv shadow bg-light' style="border:1px #d2c8c8 solid; background-color: #dfe1e4;">
					<?php
					$video_id = $_GET['video_id'];    //getting the value of video is from the previous page using GET
					echo "      
				<form method='POST' action='" . setComments($con) . "'>
					<input type='hidden' name='uid' value='Anonymous'>
					<input type='hidden' name='vid' value='" . $video_id . "'>
					<input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
					<textarea name='message'></textarea><br>
					<button type='submit' name='commentSubmit' class='commentbtn'>Comment</button>
				</form><br><br>
			";
					?> </div>

				<?php

				getComments($con);


				?>

			</section>
			<!---Comments Section Ends	----->


			<!---Video list Start	----->

			<div class="col-md-4 float-right ml-5 bg-white mt-4">
				<table class="table table-hover mt-3 table-borderless bg-light">
					<tbody>
						<div class="card-header text-center bg-light">
							<h5><strong>Popular videos</strong></h5>
						</div>


						<?php

						$course_name = $_GET['course_name'];

						$sql = "select * from videos where course_name='$course_name'";
						$result = mysqli_query($con, $sql);

						while ($row = mysqli_fetch_array($result)) {

						?>

							<tr>
								<td><a href=""><img src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?> height="100" width="150"></a></td>
								<td><?php echo $row['video_name']; ?></td>

							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		</center>

	</div>

	<!---Video list Ends	----->




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