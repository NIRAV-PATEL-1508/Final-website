<?php
session_start();
$message =isset($_SESSION['message'])?$_SESSION['message']:"";
unset($_SESSION['message']);
include "connection/connection.php";
// $_SESSION['a']="NIRAV";
$sql = "select ip.id as id, m.machine_name,p.process_name,i.item_name,ip.parametername,CONCAT(ip.lower_tolerance,' TO ',ip.upper_tolerance) as measuring_tolerance,CONCAT(ip.lower_tolerance,' TO ',ip.upper_tolerance) as Actual_tolerance from tbl_ipmp ip  join tbl_machine m On ip.machine_id=m.id  JOIN tbl_process p on ip.process_id=p.id  JOIN tbl_items i on ip.item_id=i.id WHERE ip.is_delete=0 AND ip.lower_tolerance > 0 ORDER BY m.machine_name ASC,ip.parametername ASC";

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
    <div>

        <body>
        <div class="container" style="max-width: 100%; width:auto;">

            <table class="table table-condensed table-striped " border="2px">
                
                    <div class="form-group">
                        <h3 style="font-weight: bold;" ><i>Registerd Data</i></h3>
                        <h3 style="padding:  0; text-align: right;"> <a href="add-record.php"><input type="submit" class="btn btn-outline-success" value="+ Add Record"></a></h3>
                        </div>
                  
                
                <tr class="font sr">
                    <!-- <th>ip id</th> -->
                    <th>machine_name</th>
                    <th>process_name</th>
                    <th>item_name</th>
                    <th>parametername</th>
                    <th>measuring_tolerance</th>
                    <th>Actual_tolerance</th>
                    <th>Action</th>
                </tr>
                <?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
            	<tr id="ROW1" class="tr">
              
                    <td><?=$rows['machine_name']?></td>
                    <td><?=$rows['process_name']?></td>
                    <td><?=$rows['item_name']?></td>
                    <td><?=$rows['parametername']?></td>
                    <td><?=$rows['measuring_tolerance']?></td>
                    <td><?=$rows['Actual_tolerance']?></td>
                    <td><a href="update-form.php?id=<?=$rows['id']?>"><button type="button" class="btn btn-outline-primary">Edit</button> </a>
                        <a href="delete.php?id=<?=$rows['id']?>" class="delete"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
                 
                       
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