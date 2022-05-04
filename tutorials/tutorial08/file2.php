
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 08</title>
</head>
<body>
<?php

session_start();
$message = '';
if (isset($_POST['submit']) && $_POST['submit']=='Upload')
{
    if(isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error']== UPLOAD_ERR_OK)
    {
        $fileTmpPath = $_FILES['uploadedfile']['tmp_name'];
        $filename = $_FILES['uploadedfile']['name'];
        $filesize = $_FILES['uploadedfile']['size'];
        $filetype = $_FILES['uploadedfile']['type'];
        $filecomp = explode('.',$filename);
        $fileext = strtolower(end($filecomp));

        $allowedfilext = array('jpg','png','svg','bmp','jpeg');
        if(in_array($fileext,$allowedfilext)){
            $uploaddir = 'uploads/';
            $dest = $uploaddir.$filename;
            if(move_uploaded_file($fileTmpPath,$dest)){
                $message= "<p style=color:green;>File Uploaded Successfully!</p>";
            }
            else{
                $message= "<p style=color:red;>There is internal file upload error.</p>";
            }
        }
        else{
            $message= "<p style=color:red;>Allowed extensions are jpg,png,svg,bmp,jpeg</p>";
        }
    }
    else{
        $message= "<p style=color:red;>There is an error in file upload.</p>";
    }
}
else{
}
$_SESSION['message']=$message;
header('location:index.php');




?>
</body>
</html>