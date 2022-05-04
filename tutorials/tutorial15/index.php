<?php
session_start();
$message =isset($_SESSION['message'])?$_SESSION['message']:"";
unset($_SESSION['message']);
include "connection/connection.php";

if (!isset($_SESSION['username'])){
    header("location:login.php");
}
$i=0;
$sql="select 
        *
        from
            members where is_delete = 0";

$result=$db->query($sql);
if($result->num_rows > 0){
  
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Registerd Data</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="css/jquery-3.6.0.min.js"></script>
         <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="css/table.css"> -->
        <script>
            $("document").ready(function() {
                $("a.delete").click(function() {
                    $(this).parents("tr").fadeOut();;
                });
            });
        </script>
    </head>


        <body>
           
            <div class="container" style="max-width: 100%; width:90%;"> 
            <h3 style="text-align: center;"><?=$message?></h3>
            <table class="table table-condensed table-striped " border="2px">
                <tr id="ROW1">
                    <td colspan="10">
                        <h3 style="font-weight: bold;">Registerd Data</h3>
                    </td>
                    <td style="padding: 0; text-align: right;">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                        <a href="add-record.html"><input type="submit" class="btn btn-success " value="+ Add Record"></a>
                    </td>
                </tr>
                <tr class="font sr">
                    <td>ID</td>
                    <td>Full-Name</td>
                    <!-- <td>First-Name</td>
                    <td>Last-Name</td> -->
                    <td>Email</td>
                    <td>Password</td>
                    <td>Contact</td>
                    <td>DOB</td>
                    <td>Gender</td>
                    <td>pass-no</td>
                    <td>Status</td>
                    <td>Photo</td>
                    <td>Action</td>
                </tr>
                <?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
            	<tr id="ROW1" class="tr">
                    <td><?php echo ++$i;?></td>
                    <td><?php echo $rows['fullname'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['password'];?></td>
                    <td><?php echo $rows['contact'];?></td>
                    <td><?php echo $rows['birthday'];?></td>
                    <td><?php echo $rows['gender'];?></td>
                    <td><?php echo $rows['passno'];?></td>
                    <td><?php echo $rows['status'];?></td>
                    <td><?php echo $rows['photo'];?></td>
                    <td><a href="update-form.php?id=<?=$rows['id']?>"><button type="button" class="btn btn-primary">Edit</button> </a>
                        <a href="delete.php?id=<?=$rows['id']?>" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
                       
                </tr>
			<?php
				}
                
			?>
                
            </table>
    </div>
    </div>
    </body>
    </html>
<?php
}
else{
    echo'No records found!!';
}
    
    ?>