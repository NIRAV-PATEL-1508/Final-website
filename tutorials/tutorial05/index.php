<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <title>Select box</title>
    <!-- <script text="text/javascript" >
        $(document).ready(function(){
            $("#form").validate({

            })
        });
    </script> -->
</head>
<body>
<div class="container">
    <form action="month.php" method="post" id="form">
        <h2>Select Month number :</h2>
        <div class="form-control mt-2 col-sm-12">
        <select id="months" name="number" required>
        <option value="">Select a Month no</option>
        <option value="1">Month no 1</option>
        <option value="2">Month no 2</option>
        <option value="3">Month no 3</option>
        <option value="4">Month no 4</option>
        <option value="5">Month no 5</option>
        <option value="6">Month no 6</option>
        <option value="7">Month no 7</option>
        <option value="8">Month no 8</option>
        <option value="9">Month no 9</option>
        <option value="10">Month no 10</option>
        <option value="11">Month no 11</option>
        <option value="12">Month no 12</option>
      </select>
        </div>
        <div class="form-group mt-2">
            <input type="submit" class="btn btn-primary" value="Get month">
        </div>
      
      
    </form>
</div>
</body>
</html>