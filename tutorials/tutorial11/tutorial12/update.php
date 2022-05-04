<?php
session_start();
require 'connection/connection.php';
$id=$_SESSION['id'];


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
$sql = "UPDATE `users` set `full_name`= '$name',`username` = '$user',`password`='$pass',`dob`='$dob',`city`='$city',`state`='$state',`country`='$country' WHERE id= '$id'";
$message= "<p style=color:orange;>Data Updated Successfully!</p>";
$_SESSION['message'] = $message;
// insert in database 
$rs = mysqli_query($db, $sql);
if($rs)
{
	header('location:index.php');
}
}
?>