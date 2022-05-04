
<?php
$db = new mysqli("localhost",'root','','tutorial11');
if($db -> connect_errno)
{
    echo $db->connect_error;
}

?>