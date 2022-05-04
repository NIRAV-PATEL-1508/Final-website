<?php
$db = new mysqli("localhost",'root','','tutorial09');
if($db->connect_errno){
    echo $db->connect_error;
}
?>
