<?php
// Check the validation of the username and password
/*
  Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['projectName'])) {
  $projectName = $_POST['projectName'];
} else {
  die("SYSTEM ERROR: wrong project name");
}

$resultArray = Array();

$sql = "SELECT *
        FROM  PROJECT 
        LEFT JOIN PROJECTCATEGORY ON PROJECT.Pname = PROJECTCATEGORY.ProjectName
        LEFT JOIN PROJECT_REQUIREMENT ON PROJECTCATEGORY.ProjectName = PROJECT_REQUIREMENT.Pname
        WHERE PROJECT.Pname='$projectName'";

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

