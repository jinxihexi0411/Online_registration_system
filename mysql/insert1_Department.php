<?php
//	Step 1 - Insert Table DEPARTMENT

//	Define the root path
define('ROOT_PATH', dirname(dirname(__FILE__))); 

//	Include database configuration
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

// 	Insert DEARTMENT INTO DeptName
mysqli_query($link, "INSERT INTO DEPARTMENT (DeptName)
			VALUES ('College of Computing');");
mysqli_query($link, "INSERT INTO DEPARTMENT (DeptName)
			VALUES ('College of Design');");
mysqli_query($link, "INSERT INTO DEPARTMENT (DeptName)
			VALUES ('College of Engineering');");
mysqli_query($link, "INSERT INTO DEPARTMENT (DeptName)
			VALUES ('College of Sciences');");
mysqli_query($link, "INSERT INTO DEPARTMENT (DeptName)
			VALUES ('Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO DEPARTMENT (DeptName)
			VALUES ('Scheller College of Business');");

mysqli_close($link);

?>