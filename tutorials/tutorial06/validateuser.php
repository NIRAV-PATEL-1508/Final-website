<?php
  session_start();
  $username =$_POST['username'];
  $password =$_POST['password'];
  if(($username == "nirav1@gmail.com") && ($password == "nirav@123"))
   {
     $_SESSION['username']=$username;
      header("location:index.php");
  }
  else{
      header("location:login.php");
  }
?>
