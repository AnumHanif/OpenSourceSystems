<?php
<<<<<<< Updated upstream
	
        //  replace mysqllogin and mysqlpassword with your own
	$conn = mysqli_connect("localhost", "root", "", "OpenSourceSystems");
=======
	//  replace mysqllogin and mysqlpassword with your own
	$conn = mysqli_connect("localhost", "root", "", "student_db_oss");
>>>>>>> Stashed changes

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		
	}

?>
