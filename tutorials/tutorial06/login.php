<?php
session_start();
$message =isset($_SESSION['logout'])?$_SESSION['logout']:" ";
unset($_SESSION['logout']);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" type="text/css" href="css/Login.css">


        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="jquery-3.6.0.min.js">
        </script>
        <script>
            $(document).ready(function() {
                $('#Login-form').submit(function() {
                    var username = $('#username').val();
                    var password = $('#password').val();

                    if (username == "") {
                        $('#username').after('<span class="error" style="color:red;">Enter your username </span>');
                        return false
                    }
                    if (password == "") {
                        $('#password').after('<span class="error" style="color:red;">password required </span>');
                        return false
                    }



                });
            });
        </script>
    </head>

    <body>
        <div class="loginBox">
        <h3 ><?= $message ?></h3>
            <h2>Log In Here</h2>
            <form action="validateuser.php" method="post" id="Login-form">
                <p>Username</p>
                <input type="text" name="username" id="username" placeholder="Enter your Email" value="nirav1@gmail.com">
                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Enter your password" value="nirav@123">
                <input type="submit" name="" id="login" value="LOGIN">
                <h3> <a href="#" class="txt2">Forgot Password?</a> </h3>
                <h4>Create account? <a class="txt2" href="registration.php">Sign Up</a></h4>
            </form>
        </div>
    </body>

    </html>