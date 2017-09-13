<?php
// update acount for student

//Connecting to MySQL database
include("dbinfo.php");

// get Year
if (isset($_POST['myyear'])) {
	$myyear = $_POST['myyear'];
} else {
	die("SYSTEM ERROR: wrong year");
}

// get Major
if (isset($_POST['mymajor'])) {
	$mymajor = $_POST['mymajor'];
} else {
	die("SYSTEM ERROR: wrong major");
}

session_start();
$myusername = $_SESSION['myusername'];
//update the student profile
$sql = "UPDATE USER
 		SET Year='$myyear', SMajorName='$mymajor'
 		WHERE Username = '$myusername';";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

$redirectURL = $_SERVER['HTTP_REFERER'];
$redirectURL = str_replace("stu_editprofile.php", "stu_mainpage.php", $redirectURL);
echo "<script> alert('Update succeed! You are directed to main page!') </script>";
header("Refresh:0;url={$redirectURL}");
?>