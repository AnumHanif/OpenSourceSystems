<?php
	$servername = "localhost";
        $DBname = "student_db_oss";
        $username = "mySQLadmin";
        $password = "";

        $conn = new mysqli ($servername, $username, $password, $DBname);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		
	}

?>
