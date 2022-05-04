<?php
require 'connection/connection.php';
session_start();
$id=$_GET['id'];
echo $id;
$sql="UPDATE tbl_ipmp SET is_delete =1 WHERE id= '$id'";
$message= "<p style=color:red;>Data Deleted Successfully!</p>";
$_SESSION['message'] = $message;
$rs = mysqli_query($db , $sql);
if($rs)
{
	header('location:index.php');
}


?>