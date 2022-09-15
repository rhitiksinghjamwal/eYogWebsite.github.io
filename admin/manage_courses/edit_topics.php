<!DOCTYPE html>
<html>

<head>
  <title>e-Yog | Admin panel</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="shortcut icon" type="text/css" href="icon.ico">


  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .sidebar-list {
      margin-right: -15px;

      font-family: 'Quicksand', sans-serif;
      font-size: 14px
    }

    .sidebar-list li:hover {
      background-color: deepskyblue !important;
    }

    .sidebar-list li a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>

  <!-- ========================================================================================================================== -->

  <!--Navigation bar starts-->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a href=""><img src="logo.png" height="65px" width="120px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link text-white" href="../admin_main.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!--Navigation bar ends-->
  <!-- ========================================================================================================================== -->

  <br>

  <div class="container-fluid" style="margin-top: 50px;">
    <div class="row">
      <!-- ========================================================================================================================== -->

      <!-- sidebar starts -->

      <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar">
        <ul class="list-group text-white sidebar-list">
          <li class="list-group-item bg-dark "><a href="../manage_courses/manage_courses.php">Manage Courses</a></li>
          <li class="list-group-item bg-dark"><a href="../manage_videos/manage_videos.php">Manage Videos</a></li>
          <li class="list-group-item bg-dark"><a href="../manage_users/manage_user.php">Manage Users</a></li>
          <li class="list-group-item bg-dark"><a href="../manage_faq/manage_faq.php">Manage FAQs</a></li>
          <li class="list-group-item bg-dark"><a href="../../logout.php">Logout</a></li>
          <li class="list-group-item bg-dark" style="height: 400px;"></li>
        </ul>
      </div>

      <!-- sidebar ends -->

      <!-- ========================================================================================================================== -->



      <div class="col-md-10 ">
        <!--  main body content starts -->


        <div class="col-lg-12">
          <h3 class="text-center mt-2">Manage Your <?php echo $_GET['course_name']; ?> Course</h3><br>
          <table class="table table-striped table-hover shadow">

            <tr class="font-weight-bold">
              <th>id</th>
              <th>topic name</th>
              <th>description</th>
              <th>Update</th>
              <th>Delete</th>

            </tr>
            <?php

            $con = mysqli_connect('localhost', 'root');


            mysqli_select_db($con, 'uniquedeveloper');
            $coursename = $_GET['course_name'];
            $q = "select * from courses where course_name='$coursename'";
            $result = mysqli_query($con, $q);
            while ($res = mysqli_fetch_array($result)) {


            ?>

              <tr class=" ">
                <td><?php echo $res['id'] ?></td>

                <td><?php echo $res['topic_name']; ?></td>

                <td><textarea rows="3" cols="50" class=""><?php echo html_entity_decode($res['description'], ENT_QUOTES); ?></textarea></td>

                <td><a class=" no-gutters text-primary" href="update_topic.php?course_id=<?php echo $res['id'] ?>" style="text-decoration: none;">Update<i class="fa fa-pencil-square ml-2" aria-hidden="true"></i></a></td>

                <td><a class=" no-gutters text-danger" href="verify/verify_delete.php?course_id=<?php echo $res['id'] ?>&amp;course_name=<?php echo $res['course_name']; ?>" style="text-decoration: none;">Delete<i class="fa fa-trash-o ml-2" aria-hidden="true"></a></td>

              </tr>

            <?php }

            echo '<button class="btn btn-primary" id="btn-add"><a href="add_new_topic.php?course_name=' . $coursename . '" class="text-white">Add a new topic</a></button>';

            ?>
          </table>
        </div>




      </div>
    </div>
  </div>


  <body>

</html>