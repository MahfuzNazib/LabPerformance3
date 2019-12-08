<?php
    require_once('functions.php');

    if(isset($_POST['reg']))
    {

    
        $name = $_POST['empname'];
        $contact = $_POST['empcontact'];
        $username = $_POST['empUsername'];
        $password = $_POST['emppass'];

        $reg = register($name,$contact,$username,$password);
        
        if($reg)
        {
            echo "Registratiopn Complete";
        }
        else
        {
            echo "Not Registered";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
    <center>
        Emp Name : 
        <input type="text" name="empname" id="name"><br><br>
        
        Contact : 
        <input type="text" name="empcontact" id="contact"><br><br>

        Username : 
        <input type="text" name="empUsername" id="username"><br><br>

        Password : 
        <input type="password" name="emppass" id="password"><br><br>

        <input type="submit" name="reg" id="register" value="Register">
        <a href="login.php">Go to Login</a>
    </center>
    </form>
</body>
</html>