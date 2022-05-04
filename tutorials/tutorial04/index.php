<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <link rel="stylesheet" href="css/index.css">
    
    <title>Simple Interest</title>
</head>

<body>
<div class="container">
    <form action="result.php" method="post">
        <h2 >SIMPLE INTEREST</h2>
            <div class="form-group mt-2">
            <label for="principle">Principle amount :</label>
            <input type="number" class="form-control" name="principle" value="0">
        </div>
        
        <div class="form-group mt-2">
            <label for="roi">Rate of interest :</label>
            <input type="number" class="form-control" name="roi" value="0">
        </div>
        <div class="form-group mt-2">
            <label for="roy">Number of years :</label>
            <input type="number" class="form-control" name="noy" value="0">
        </div>
        <div class="form-group mt-2">
            <input type="submit" class="btn " value="Calculate">
            <input type="reset" class="btn " value="Reset">
        </div>
        
    </form>
</div>
</body>

</html>