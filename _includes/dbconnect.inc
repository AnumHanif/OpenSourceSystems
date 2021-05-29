<?php
	$servername = "localhost";
        $DBname = "student_db_oss";
        $username = "mySQLadmin";
        $password = "";


	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
