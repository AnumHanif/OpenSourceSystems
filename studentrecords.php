<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

$sql = "INSERT INTO 'student' ('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode') VALUES ('20000002', '', '1993-07-28', 'Jess', 'Clark', '36 Woodlands Road','High Wycombe', 'Buckinghamshire', 'England', 'HP12 QST');";
$result = mysqli_query($conn,$sql);

if ($result)
{
	echo "Record has successfully been added";
}

else 
{
	echo "An error occured";
}


}
?>
