<?php
// create account from website New Student Registration
/*
	Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['courseName'])) {
  $courseName = $_POST['courseName'];
} else {
  die("SYSTEM ERROR: wrong courseName name");
}

if (isset($_POST['courseName'])) {
  $courseName = $_POST['courseName'];
} else {
  die("SYSTEM ERROR: wrong courseName name");
}

if (isset($_POST['courseNumber'])) {
  $courseNumber = $_POST['courseNumber'];
} else {
  die("SYSTEM ERROR: wrong courseNumber name");
}

if (isset($_POST['instructorName'])) {
  $instructorName = $_POST['instructorName'];
} else {
  die("SYSTEM ERROR: wrong instructorName name");
}

if (isset($_POST['designationName'])) {
  $designationName = $_POST['designationName'];
} else {
  die("SYSTEM ERROR: wrong designationName name");
}

if (isset($_POST['estimateNumStu'])) {
  $estimateNumStu = $_POST['estimateNumStu'];
} else {
  die("SYSTEM ERROR: wrong estimateNumStu name");
}

if (isset($_POST['category'])) {
	$categorys = $_POST['category'];
} else {
  die("SYSTEM ERROR: wrong category name");
}

$sql =  "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDName)
      VALUES ('$courseNumber', '$courseName', '$instructorName', '$estimateNumStu',  '$designationName')";
if (!mysqli_query($link,$sql)) {
	echo("Error description: " . mysqli_error($link));
} else {
	echo "good";
	foreach($categorys as $category){
		$sql =  "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
				VALUES ('$courseNumber','$category')";
		mysqli_query($link,$sql);
  	}
}

/*
	Close the SQL connection
*/
mysqli_close($link);
?>
