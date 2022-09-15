<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}


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
    <link rel="stylesheet" type="text/css" href="css/audio_meditation.css">

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

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-dark">
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
                    <li> <a href="" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
                    <li> <a href="logout.php" class="btn-danger">Log Out</a></li>
                </ul>
                <!------Navigation menus ends---->
            </div>
        </div>
    </nav>
    <!---Header Ends--->


    <br><br><br><br>




    <!---Background Section Starts---->

    <section class="banner-1">
        <img class="med-img" src="assets/images/meditation4.png" height="500px" width="100%">
    </section>

    <section class="banner-2">
        <img class="med-img" src="assets/images/meditation5.PNG" height="400px" width="100%">
    </section>


    <!---Background Section Ends---->



    <!---Audio Meditation Section Start--->

    <section id="audio-meditation">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="audio-meditation text-center col-lg-6 col-sm-6 col-md-6">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1rSb8LFMZfWNTF35MTqU61?utm_source=generator" width="70%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
                <div class="audio-meditation text-center col-lg-6 col-sm-6 col-md-6">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2fM4jTPIlOuqdZxHZSDAMS?utm_source=generator&theme=0" width="70%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="audio-meditation text-center col-lg-6 col-sm-6 col-md-6">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1DWVS1recTqXhf?utm_source=generator" width="70%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="audio-meditation text-center col-lg-6 col-sm-6 col-md-6">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3KX8GN4lXQFGk0UknJrLko?utm_source=generator" width="70%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!---Audio Meditation Section End--->


    <br><br>


    <!---footer Section Start---->
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
    <!---footer Section Ends--->


</body>

</html>