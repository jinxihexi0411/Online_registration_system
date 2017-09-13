<?php
/*
	Define the configuration of database
*/
$username = 'cs4400_Team_71';
$password = 'mzFXntX2';
$host = 'academic-mysql.cc.gatech.edu';
$database  = 'cs4400_Team_71';

$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>

