<?php
session_start();
$message =isset($_SESSION['message'])?$_SESSION['message']:"";
unset($_SESSION['message']);
require"connection/connection.php";
$query="select 
            id,
            full_name,
            username,
            password,
            age,
            city,
            state,
            dob
        from
            users
        where
            is_delete = 0";

$result=$db->query($query);
if($result->num_rows > 0){
  
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Registerd Data</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="css/jquery-3.6.0.min.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
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
            <h3 class="backtosite"> <a href="../../index.html" class="btn btn-default">Homepage</a></h3>
            <h3 class="backtosite"> <a href="../table.html" class="btn">Back</a></h3>
            <h3 style="text-align: center;"><?=$message?></h3>
            <table class="table table-condensed table-striped ">
                <tr id="ROW1">
                    <td colspan="7">
                        <h3 style="font-weight: bold;">Registered Data</h3>
                    </td>
                    <td style="padding: 20px; text-align: center;">
                        <!-- <a href="logout.php" class="btn btn-danger">Logout</a> -->
                        <a href="add-record.html"><input type="submit" class="btn btn-success " value="+ Add Record"></a>
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
                <?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
            	<tr id="ROW1" class="tr">
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['full_name'];?></td>
                    <td><?php echo $rows['username'];?></td>
                    <td><?php echo $rows['password'];?></td>
                    <td><?php echo $rows['dob'];?></td>
                    <td><?php echo $rows['city'];?></td>
                    <td><?php echo $rows['state'];?></td>
                    <td><a href="update-form.php?id=<?=$rows['id']?>"><button type="button" class="btn btn-primary">Edit</button> </a>
                        <a href="delete.php?id=<?=$rows['id']?>" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
			<?php
				}
			?>
                
            </table>
    </div>
    </body>
    </html>
<?php
}
else{
    echo'No records found!!';
}
    
    ?>