<?php
    function getConnection()
    {
		$conn = mysqli_connect('localhost', 'root', '', 'lab');
		return $conn;
	}
?>