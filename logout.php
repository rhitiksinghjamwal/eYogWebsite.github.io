<?php
//Start the sesion and destroy
session_start();
session_destroy();
echo "<br> You have been logged out";
header('location:index.php');
?>