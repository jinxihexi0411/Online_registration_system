<?php
// Link the database
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

$mydepartment = $_POST["select_department"];
$sql = "SELECT MajorName FROM MAJOR 
		WHERE MDeptName = '$mydepartment' ORDER BY MajorName";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$count = mysqli_num_rows($result);

if($count > 0) {
	echo '<option value="ALL">'.'--No Requirement--'.'</option>';
	while($row = mysqli_fetch_row($result)) { 
		echo '<option value="'.$row[0].'">'.'Only '. $row[0].' Students</option>';
	}
}
?>


