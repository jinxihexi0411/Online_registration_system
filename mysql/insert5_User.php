<?php
/* 
	Step 5
	Insert Table USER
*/
define('ROOT_PATH', dirname(dirname(__FILE__))); 

/* 
	Include database configuration
*/
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

mysqli_query($link, "INSERT INTO USER (Username, Password, UserType, GTemail, Year, SMajorName)
			VALUES ('ZWANG642', '12345', 'STU', 'ZWANG642@GATECH.EDU', 4, 'Mechanical Engineering');");
mysqli_query($link, "INSERT INTO USER (Username, Password, UserType, GTemail, Year, SMajorName)
			VALUES ('CSALDA', 'abcde', 'AD', NULL, NULL, NULL);");
mysqli_query($link, "INSERT INTO USER (Username, Password, UserType, GTemail, Year, SMajorName)
			VALUES ('JMIERS', 'abcde', 'STU', NULL, NULL, NULL);");

?>