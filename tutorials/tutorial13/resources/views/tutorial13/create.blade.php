<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <link rel="stylesheet" href="css/registration.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>Add Records</title></head>
    <div class="container">
        <form  action="/tutorial13" method="POST">
            @csrf
            <h2 class="text-center">Enter details</h2>
            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="name-f">Title</label>
                    <input type="text" class="form-control" name="title"  placeholder="Enter name of event">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="sdesc">Small desc</label>
                    <input type="text" class="form-control" name="small_desc"  placeholder="Enter small description">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="ddesc">Detail desc</label>
                    <input type="text" class="form-control" name="detail_desc"  placeholder="Enter detail description">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="gid">Gallery id</label>
                    <input type="text" class="form-control" name="gid"  placeholder="Enter gallery id">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="gid">Photo</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="col-sm-12 form-group mb-0 ">
                    <!-- <h5>already have an account ? <a href="login.html">Sign In</a></h5> -->
                    <input type="submit" name="data" id="data" class="btn btn-success float-right col-sm-4 " />
                    <input type="button" value="Go back!" class="btn btn-secondary float-left col-sm-4 " onclick="history.back()">
                </div>


            </div>
        </form>
    </div>

