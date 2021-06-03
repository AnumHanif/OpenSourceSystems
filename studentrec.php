<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

$sql= "INSERT INTO ‘student’ (‘studentid’, ‘password’, ‘dob’, ‘firstname’, ‘lastname’, ‘house’, ‘town’, ‘county’, ‘country’, ‘postcode’) 
VALUES ('20000000', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3LS', '1974-11-10', 'Anum ', 'Hanif', '48 Tory Lane', 'High Wycombe', 
'Bucksinghamshire', 'England', 'HP11 3ST')";
$result = mysqli_query($conn,$sql);

$sql= "INSERT INTO ‘student’ (‘studentid’, ‘password’, ‘dob’, ‘firstname’, ‘lastname’, ‘house’, ‘town’, ‘county’, ‘country’, ‘postcode’) 
VALUES ('3000000', 'ST1', '1965-03-31', 'Kennedy', 'White', '54 Pebble Lane', 'High Wycombe ', 'Buckinghamshire', 'England', 'HP12 3WQ')";
$result = mysqli_query($conn,$sql);

$sql= "INSERT INTO ‘student’ (‘studentid’, ‘password’, ‘dob’, ‘firstname’, ‘lastname’, ‘house’, ‘town’, ‘county’, ‘country’, ‘postcode’) 
VALUES ('40000000', 'ST2', '1989-07-21', 'Hillary ', 'Edwards', '23 Ash Lane', 'High Wycombe', 'Buckinghamshire', 'England', 'HP12 4SQ')";
$result = mysqli_query($conn,$sql);

$sql= "INSERT INTO ‘student’ (‘studentid’, ‘password’, ‘dob’, ‘firstname’, ‘lastname’, ‘house’, ‘town’, ‘county’, ‘country’, ‘postcode’) 
VALUES ('50000000', 'ST3', '1999-09-30', 'Angela', 'Richards', '64 Layton Place', 'High Wycombe', 'Buckinghamshire', 'England', 'HP13 7SR')";
$result = mysqli_query($conn,$sql);

$sql= "INSERT INTO ‘student’ (‘studentid’, ‘password’, ‘dob’, ‘firstname’, ‘lastname’, ‘house’, ‘town’, ‘county’, ‘country’, ‘postcode’) 
VALUES ('60000000', 'ST4', '2000-08-03', 'Anthony', 'Green', '89 Gorges Lane ', 'High Wycombe', 'Buckinghamshire', 'England', 'HP14 6HK')";
$result = mysqli_query($conn,$sql);

?>

