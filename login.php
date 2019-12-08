<?php
    session_start();
    require_once('functions.php');

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = getLogin($username,$password);
        if($login)
        {
            $_SESSION['Username'] = $username;
            $_SESSION['Password'] = $password;

            header('location:empHome.php');
        }

        elseif($username == "Admin" && $password == "admin")
        {
            header('location:admin.php');
        }
        else
        {
            echo "Invalid Username or Password!";
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
<form action="#" method="POST">
    <center>
        username : 
        <input type="text" name="username" id="uname"> <br><br>

        Password : 
        <input type="password" name="password" id="pass"> <br><br>

        <center>
            <input type="submit" name="login" value="Login"> <br>
            <a href="reg.php">Create Account</a>
        </center>
    </center>
    </form>
</body>
</html>