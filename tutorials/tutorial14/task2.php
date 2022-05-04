
<html>
    <head>
     <title>User Data</title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
     body { 
           height: 100%;  
           display: flexbox;  
           justify-content: center;  
           align-items: center;  
           padding: 10px;  
           background-color: #0f0f0a;   
      } 

     .modal-content { 
          margin: 5% auto 15% auto; 
          width: 80%; 
          border: 8px solid whitesmoke; 
     } 

     .font {
          font-weight: bold;
     }

     .bg {
          background-color: while;
          color: #1d1a1a;
     }

     .sr {
          background-color: #0f0f0a;
          text-align: center;
          color: whitesmoke;
     }

     .tr {
          text-align: center;
     }

      table tr#ROW1 { 
           background-color: black; 
           background-color: white; 
     } 
     </style> 
</head>
<div>

     <body>
          <table class="modal-content bg table table-condensed table-striped ">
               <tr id="ROW1"><td colspan="8">
                    <h3 style="font-weight: bold;">Task 2</h3>
                </td>
            </tr>

               <?php
require ("connection.php");
$db = new dbconnect;
$conn = $db->connect();

$sql = "SELECT department_name AS 'Department Name', 
COUNT(*) AS 'No of Employees' 
FROM departments 
INNER JOIN employees 
ON employees.department_id = departments.department_id 
GROUP BY departments.department_id, department_name 
ORDER BY department_name;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$departments = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r($departments);

?>
               <tr class="font sr">
                    <td>Department Name</td>
                    <td>No of Employees</td>
                    

               </tr>
               <?php
               foreach ($departments as $department)
               {
                   echo "<tr>
                   
                   <td>".$department['Department Name']."</td>
                   <td>".$department['No of Employees']."</td>
                   
                   </tr>";
               } 
               ?>


               

          </table>



</div>
</body>

</html>