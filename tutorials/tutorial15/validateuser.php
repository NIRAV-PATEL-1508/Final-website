<?php
  session_start();
  require "connection/connection.php";
  $sql="select * from user";

$result=$db->query($sql);

  $username =$_POST['username'];
  $password =$_POST['password'];

  while($rows=$result->fetch_assoc())
  {
  if(($username == $rows['username']) && ($password ==$rows['password'] ))
   {
     $_SESSION['username']=$username;
      header("location:index.php");
  }
  else{
      header("location:login.php");
  }
}
?>
