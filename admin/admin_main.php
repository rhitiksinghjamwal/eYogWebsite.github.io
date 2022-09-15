<?php
include("classes/admin.php");
$admin = new admin;
$userd = $admin->show_users();
$messages = $admin->show_messages();

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="text/css" href="assets/images/icon.ico">

  <!----css file link-->
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>e-Yog | Admin panel</title>
</head>

<body style="background-color:#f1efef">


  <!--Navigation bar starts-->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a href="admin_main.php"><img src="assets/images/logo.png" height="65px" width="120px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link text-white" href="">Welcome Admin <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!--Navigation bar ends-->


  <br>


  <!--Sidebar starts-->


  <div class="container-fluid" style="margin-top: 55px;">
    <div class="row">
      <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar">
        <ul class="list-group text-white sidebar-list">
          <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
          <li class="list-group-item bg-dark"><a href="manage_videos/manage_videos.php">Manage Videos</a></li>
          <li class="list-group-item bg-dark"><a href="manage_users/manage_user.php">Manage Users</a></li>
          <li class="list-group-item bg-dark"><a href="manage_faq/manage_faq.php">Manage FAQs</a></li>
          <li class="list-group-item bg-dark"><a href="../logout.php">Logout</a></li>
          <li class="list-group-item bg-dark" style="height: 400px;"></li>
        </ul>
      </div>

      <!-- sidebar ends -->


      <br>


      <!--Main content starts -->

      <div class=" col-md-10">
        <div class="card-header bg-white" style="margin-right: -45px; height: 60px;">
          <h4>
            <center><strong>DASHBOARD</strong></center>
          </h4>
        </div>
        <div class="row">
          <div class="col-md-4 mt-3 ml-5">
            <div class="card shadow " style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px; cursor:pointer;">
              <img class="myimg" src="../uploadimg/a1.png" alt="Card" width="288" height="200">
              <div class="card-body">
                <p class="card-text"><a href="manage_courses/manage_courses.php" style="text-decoration: none;">MANAGE YOUR COURSES<i class="fa fa-book ml-3"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card shadow" style="width: 18rem;cursor:pointer; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">
              <img class="" src="../uploadimg/a2.png" alt="Card" width="288" height="200">
              <div class="card-body">
                <p class="card-text "><a href="manage_videos/manage_videos.php" style="text-decoration: none; color: orangered">MANAGE YOUR VIDEOS</a><i class="fa fa-video-camera ml-3" style="color: orangered"></i></p>
              </div>
            </div>
          </div>
          <!--  no of courses and videos starts -->

          <div class="col-sm-3 mt-3">


            <table class="table table-borderless">

              <tbody>
                <tr>
                  <td class="mytable1">
                    <div class="card shadow border-0 " style="width: 15rem; height: 110px; box-shadow: 2px 3px #827171; border-radius:0px; border-top-left-radius: 0px;">

                      <div class="card-body">
                        <p class="card-text text-white"><b class="h4">No. Of Courses </b><br><span style="font-size: 20px;"><?php $admin->display_course_count(); ?></span></p>
                      </div>
                    </div>

                  </td>

                </tr>
                <tr>
                  <td class="mytable2">
                    <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">

                      <div class="card-body">
                        <p class="card-text text-white"><b class="h4">No. Of Videos</b><br><span style="font-size: 20px;"><?php $admin->display_video_count(); ?></span></p>
                      </div>

                  </td>

                </tr>

              </tbody>
            </table>

            <br><br>
          </div> <!--  no of courses and videos ends -->

          <div class="row ">
            <!--  second row closed -->

            <div class="col-md-6" id="users_section">
              <!-- list of users starts -->

              <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;">

                <!-- table stsrts  -->
                <!--  use table-responsive class -->
                <center>
                  <p class="ml-5">
                    <strong>List of Users</strong><br>
                    <a class="float-left" style="text-decoration: none;">No. Of Users = <?php $admin->display_user_count(); ?></a>
                    <a href="manage_users/manage_user.php" class="float-right" style="text-decoration: none;">Manage</a>
                  </p>
                </center>

                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email Id</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($userd as $userdata) {
                  ?>
                    <tr>
                      <th scope="row"><?php echo $userdata['id']; ?></th>
                      <td><?php echo $userdata['username']; ?></td>
                      <td><?php echo $userdata['password']; ?></td>
                      <td><?php echo $userdata['email']; ?></td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>

              <!-- table ends  -->

            </div>

            <!-- list of users ends -->
            <div class="col-md-5" id="messages_section">
              <!-- list of users starts -->

              <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;">

                <!-- table stsrts  -->
                <!--  use table-responsive class -->
                <center>
                  <p class="ml-5">
                    <strong>&nbsp;&nbsp;&nbsp;List of Messages Received</strong>
                  </p>
                </center>
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <!--<th scope="col">Email Id</th>-->
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($messages as $messagedata) {
                  ?>
                    <tr>
                      <th scope="row"><?php echo $messagedata['s.no']; ?></th>
                      <td><?php echo $messagedata['email']; ?></td>
                      <td><?php echo $messagedata['message']; ?></td>
                      <!--<td><?php echo $messagedata['email']; ?></td>-->
                    </tr>

                  <?php } ?>
                </tbody>
              </table>

              <!-- table ends  -->



            </div>
            <!-- list of users ends -->




          </div>

          <!--  Second row closed -->

          <div class="row">
            <!-- third row starts -->

            <div class="col-md-12 ml-5" id="faq_section">
              <!-- FAQ section starts -->

              <table class="table bg-white" style="height : 355px;overflow-y: scroll;display: inline-block; width:640px">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th scope="col">MANAGE FAQs <a href="" class="float-right" style="text-decoration: none;">Edit</a></th>
                  </tr>
                </thead>
                <tbody>

                  <?php $faq = $admin->display_faq_list();

                  foreach ($faq as $faq_list) {

                  ?>

                    <tr style="width: 500px;">
                      <th><?php echo $faq_list['id']; ?></th>
                      <td><?php echo $faq_list['faq_title']; ?><br>
                        <blockquote class="rounded p-2 text-muted " style="font-size: 13px; background-color: #db6a8f57;"><?php echo $faq_list['faq_description']; ?></blockquote>
                      </td>
                    </tr>

                  <?php } ?>


                </tbody>
              </table>
            </div> <!-- FAQ section ends -->

          </div> <!--   third row ends -->

        </div>


        <!-- main content starts -->

      </div> <!--  main row closed -->
      <br>
    </div> <!-- container closed -->








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>