<?php 

	$servername = "localhost";
	$username = "root";
	$password = "pass123";
	$db = 'projekti_web';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
?>