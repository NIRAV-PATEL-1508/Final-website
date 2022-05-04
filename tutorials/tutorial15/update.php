<?php
session_start();
require 'connection/connection.php';
$id=$_POST['id'];
// echo $id;

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
$sql = "UPDATE `members` set fullname='$fullname',`firstname` = '$fname',`lastname`='$lname',`email` = '$email',`password`='$password',`contact`='$contact',`birthday`='$dob',`gender`='$gender',`passno`='$pass',`status`='$s',`photo`='$photo' WHERE id= '$id'";
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