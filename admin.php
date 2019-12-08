<?php
    require_once('functions.php');
    $data = getAllUserList()


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    
</head>
<body>
    <form action="#" method="POST">
        <center>
            <h1>Welcome : Admin</h1>
            <a href="logout.php">Logout</a><br>
            
            search User : 
            <input type="text" name="search" onkeyup = "search(this.value)" />
            <p id="search"></p>

            <script>
            function search(val)
        {
            var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "search.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('key='+val);
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 	document.getElementById('content').innerHTML = this.responseText;					 
					}
				};
        }
    </script>

            <br>
            <br>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                <?php
                for($i=0; $i<count($data); $i++)
                {
            ?>
            <tr>
               <?php
                    echo "<td> <center>". $data[$i]['name']. " </center> </td>";
                    
                    echo "<td> <center>". $data[$i]['contact']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['username']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['password']. " </center> </td>";
                    echo '<td> <center> <form action="deleteUser.php" method="POST">
                    <input type="hidden" name="name" value= '. $data[$i]['name'] .'> 
                    <input type="submit"  name="btnDelete" value="Delete"></form> </center> </td>';
               ?>
            </tr>
            <?php
                }
            ?>
                <tr>
                    
                </tr>
            </table>
        </center>
    </form>
</body>
</html>