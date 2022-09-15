<!--PHP Section Starts-->

<?php
//session_start();
//if (!isset($_SESSION['username'])) {
//	header('location:login.php');
//	# code...
//}
?>

<!--PHP Section Ends-->


<!--HTML Section starts-->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">


	<!----font-awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

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

<body onload="myfunction()">
	<!---preloader starts	----->

	<div id="loading">

	</div>

	<!---preloader Ends	----->


	<!---Header----->
	<header>
		<nav class="navbar navbar-expand-lg navbar-fixed-top">
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
						<li> <a href="">Home</a></li>
						<li> <a href="#courses_section">Courses</a></li>
						<li> <a href="login.php">Login</a></li>
						<li> <a href="register.php">Register</a></li>
						<li> <a href="#contact_section">Contact Us</a></li>
						<!--<li> <a href="logout.php" id="our-location" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>-->
					</ul>
					<!------Navigation menus ends---->
				</div>
			</div>
		</nav>
	</header>
	<!---Header Ends----->


	<!---Slider Section starts	------->
	<section class="slider text-center" id="slider">
		<div class="slider-content">
			<div class="cta-div">
				<a href="#courses_section" class="btn1">EXPLORE COURSES</a>
				<a href="#contact_section" class="btn2">CONTACT US</a>
			</div>
			<br><br>
		</div>
	</section>
	<!---Slider Section ends------->



	<!--Yoga Background section starts------->
	<section class="yoga-background">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="yoga-back-img">

					</div>
				</div>
				<div class="col-lg-6 text-center">
					<br><br>
					<h1>YOGA</h1>
					<h3>Yoga is a system of exercises for the body that involves breath control and helps relax both your mind and body</h3>
					<br><br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 text-center">
					<h1>MEDITATION</h1>
					<h3>Meditation is a practice in which an individual uses a technique – such as mindfulness, or focusing the mind on a particular object, thought, or activity – to train attention and awareness, and achieve a mentally clear and emotionally calm and stable state.</h3>
				</div>
				<div class="col-lg-6">
					<div class="med-back-img">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!---Yoga Background section ends------->

	<br><br>
	<hr>


	<!--Yoga Background section starts------->
	<section class="yoga-background">
		<div>
			<br><br>
			<h1>YOGA</h1>
			<h3>Yoga is a system of exercises for the body that involves breath control and helps relax both your mind and body</h3>
			<br><br>
		</div>
		<div class="background-text">
			<div class="text">

			</div>
		</div>
		<div class="yoga-back-img">

		</div>
	</section>
	<!---Yoga Background section ends------->



	<!---Meditation Background section starts------->
	<section class="meditation-background">
		<div>
			<br><br>
			<h1>MEDITATION</h1>
			<h3>Meditation is a practice in which an individual uses a technique – such as mindfulness, or focusing the mind on a particular object, thought, or activity – to train attention and awareness, and achieve a mentally clear and emotionally calm and stable state.</h3>
			<br><br>
		</div>
		<div class="background-text">
			<div class="text">

			</div>
		</div>
		<div class="med-back-img">

		</div>
	</section>
	<!---Meditation Background section ends------->

	<br><br>


	<!---Courses Section Start------->

	<section id="courses_section">
		<br><br>
		<div class="container-fluid servicebody">
			<div class="service-are" id="service">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2><b>COURSES</b></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-apple"></i>
							</div>
							<h3><a href="programmingdemo.php">YOGA</a></h3>
							<p>
								Here you will find all the audio and video courses of Yoga
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-laptop"></i>
							</div>
							<h3><a href="video tutorials\java\display_video_courses.php">MEDITATION</a></h3>
							<p>
								Here you will find audio and video courses of Meditation
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-apple"></i>
							</div>
							<h3><a href="programmingdemo.php">YOGA</a></h3>
							<p>
								Here you will find all the audio and video courses of Yoga
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-laptop"></i>
							</div>
							<h3><a href="video tutorials\java\display_video_courses.php">MEDITATION</a></h3>
							<p>
								Here you will find audio and video courses of Meditation
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-apple"></i>
							</div>
							<h3><a href="programmingdemo.php">YOGA</a></h3>
							<p>
								Here you will find all the audio and video courses of Yoga
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-laptop"></i>
							</div>
							<h3><a href="video tutorials\java\display_video_courses.php">MEDITATION</a></h3>
							<p>
								Here you will find audio and video courses of Meditation
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-apple"></i>
							</div>
							<h3><a href="programmingdemo.php">YOGA</a></h3>
							<p>
								Here you will find all the audio and video courses of Yoga
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="service-wrap text-center">
							<div class="service-icon">
								<i class="fa fa-laptop"></i>
							</div>
							<h3><a href="video tutorials\java\display_video_courses.php">MEDITATION</a></h3>
							<p>
								Here you will find audio and video courses of Meditation
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!------Courses Section Ends------->

	<br><br>
	<hr>

	<!---FAQs Section Start------->

	<br><br><br>
	<section class="faq" id="myfaq">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><b>GENERAL FAQs</b></h2>
				</div>
			</div>
		</div> <br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="panel-group" id="accordian">


						<?php

						$con = mysqli_connect('localhost', 'root');
						if (!$con) {
							die('connection failed' . mysqli_connect_error());
						}

						mysqli_select_db($con, 'uniquedeveloper');

						$sql = "select * from faq";
						$result = mysqli_query($con, $sql);
						while ($row = mysqli_fetch_array($result)) {
						?>

							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<h4 class="panel-title">
										<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
									</h4>
								</div>
								<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
									<div class="panel-body">
										<p>
											<?php echo $row['faq_description']; ?>
										</p>
									</div>
								</div>
							</div>

						<?php } ?>


						<div class="panel panel-default">
							<div class="panel-heading" id="headingTwo">
								<h4 class="panel-title">
									<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
								<div class="panel-body">
									<p>
										Unique Developer is an online E-learning website <br>
										here you can learn programming languages,Tech News and improve your coding skill
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="freeimage" id="meimg">
					<div class="col-md-2 col-md-offset">
						<img src="img/faq1.png">
					</div>
				</div>

			</div>
		</div>
	</section>

	<!---FAQs Section Ends------->

	<br><br>
	<hr>

	<!---Contact us Section Start------->

	<section id="contact_section">
		<div class="row text-center">
			<h2><b>CONTACT US</b></h2><br><br>
			<center>
				<div class="card" style="width: 30rem;">
					<div class="card-body border-info">

						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Message</label>
								<textarea class="form-control" rows="4" cols="7" placeholder="Enter your message" style="resize: none;"></textarea>
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</center>
		</div>
	</section>

	<!---Contact us Section Ends------->

	<br><br>
	<hr>

	<!---footer Section Start	----->
	<div class="container">
		<footer>
			<div class="row">
				<div class="col-md-12 text-center">
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
			<hr>
			<p class="text-center">© 2022 Rhitik Jamwal</p>
			<br>
		</footer>
	</div>
	<!---footer Section Ends	----->



	<!---This is script section------->

	<script type="text/javascript">
		var preloader = document.getElementById('loading');

		function myfunction() {
			preloader.style.display = 'none';
		}


		function addButton() {
			var body = document.getElementsByTagName('body')[0];
			var myfaq1 = document.getElementById('myfaq');
			var btn = document.createElement('button');
			btn.innerHTML = 'sunil';
			myfaq1.appendChild(btn);
			body.appendChild(myfaq);
		}
	</script>

	<script src="js/typed.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

</body>

</html>