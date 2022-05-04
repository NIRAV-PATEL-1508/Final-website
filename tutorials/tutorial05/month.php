<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <title>Months</title>
</head>
<body>
    <div class="container">
    <?php
    $month = $_REQUEST['number'];
    ?>
     <h2>Select a number :</h2>
        <div class="form-group mt-2 ">
        <select id="months" name="number" class="form-control">
        <option <?= ($month ==1 ) ? "selected":""?> >January</option>
        <option <?= ($month == 2) ? "selected":""?> >Febuary</option>
        <option <?= ($month == 3) ? "selected":""?> >March </option>
        <option <?= ($month == 4) ? "selected":""?> >April</option>
        <option <?= ($month ==5 ) ? "selected":""?> >May</option>
        <option <?= ($month == 6) ? "selected":""?> >June</option>
        <option <?= ($month == 7) ? "selected":""?> >July</option>
        <option <?= ($month == 8) ? "selected":""?> >August</option>
        <option <?= ($month == 9) ? "selected":""?> >September</option>
        <option <?= ($month == 10)? "selected":"" ?> >October</option>
        <option <?= ($month == 11)? "selected":"" ?> >November</option>
        <option <?= ($month == 12)? "selected":"" ?> >December</option>
      </select>
        </div>
        <div class="form-group mt-2">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
        </div>
</body>
</html>