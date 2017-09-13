<?php
// create account from website New Student Registration
/*
	Connecting to MySQL database
*/
include("dbinfo.php");
/*
	Get username
*/
if (isset($_POST['myusername'])) {
	$myusername = $_POST['myusername'];
	$myusername = strtoupper($myusername);
} else {
	die("SYSTEM ERROR: wrong username");
}

/*
	Get password
*/
if (isset($_POST['mypassword'])) {
	$mypassword = $_POST['mypassword'];
} else {
	die("SYSTEM ERROR: wrong password");
}

/* 
	Get GT email
*/
if (isset($_POST['myGTemail'])) {
	$myGTemail = $_POST['myGTemail'];
	$myGTemail = strtoupper($myGTemail);
	$myGTemail = $myGTemail . "@GATECH.EDU";
} else {
	die("SYSTEM ERROR: wrong GTemail");
}

/* 
	Check duplicated username
*/
$select_sql = "SELECT Username FROM USER 
		WHERE Username = '$myusername'";
$result = mysqli_query($link, $select_sql);
$count = mysqli_num_rows($result);
if($count == 1) {
	echo "<script> alert('The username is already registered!') </script>";
	$redirectURL = $_SERVER['HTTP_REFERER'];
	header("Refresh:0;url={$redirectURL}");
	die();
}

/* 
	Check duplicated GT email
*/
$select_sql = "SELECT GTemail FROM USER 
		WHERE GTemail = '$myGTemail'";
$result = mysqli_query($link, $select_sql);
$count = mysqli_num_rows($result);
if($count == 1) {
	echo "<script> alert('The email address is already registered!') </script>";
	$redirectURL = $_SERVER['HTTP_REFERER'];
	header("Refresh:0;url={$redirectURL}");
	die();
}

/* 
	INSERT USER (Username, Password, UserType, GTemail)
*/
$type = 'STU';

$insert_sql = "INSERT INTO USER (Username, Password, UserType, GTemail)
		VALUES ('$myusername', '$mypassword', '$type', '$myGTemail')";

if(mysqli_query($link, $insert_sql)) {
	session_start();
	$_SESSION['myusername'] = $myusername;
	$_SESSION['mypassword'] = $mypassword;
	$_SESSION['myGTemail'] = $myGTemail;
	$_SESSION['type'] = $type;

	$redirectURL = $_SERVER['HTTP_REFERER'];
	$redirectURL = str_replace("stu_registration.php", "stu_mainpage.php", $redirectURL);
	echo "<script> alert('Registration succeed! You are directed to the Student Main Page!') </script>";
	header("Refresh:0;url={$redirectURL}");
} else {
	die ('Unable to insert student account. '. mysqli_error($link));
}
/*
	Close the SQL connection
*/
mysqli_close($link);
?>

