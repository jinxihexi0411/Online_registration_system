<?php
/* 
	Step 3
	Insert Table CATEGORY
*/
/* 
	Define the root path
*/
define('ROOT_PATH', dirname(dirname(__FILE__))); 

/* 
	Include database configuration
*/
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('computing for good');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('reciprocal teaching and learning');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('urban development');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('adaptive learning');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('technology for social good');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('sustainable communities');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('crowd-sourced');");
mysqli_query($link, "INSERT INTO CATEGORY (CName)
			VALUES ('collaborative action');");


mysqli_close($link);

?>