<?php
// create account from website New Student Registration
/*
	Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['projectName'])) {
  $projectName = $_POST['projectName'];
} else {
  die("SYSTEM ERROR: wrong project name");
}

if (isset($_POST['applicantName'])) {
  $applicantName = $_POST['applicantName'];
} else {
  die("SYSTEM ERROR: wrong applicant username");
}

$sql =  "UPDATE  APPLY SET ApplyStatus='accepted' 
        WHERE ApplyUsername='$applicantName' AND ApplyPName='$projectName'";
if (!mysqli_query($link,$sql)) {
	echo("Error description: " . mysqli_error($link));
} else {
	echo "good";
}

/*
	Close the SQL connection
*/
mysqli_close($link);
?>
