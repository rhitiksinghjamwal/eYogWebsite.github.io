<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<title>e-Yog | Official Website</title>

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!----font-awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">


	<!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="assets/images/icon.ico">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

	<!---Header----->
	<header class="register-header">
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
						<li> <a href="login.php">Login</a></li>
						<li> <a href="register.php">Register</a></li>
						<li> <a href="#footer-section">About</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!---Header Ends----->


	<hr>


	<!---Slider Section starts	------->
	<section class="register-slider text-center" id="register-slider">
		<div class="modal-dialog ">
			<div class="modal-content col-lg-12 col-md-12 col-sm-12">
				<h3 id="register-heading"><strong>Register</strong></h3>

				<div class="modal-body">
					
					<div class="box">
						<form method="POST" action="registration.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i> Username :</label>
								<input type="text" name="username" class="form-control" placeholder="Enter username">

								<label><i class="fa fa-user fa-2x"></i> Email id :</label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email id">

								<label><i class="fa fa-lock fa-2x"></i> Password :</label>
								<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">

								<label><i class="fa fa-lock fa-2x"></i> Confirm Password :</label>
								<input type="password" name="confirm_password" class="form-control" id="cpwd" placeholder="Enter password again">

								<div id="errorlabel"></div>
								<button id="btn-signup" type="submit">Sign Up</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!---Slider Section ends------->


	<br>


	<!---footer Section Start---->
	<section id="footer-section">
		<br><br><br><br><br><br>
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
	<!---footer Section Ends----->


	<!---Confirm password validation Start------->

	<script type="text/javascript">
		$(document).ready(function() {

			$('#cpwd').keyup(function() {
				var pwd = $('#pwd').val();
				var cpwd = $('#cpwd').val();
				if (cpwd != pwd) {
					$('#errorlabel').html('**password are not matched');
					$('#errorlabel').css('color', 'red');
					return false;
				} else {
					$('#errorlabel').html('');
					return true;
				}
			});

		});
	</script>
	<!---Confirm password validation end------->



	<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
	<script src="js/typed.min.js" type="text/javascript"></script>

</body>

</html>