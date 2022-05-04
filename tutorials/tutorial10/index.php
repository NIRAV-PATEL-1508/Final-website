<?php
require "connection/connection.php";
$query = "select
            id,
            machine_name,
            description
        from
            tbl_machine
        where
            is_delete = 0 
        order by
            machine_name desc
        limit 
               21,20";

// $query = "SELECT * FROM tbl_machine ORDER BY id";
$result = $db->query($query);
if($result->num_rows > 0)
{
?>
<html>
<head>
  
    <title>Tutorial 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
            $("document").ready(function() {
                $("a.delete").click(function() {
                    $(this).parents("tr").fadeOut();;
                });
            });
        </script>
    
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
    <body>
        <table id="example" class=" table table-stripped ">
        <tr>
            <th style="text-align:center;">ID</th>
            <th style="text-align:center;">MACHINE NAME</th>
            <th style="text-align:center;">DESCRIPTION</th>
            <th style="text-align:center;">Edit</th>
            <th style="text-align:center;">delete</th>
        </tr>
    <?php
    while($row = $result->fetch_assoc())
    {
        echo "<tr style='text-align:center;' ><td>".$row["id"]."</td><td>".$row["machine_name"]."</td><td>".$row["description"]." </td>  <td><input name='edit' type='button'class='btn btn-warning' id='edit' value='edit'></td>
        <td><aclass='delete'><button type='button' class='btn btn-danger'>Delete</button></a></td></tr>";
    }
    echo "</table>";
    ?>
        </table>
        
    </body>
</html>
<?php
}
else
{   
    echo "No Records Found !";
}
?>