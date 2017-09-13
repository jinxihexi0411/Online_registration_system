<?php
// create account from website New Student Registration
/*
	Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['projectName'])) {
  $projectName = $_POST['projectName'];
  $projectName = ucwords($projectName);
} else {
  die("SYSTEM ERROR: wrong project name");
}

if (isset($_POST['advisorName'])) {
  $advisorName = $_POST['advisorName'];
  $advisorName = ucwords($advisorName);
} else {
  die("SYSTEM ERROR: wrong advisor name");
}

if (isset($_POST['advisorEmail'])) {
  $advisorEmail = $_POST['advisorEmail'];
  $advisorEmail = strtolower($advisorEmail);
} else {
  die("SYSTEM ERROR: wrong advisor email");
}

if (isset($_POST['description'])) {
  $description = $_POST['description'];
} else {
  die("SYSTEM ERROR: wrong description");
}

if (isset($_POST['designationName'])) {
  $designation = $_POST['designationName'];
} else {
  die("SYSTEM ERROR: wrong designation name");
}

if (isset($_POST['estimateNumStu'])) {
  $estimateNumStu = $_POST['estimateNumStu'];
} else {
  die("SYSTEM ERROR: wrong estimate student number");
}

if (isset($_POST['category'])) {
	$categorys = $_POST['category'];
} else {
  die("SYSTEM ERROR: wrong category name");
}

if (isset($_POST['req_department'])) {
  $req_department = $_POST['req_department'];
} else {
  die("SYSTEM ERROR: wrong req department");
}

if (isset($_POST['req_major'])) {
  $req_major = $_POST['req_major'];
} else {
  die("SYSTEM ERROR: wrongA req major");
}

if (isset($_POST['req_year'])) {
  $req_year = $_POST['req_year'];
} else {
  die("SYSTEM ERROR: wrong req year");
}


$sql =  "INSERT INTO PROJECT (Pname, PEstNumStu, AdvName, AdvEmail, Description, PDName)
      VALUES ('$projectName', '$estimateNumStu', '$advisorName', '$advisorEmail', '$description', '$designation')";
if (!mysqli_query($link,$sql)) {
	echo("Error description: " . mysqli_error($link));
} else {
	echo "good";

	foreach($categorys as $category){
		$sql =  "INSERT INTO  PROJECTCATEGORY (ProjectName, CcategoryName)
				VALUES ('$projectName','$category')";
		mysqli_query($link,$sql);
  }

  $sql =  "INSERT INTO  PROJECT_REQUIREMENT (Pname, Prequirement_Year, Prequirement_Major, Prequirement_Department)
        VALUES ('$projectName','$req_year', '$req_major', '$req_department')";
  mysqli_query($link,$sql);
}

/*
	Close the SQL connection
*/
mysqli_close($link);
?>
