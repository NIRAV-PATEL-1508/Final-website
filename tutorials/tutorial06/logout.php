<?php
  session_start();
  unset($_SESSION['username']);
  $_SESSION['logout']= "log-out successfully";
  header("location:login.php");
 
?>