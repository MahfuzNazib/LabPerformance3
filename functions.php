<?php
    require_once('db.php');

    function register($name,$contact,$username,$password)
    {
        $conn = getConnection();
        $sql = "INSERT INTO user VALUES ('{$name}','{$contact}','{$username}','{$password}')";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getLogin($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `user` WHERE username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    function getEmpData($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT name FROM `user` WHERE username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $name = mysqli_fetch_assoc($result);

        return $name;
    }

    function getAllUserList()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    function deleteUser($name)
    {
        $conn = getConnection();
        $sql = "DELETE FROM user WHERE name='{$name}'";
        $result = mysqli_query($conn,$sql);

        return $result;
    }
    

   
?>