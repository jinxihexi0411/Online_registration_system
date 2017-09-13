<?php
// Check the validation of the username and password
/*
  Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['userName'])) {
  $username = $_POST['userName'];
} else {
  die("SYSTEM ERROR: wrong user name");
}

if (isset($_POST['projectName'])) {
  $projectname = $_POST['projectName'];
} else {
  die("SYSTEM ERROR: wrong project name");
}

$time = date("Y-m-d H:i:s");
// $time = date();
$status = 'pending';

$sql =  "INSERT INTO APPLY (ApplyUsername, ApplyPName, ApplyDate, ApplyStatus)
      VALUES ('$username', '$projectname', '$time', '$status')";
$result = mysqli_query($link, $sql);

if($result) {
  $resultArray = 1;
}else {
  $resultArray = 0;
}
echo $resultArray;
/*
  Close the SQL connection
*/
mysqli_close($link);
?>

