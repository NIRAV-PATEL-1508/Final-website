<?php
  session_start();
  if (!isset($_SESSION['username'])){
      header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registerd Data</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/table.css">
    <script>
        $("document").ready(function() {
            $("a.delete").click(function() {
                $(this).parents("tr").fadeOut();;
            });
        });
    </script>
</head>
<div>

    <body>
        <table class="modal-content bg table table-condensed table-striped ">
            <tr id="ROW1">
                <td colspan="7">
                    <h3 style="font-weight: bold;">Registerd Data</h3>
                    <!-- <a href="logout.php" class="btn btn-primary">Logout </a> -->
                </td>
                
                <td style="padding: 20px; text-align: center;">
                <a href="logout.php" class="btn btn-danger">Logout</a>
                <input type="submit" class="btn btn-success w-25" value="Add Record">
            </td>
            </tr>
            <tr class="font sr">
                <td>Sr. no</td>
                <td>Full-Name</td>
                <td>Username</td>
                <td>Password</td>
                <td>DOB</td>
                <td>City</td>
                <td>State</td>
                <td>Action</td>
            </tr>
            <tr id="ROW1" class="tr">
                <td>1</td>
                <td>Krishna Patel</td>
                <td>kpatel@rku.ac.in</td>
                <td>596886</td>
                <td>11/03/2003</td>
                <td>Vapi</td>
                <td>Gujarat</td>
                <td><a href="#"><button type="button" class="btn btn-primary">Edit</button> </a>
                    <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
                
            <tr class="tr" >
                <td>2</td>
                <td>Nirav Patel</td>
                <td>npatel046@rku.ac.in</td>
                <td>123456</td>
                <td>15/08/2002</td>
                <td>Silvassa</td>
                <td>UT OF DNH</td>
                <td><a href="#"><button type="button" class="btn btn-primary">Edit</button> </a>
                    <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
                

            <tr class="tr" id="ROW1">
                <td>3</td>
                <td>Jeel Kavathiya</td>
                <td>jkavathiya300@rku.ac.in</td>
                <td>895676</td>
                <td>xx/yy/2002</td>
                <td>keshod</td>
                <td>Gujarat</td>
                <td><a href="#"><button type="button" class="btn btn-primary">Edit</button> </a>
                    <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr" >
                <td>4</td>
                <td>Krishna Antala</td>
                <td>kantala@rku.ac.in</td>
                <td>445635</td>
                <td>06/08/2002</td>
                <td>Jetpur</td>
                <td>Gujarat</td>
                <td><a href="#"><button type="button" class="btn btn-primary">Edit</button> </a>
                    <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr" id="ROW1">
                <td>5</td>
                <td>Krisha kothiya</td>
                <td>kkothiya@rku.ac.in</td>
                <td>445635</td>
                <td>ab/cd/2002</td>
                <td>Jetpur</td>
                <td>Gujarat</td>
                <td><a href="#"><button type="button" class="btn btn-primary">Edit</button> </a>
                    <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            
        </table>

        <p class="backtosite"> <a href="../../index.html" class="backtosite">Homepage</a></p>

</div>
</body>

</html>