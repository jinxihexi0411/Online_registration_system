<?php
/* 
	Step 4
	Insert Table DESIGNATION
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


mysqli_query($link, "INSERT INTO DESIGNATION (DName)
			VALUES ('Sustainable Communities');");
mysqli_query($link, "INSERT INTO DESIGNATION (DName)
			VALUES ('Community');");


mysqli_close($link);

?>