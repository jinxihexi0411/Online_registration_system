<?php
// Check the validation of the username and password
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
	Get username and password from database
*/
$sql = "SELECT Username, Password, UserType FROM USER 
		WHERE Username = '$myusername' AND Password = '$mypassword'";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$count = mysqli_num_rows($result);
$row = mysqli_fetch_row($result);

if($count == 1) {
	session_start();
	$_SESSION['myusername'] = $myusername;
	$_SESSION['mypassword'] = $mypassword;

	$type = $row[2];
	$_SESSION['type'] = $type;

	switch($type) {
		case "STU":
			$redirectURL = '../page/stu_mainpage.php';
			// $redirectURL = $_SERVER['HTTP_REFERER'] . 'page/stu_mainpage.php';
			echo "<script> alert('Welcome back!') </script>";
			header("Refresh:0;url={$redirectURL}");
			break;
		case "AD":
			$redirectURL = '../page/ad_mainpage.php';
			// $redirectURL = $_SERVER['HTTP_REFERER'] . 'page/ad_mainpage.php';
			echo "<script> alert('Welcome back!') </script>";
			header("Refresh:0;url={$redirectURL}");
			break;
	}
} else {
	$error = 'Invalid username or password. You will be redirected to login site!';
	echo "<script> alert('$error') </script>";
	header("Refresh:0;url={$_SERVER['HTTP_REFERER']}");
}
/*
	Close the SQL connection
*/
mysqli_close($link);
?>

