<?php

// in this file --> code for add a new course ,update a course and delete a course by admin from manage_courses.php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'yog');

// ============================================================================================

// code to delete a user by admin from manage_users.php

if (isset($_POST['btn-delete-user'])) {

	$username = $_POST['selected_user'];
	$q = "DELETE FROM users WHERE username='$username'";
	$r = mysqli_query($con, $q);
	if ($r) {
		header("location:manage_user.php?status=deleted");
	}
}
