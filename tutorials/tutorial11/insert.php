<?php
require 'connection/connection.php';
if(isset($_POST['data']))
{
$name = $_POST['fname'];
$user = $_POST['username'];
$pass = $_POST['password'];
$age = $_POST['age'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$dob = $_POST['dob'];

// database insert SQL code
$sql = "INSERT INTO `users` (`id`,`full_name`,`username`,`password`,`age`,`dob`,`city`,`state`,`country`) VALUES ('0', '$name','$user', '$pass','$age','$dob','$city','$state','$country')";
$message= "<p style=color:green;>Data Inserted Successfully!</p>";
$_SESSION['message'] = $message;
// insert in database 
$rs = mysqli_query($db , $sql);
if($rs)
{
	
	header('location:index.php');
}
}
?>