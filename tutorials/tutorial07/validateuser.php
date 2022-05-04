<?php
  session_start();
  $username =$_POST['username'];
  $password =$_POST['password'];
  if(($username == "nirav1@gmail.com") && ($password == "nirav@123")){
    if(isset($_POST['remember'])){
      setcookie('username',$username,time()+60);
      setcookie('password',$password,time()+60);
    }else{
          setcookie('username',$Username,time());
          setcookie('password',$Password,time());
      
    }
    $_SESSION['username']=$username;
    header("location:index.php");
  }
  else{
    echo '<script type="text/javascript">';
    echo '<script>alert("Email & Password is Incorrect !");</script>';
    echo '</script>';
    header("location:login.php");
  }
?>
