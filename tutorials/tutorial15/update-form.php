<?php
session_start();
require 'connection/connection.php';
$id= $_REQUEST['id'];
$sql="select  * from members where id = $id";

    $result=$db->query($sql);
    $rows=$result->fetch_assoc();
            


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <title>UPDATE</title>
    <script src="jquery-3.6.0.min.js">
    </script>
   

</head>

<body>

    <div class="container">
        <form action="update.php" method="POST" id="form">
        <h2 class="text-center">Update details</h2>
            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="name-f">First Name</label>
                    <input type="text" class="form-control" name="fname" id="name-f" value="<?=$rows['firstname'];?>">
                    <input type="hidden" name="id" value="<?=$rows['id'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name-l">Last Name</label>
                    <input type="text" class="form-control" name="lname" value=" <?=$rows['lastname'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Username</label>
                    <input type="email" class="form-control" name="username" id="email" value=" <?=$rows['email'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">Password</label>
                    <input type="Password" name="password" class="form-control" value=" <?=$rows['password'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="text">Contact</label>
                    <input type="text" class="form-control" name="contact" id="age" value=" <?=$rows['contact'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Date">Date Of Birth</label>
                    <input type="Date" name="dob" class="form-control" value=" <?=$rows['birthday'];?>">
                </div>

                <div class="col-sm-6 form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" name="gender" value=" <?=$rows['gender'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label>Pass-no</label>
                    <input type="text" class="form-control" name="pno" value=" <?=$rows['passno'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="s" value=" <?=$rows['status'];?>">
                </div>
                <div class="col-sm-6 form-group">
                    <label>Photo</label>
                    <input type="file" class="form-control" name="photo" >
                </div>


                <div class="col-sm-12 form-group mb-0 ">
                    <!-- <h5>already have an account ? <a href="login.html">Sign In</a></h5> -->
                    <input type="submit" name="data" id="data" class="btn btn-success float-right col-sm-4 " />
                    <input type="button" value="Go back!" class="btn btn-secondary float-left col-sm-4 " onclick="history.back()">
                </div>


            </div>



            
        </form>
    </div>


</body>
</html> 
