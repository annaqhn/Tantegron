<?php

//Set up variables
	$server = "localhost";
	$user = "root";
	$pw = "";
	$db = "test";

    // Create connection
	$conn = new mysqli($server, $user, $pw, $db);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
?>