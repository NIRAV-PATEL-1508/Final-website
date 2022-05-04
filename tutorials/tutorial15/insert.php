<?php
require 'connection/connection.php';
if(isset($_POST['data']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$fullname = "$fname $lname";
	$email = $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$dob = $_POST['dob'];
	$gender= $_POST['gender'];
	$pass = $_POST['pno'];
	$s =$_POST['s'];
	$photo = $_POST['photo'];

// database insert SQL code
$sql = "INSERT INTO `members` (`id`, `fullname`, `firstname`, `lastname`, `email`, `password`, `contact`, `birthday`, `gender`, `passno`, `registerby`, `status`, `photo`, `timestemp`, `is_delete`) VALUES  (NULL, '$fullname','$fname', '$lname','$email','$password','$contact','$dob','$gender','$pass','regular','$s','$photo',current_timestamp(), '0')";
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