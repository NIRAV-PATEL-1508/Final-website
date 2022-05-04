<?php
require 'connection/connection.php';
session_start();
$id=$_GET['id'];

$sql="UPDATE users SET is_delete =1 WHERE id= '$id'";
$message= "<p style=color:red;>Data Deleted Successfully!</p>";
$_SESSION['message'] = $message;
$rs = mysqli_query($db , $sql);
if($rs)
{
	header('location:index.php');
}


?>