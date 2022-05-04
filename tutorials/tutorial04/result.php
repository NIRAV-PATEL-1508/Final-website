<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <link rel="stylesheet" href="css/result.css">
    
    <title>Simple Interest</title>
</head>
<div class="container ">
<h2 class="container-2">Answer</h2>
<div class="form-control">
   
<?php 
$principle =$_REQUEST['principle']  ;
$roi = $_REQUEST['roi'];
$noy = $_REQUEST['noy'];
$amount = ($principle*$roi*$noy);
if($principle !=0 && $roi != 0 && $noy!= 0 ){
    echo "Simple interest will be :",$amount;
}else{
    print("invalid input");
}
?>
</div>
<div class="form-group mt-3 mb-2">
<label for="back" ><a href="index.php" class="btn btn-primary">Calculate Again !!!</a></label>
<label for="back"><a href="../../index.html" class="btn btn-danger">Home</a></label>
</div>

</div>
<body>

</body>

</html>