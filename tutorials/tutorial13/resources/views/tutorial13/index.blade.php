<?php
$i=0?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{-- <style>
    .container mt-5{
        max-width: 100%;
        width: 90%;
    } --}}

</style>
</head>
<body>
<div class="container mt-5" style="width: 90%; max-width:100%;">
    <table class="table table-striped table-light" border="2px">
        <thead>
            <tr id="ROW1">
                <td colspan="6">
                    <h3 style="font-weight: bold;">Registerd Data</h3>
                </td>
                <td style=" text-align: center;">
                    <!-- <a href="logout.php" class="btn btn-danger">Logout</a> -->
                    <a href="/tutorial13/create"><input type="submit" class="btn btn-success " value="+ Add Record"></a>
                </td>
            </tr>
          <tr>
            <th width="70px" >Sr No.</th>
            <th >Title</th>
            <th >Small_desc</th>
            <th >Detail_desc</th>
            <th >Gallery id</th>
            <th >Photo url</th>
            <th width="180px" >Action</th>

          </tr>
        </thead>

            @foreach ($gd_event as $user )

            <tr>
            <td>{{++$i}}</td>
            <td>{{$user->title}}</td>
            <td>{{$user->small_desc}}</td>
            <td>{{$user->detail_desc}}</td>
            <td>{{$user->galleryid}}</td>
            <td>{{$user->photo_url}}</td>
            <td><a href="/tutorial13/{{$user->id}}/delete"><button type="button" class="btn btn-danger">Delete</button> </a>
                <a href="/tutorial13/{{$user->id}}/edit"><button type="button" class="btn btn-info">Edit</button> </a></td>


        </tr>
            @endforeach

    </table>

</div>
</body>
</html>
