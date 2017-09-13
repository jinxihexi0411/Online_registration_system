<?php
// Check the validation of the username and password
/*
	Connecting to MySQL database
*/
include("dbinfo.php");
if (isset($_POST['userName'])) {
	$userName = $_POST['userName'];
} else {
	die("SYSTEM ERROR: wrong user name");
}

$resultArray = Array();
$sql = "SELECT * 
		FROM APPLY
		WHERE ApplyUsername = '$userName'";

if ($result = mysqli_query($link,$sql)){
	 while ($row = mysqli_fetch_assoc($result)) {
	 	$resultArray[] = $row;
	 }
}

echo json_encode($resultArray);

/*
	Close the SQL connection
*/
mysqli_close($link);
?>