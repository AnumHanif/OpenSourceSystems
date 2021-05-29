<?php
	$servername = "localhost";
$DBname = "studentdatabaseoss";
$username = "mySQLadmin";
$password = "studentOSS";


	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
