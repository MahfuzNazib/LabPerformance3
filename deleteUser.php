<?php
    require_once('functions.php');
    if(isset($_POST['btnDelete']))
    {
        $name = $_POST['name'];

        $data = deleteUser($name);
        if($data)
        {
            echo "Successfully Deleted";
        }
        else
        {
            echo "Not Delete";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <a href="admin.php">Go Home</a>
    </center>
</body>
</html>