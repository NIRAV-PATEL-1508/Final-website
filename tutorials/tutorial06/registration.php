<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <link rel="stylesheet" href="css/registration.css">
    <title>Create a new account </title>
    <script src="jquery-3.6.0.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#Reg-form').submit(function() {
                var name = $('#name-f').val();
                var username = $('#email').val();
                var password = $('#pass').val();
                var confirm_password = $('#pass2').val();
                var age = $('#age').val();
                var birthday = $('#Dob').val();
                var cou = $('#country').val();
                var sta = $('#state').val();
                var city = $('#city').val();
                var img = $('#pf').val();

                if (name == "") {
                    $('#name-f').after('<span class="error" style="color:red;">Enter your name </span>');
                    return false;
                }


                if (username < 1) {
                    $('#email').after('<span class="error" style="color:red;">Email field is required </span>');
                    return false;
                }
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!regex.test(username)) {
                    $('#email').after('<span class="error" style="color:red;">Email field contain @ symbol </span>');
                    return false;
                }

                if (password == "") {
                    $('#pass').after('<span class="error" style="color:red;">please enter a password </span>');
                    return false;
                } else if (password.length < 8) {
                    $('#pass').after('<span class="error" style="color:red;">Password must be atleast 8 characters. </span>');
                    return false;
                }
                if (confirm_password != password) {
                    $('#pass2').after('<span class="error" style="color:red;">Password did not match </span>');
                    return false;
                }
                if (age == "") {
                    $('#age').after('<span class="error" style="color:red;"> Age field is required</span>');
                    return false;

                }

                if (birthday == "") {
                    $('#Dob').after('<span class="error" style="color:red;"> Dob field is required</span>');
                    return false;

                }
                if (city == "") {
                    $('#city').after('<span class="error" style="color:red;"> city field is required</span>');
                    return false;

                }

                if (sta == "") {
                    $('#state').after('<span class="error" style="color:red;"> State field is required</span>');
                    return false;
                }
                if (cou == "") {
                    $('#country').after('<span class="error" style="color:red;"> Country field is required</span>');
                    return false;
                }




                if (img == "") {
                    $('#pf').after('<span class="error" style="color:red;"> please upload a photo</span>');
                    return false;
                }




            });

        });
    </script>

</head>

<body>

    <div class="container">
        <form action="#" method="post" id="Reg-form">
            <h2 class="text-center">Create a new account</h2>
            <div class="row jumbotron">
                <div class="col-sm-12 form-group">
                    <label for="name-f">Full Name</label>
                    <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter your  name.">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="email">Username</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email.">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">Password</label>
                    <input type="Password" name="password" class="form-control" id="pass" placeholder="Enter your password.">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass2">Confirm Password</label>
                    <input type="Password" name="cnf-password" class="form-control" id="pass2" placeholder="Re-enter your password.">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="text">Age</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Age.">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Date">Date Of Birth</label>
                    <input type="Date" name="dob" class="form-control" id="Dob" placeholder="">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="City">City</label>
                    <input type="address" class="form-control" name="city" id="city" placeholder="Enter your City name.">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="State">State</label>
                    <input type="address" class="form-control" name="State" id="State" placeholder="Enter your state name.">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="country">Country</label>
                    <input type="address" class="form-control" name="country" id="country" placeholder="Enter your country name.">
                </div>
                <div class="col-sm-6 form-group">
                    <label>Upload profile picture</label>
                    <input type="file" class="form-control " id="pf " name="pf ">
                </div>

                <div class="col-sm-12 form-group mb-0 ">
                    <h5>already have an account ? <a href="login.php">Sign In</a></h5>
                    <button class="btn btn-success float-right col-sm-4 ">Submit</button>
                </div>


            </div>
        </form>
    </div>


</body>

</html>