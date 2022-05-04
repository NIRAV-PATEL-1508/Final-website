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
    <title>Insert record</title>
    <script src="jquery-3.6.0.min.js">
    </script>

</head>

<body>

    <div class="container" style="max-width: 100%; width:65%;">
        <form action="insert.php" method="POST" id="form">
            <h2 class="text-center">Enter details</h2>
            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="name-f">Machine_name</label>
                    <input type="text" class="form-control" name='machine_name' id="name-f">
                    
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Process_name</label>
                    <input type="email" class="form-control" name='process_name' id="email">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">Item_name</label>
                    <input type="text" name='item_name' class="form-control" id="pass">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">parameter</label>
                    <input type="text" name='item_name' class="form-control" id="pass">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">Lower_tolerance</label>
                    <input type="text" name='lower_tolerance' class="form-control" id="pass">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">Upper_tolerance</label>
                    <input type="text" name='Upper_tolerance' class="form-control" id="pass">
                </div>

                <div>
                <input type="submit" name="data" id="data" class="btn btn-success float-right col-sm-4 " />
                    <input type="button " value="Go back! " class="btn btn-secondary float-left col-sm-4 " onclick="history.back() ">
                </div>



            </div>
        </form>
    </div>


</body>

</html>