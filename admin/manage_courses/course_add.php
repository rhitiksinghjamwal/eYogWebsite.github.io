<?php

// in this file --> code for add a new course ,update a course and delete a course by admin from manage_courses.php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'yog');

// ==========================================================================================

// code to add a new course by admin from manage_courses.php

if (isset($_POST['btn_add'])) {
	$coursename = $_POST['course_name'];
	$courseimg = $_FILES['course_image'];
	$coursedesc = $_POST['course_desc'];

	$filename = $courseimg['name'];
	print_r($courseimg);
	$fileerror = $courseimg['error'];
	$filetmp = $courseimg['tmp_name'];


	$fileext = explode('.', $filename);
	$filecheck = strtolower(end($fileext));

	$fileextstored = array('png', 'jpg', 'jpeg');


	if (in_array($filecheck, $fileextstored)) {
		$destinationfile = 'uploadimg/' . $filename;
		move_uploaded_file($filetmp, '../../uploadimg/' . $filename);

		$q = "insert into courses(course_name,course_image,course_description) values('$coursename','$destinationfile','$coursedesc')";
		$r = mysqli_query($con, $q);

		if ($r == true) {
			header("location:manage_courses.php?status=added");
		}
	}
}


// ============================================================================================

// code to delete a new course by admin from manage_courses.php

if (isset($_POST['btn-delete-course'])) {

	$course_name = $_POST['selected_course'];
	$q = "DELETE FROM courses WHERE course_name='$course_name'";
	$r = mysqli_query($con, $q);
	if ($r) {
		header("location:manage_courses.php?status=deleted");
	}
}


// ==============================================================================
// code to update course by admin from manage_courses.php


if (isset($_POST['btn_update'])) {
	$coursename = $_POST['selected-course-to-update'];
	$courseimg = $_FILES['course_image'];
	$coursedesc = $_POST['course_desc'];

	$filename = $courseimg['name'];
	print_r($courseimg);
	$fileerror = $courseimg['error'];
	$filetmp = $courseimg['tmp_name'];


	$fileext = explode('.', $filename);
	$filecheck = strtolower(end($fileext));

	$fileextstored = array('png', 'jpg', 'jpeg');

	if (in_array($filecheck, $fileextstored)) {
		$destinationfile = 'uploadimg/' . $filename;
		move_uploaded_file($filetmp, $destinationfile);

		$q = " UPDATE courses SET course_image='$destinationfile',course_description='$coursedesc' WHERE course_name='$coursename'";
		$r = mysqli_query($con, $q);

		if ($r == true) {
			header("location:manage_courses.php?status=updated");
		}
	}
}
