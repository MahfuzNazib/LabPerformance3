<?php
    session_start();
    require_once('functions.php');
    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];
        $name = getEmpData($username,$password);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emp Home</title>
</head>
<body>
    <form action="#" method="POST">
        <center>
            <h1>Welcome : <?=$username; ?></h1>
            <a href="logout.php">Logout</a>
        </center>
    </form>
</body>
</html>

<?php
    }

    else
    {
        header('location:login.php');
    }
?>