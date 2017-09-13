<?php
// Check the completeness of student profile
/*
	Connecting to MySQL database
*/
include("dbinfo.php");

/*
	Get username
*/
session_start();
$myusername = $_SESSION['myusername'];

/*
	Check Year, SMajorName from User
*/

$sql = "SELECT Year, SMajorName FROM USER 
    WHERE Username = '$myusername'";

$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$row = mysqli_fetch_row($result);
if($row[0] == NULL || $row[1] == NULL) {
  echo "<script> alert('Infomation is incomplete! Please update.') </script>";
  // $redirectURL = $_SERVER['PHP_SELF'];
  // $redirectURL = str_replace("php\checkInfoComplete.php", "page\stu_editprofile.php", $redirectURL);
  $redirectURL = 'stu_editprofile.php';
  header("Refresh:0;url={$redirectURL}");
  die();
}

mysqli_close($link);
?>

