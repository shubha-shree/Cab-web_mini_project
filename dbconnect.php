<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cab";
	//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error)
	{
		die("Error message: ".$conn->connect_error);
	}


?>