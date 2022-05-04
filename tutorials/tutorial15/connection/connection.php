
<?php
$db = new mysqli("localhost",'root','','clubuvdb');
if($db -> connect_errno)
{
    echo $db->connect_error;
}

?>