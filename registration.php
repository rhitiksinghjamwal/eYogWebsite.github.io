<?php 

session_start();

$con = mysqli_connect('localhost','root');

if ($con){
	echo "Connection is successful";
}
else{
	die("No Connection");
}

mysqli_select_db($con,'yog');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$q="select * from users where username ='$username'";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
   echo "duplicate data";
   header('location:register.php');
}
else
{
   $qy="insert into users(username,password,email) values('$username','$password','$email')";
   mysqli_query($con,$qy);
   echo "Inserted";
   header('location:login.php');
}
