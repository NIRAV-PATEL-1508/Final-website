<?php
session_start();
require 'connection/connection.php';
$id=$_POST['id'];
// echo $id;

if(isset($_POST['data']))
{

// database insert SQL code
$sql = "UPDATE ";
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