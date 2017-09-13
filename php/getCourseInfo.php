<?php
// Check the validation of the username and password
/*
	Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['courseName'])) {
	$courseName = $_POST['courseName'];
} else {
	die("SYSTEM ERROR: wrong course name");
}

$resultArray = Array();

$sql = "SELECT * 
		FROM COURSE
		LEFT JOIN COURSECATEGORY ON  COURSE.CourseNumber = COURSECATEGORY.CcourseNum
		WHERE Name = '$courseName'";

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

