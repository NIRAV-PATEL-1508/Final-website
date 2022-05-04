<?php
    session_start();
    $message =isset($_SESSION['logout-message'])?$_SESSION['logout-message']:"";
    unset($_SESSION['logout-message']);
    $username=isset($_COOKIE['username'])?$_COOKIE['username']:"";
    $password=isset($_COOKIE['password'])?$_COOKIE['password']:"";
    $remember=isset($_COOKIE['username'])?"checked":"";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        
    </script>
</head>

<body>
    
    <div class="container">
        <h2 class="text-success"><?= $message ?></h2>
        <h2>Login Form</h2>
        <form action="validateuser.php" method="POST" id="clientform">
            <!-- <div class="form-group"> -->
                <label for="email">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="nirav1@gmail.com" value="<?=$username;?>" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="nirav@123" value="<?=$password;?>" name="password" >
            </div>
            <div class="form-group">
            <input type="checkbox"  id="remember"  name="remember" <?=$remember;?> >
                <label for="remember">remember me</label>
                
            </div>
            <div class="form-group mt-3">
                <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                <button type="submit" id="btnReSubmit" class="btn btn-primary">Re-Submit</button>
                <a href="registration.php" class="btn btn-warning">Not a user? Register from here</a>
            </div>
        </form>
    </div>
</body>

</html>