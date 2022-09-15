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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

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

<body>

    <!---Header Starts	----->

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <!------Responsive Button---->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href=""><img src="assets/images/logo.png" height="60px" width="120px"></a>
            </div>
            <div class="collapse navbar-collapse" id="navi">
                <!------Navigation menus starts---->
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="">Home</a></li>
                    <li> <a href="#courses-section">Courses</a></li>
                    <li> <a href="#contact-section">Contact</a></li>
                    <li> <a href="#footer-section">About Us</a></li>
                    <li> <a href="" class="btn-success"><?php echo $_SESSION['username'];   ?></a></li>
                    <li> <a href="logout.php" class="btn-danger">Log Out</a></li>
                </ul>
                <!------Navigation menus ends---->
            </div>
        </div>
    </nav>
    <!---Header Ends--->




    <!---Slider Section starts	------->
    <section class="slider text-center" id="slider">
        <div class="slider-overlay">
            <div class="slider-content">
                <div class="slider-text">
                    <h1><strong>Welcome to e-Yog website</strong></h1>
                    <h3><strong>A Simple, Modern, Mindful approach to learn and practice Yoga and Meditation.</strong></h3>
                </div>
                <div class="cta-div">
                    <a href="#courses-section" class="btn1"><b>EXPLORE COURSES</b></a>
                    <a href="#contact-section" class="btn2"><b>CONTACT US</b></a>
                </div>
                <br><br>
            </div>
        </div>
    </section>

    <!---Slider Section ends------->



    <!--Background-->
    <section class="banner-2">
        <img class="med-img" src="assets/images/flex1.PNG" height="600px" width="100%">
    </section>

    <section class="banner-2">
        <img class="med-img" src="assets/images/flex2.PNG" height="600px" width="100%">
    </section>
    <!--Background-->



    <!---Courses Section Start------->

    <section id="courses-section">
        <div class="container-fluid coursesbody" id="mycourses_section">
            <div class="courses-area" id="courses">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <h2><b>COURSES</b></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="yoga_courses.php">YOGA</a></h3>
                            <p>
                                <strong>Here you will find all the audio and video courses of Yoga</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="meditation_courses.php">MEDITATION</a></h3>
                            <p>
                                <strong>Here you will find audio and video courses of Meditation</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="yoga_courses.php">YOGA</a></h3>
                            <p>
                                <strong>Here you will find all the audio and video courses of Yoga</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="meditation_courses.php">MEDITATION</a></h3>
                            <p>
                                <strong>Here you will find audio and video courses of Meditation</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="yoga_courses.php">YOGA</a></h3>
                            <p>
                                <strong>Here you will find all the audio and video courses of Yoga</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="meditation_courses.php">MEDITATION</a></h3>
                            <p>
                                <strong>Here you will find audio and video courses of Meditation</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="yoga_courses.php">YOGA</a></h3>
                            <p>
                                <strong>Here you will find all the audio and video courses of Yoga</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="courses-wrap text-center">
                            <div class="courses-icon">
                                <i class="fa fa-chevron-circle-down"></i>
                            </div>
                            <h3><a href="meditation_courses.php">MEDITATION</a></h3>
                            <p>
                                <strong>Here you will find audio and video courses of Meditation</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <br><br><br><br>
    </section>

    <!------Courses Section Ends------->



    <!---FAQs Section Start------->
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

                        mysqli_select_db($con, 'yog');

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
                    </div>
                </div>
                <center>
                    <div class="freeimage" id="meimg">
                        <div class="col-md-2 col-md-offset">
                            <img src="uploadimg/faq.png" style="margin-top: 20px;">
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <br><br><br><br>
    </section>

    <!---FAQs Section Ends------->



    <!---Contact us Section Start------->

    <section id="contact-section">
        <div class="row text-center" id="contact-section">
            <h2><b>CONTACT US</b></h2><br><br>
            <center>
                <div class="card" style="width: 30rem;">
                    <div class="card-body border-info">
                        <form method="POST" action="index.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Message</label>
                                <textarea name="message" class="form-control" rows="4" cols="7" placeholder="Enter your message" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br><br><br><br>
                        </form>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            //Connecting to the database
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "yog";

                            //Create a connection
                            $conn = mysqli_connect($servername, $username, $password, $database);
                            //Die if connection was not successful
                            if (!$conn) {
                                die("Sorry we have failed to connect: " . mysqli_connect_error());
                            }
                            else {
                                //Submit these to the database
                                //Insert SQL query to be executed
                                $sql = "INSERT INTO `contact` (`email`, `message`, `date_time`) VALUES ('$email', '$message', current_timestamp())";
                                $result = mysqli_query($conn, $sql);
                                if ($result) 
                                    echo '<script>alert("Message sent successfully. Thank you for contacting us.")</script>';
                                else
                                    echo "Error";
                            }
                        }
                        ?>
                    </div>
                </div>
            </center>
        </div>
    </section>

    <!---Contact us Section Ends------->




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