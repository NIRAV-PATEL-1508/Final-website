<?php
// $db = new mysqli("localhost",'root','','w3resour_hr');
// if($db -> connect_errno)
// {
//     echo $db->connect_error;
// }

class dbconnect{
    private $host ='localhost';
    private $dbname ='w3resour_hr';
    private $user ='root';
    private $pass ='';

    public function connect()
    {
        try{
            $conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbname,$this->user,$this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo 'database error:' . $e->getMessage();
        }
    }
}

?>