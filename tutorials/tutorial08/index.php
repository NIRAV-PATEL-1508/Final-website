<?php 
session_start();
if(isset($_SESSION['message']) && ($_SESSION['message'])){
    echo'<p style="text-align:center;">'.$_SESSION['message'].'</p>';
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
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
    <form action="file2.php" method="POST" id="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-control mb-2">Upload picture</label>
       <input type="file" name="uploadedfile" class="from-control" id="uploadedfile" />
       <input type="submit" name="submit" id="submit" class="btn btn-primary mt-2" value="Upload" />
       </div>
    </form>
</div>
</body>
</html>