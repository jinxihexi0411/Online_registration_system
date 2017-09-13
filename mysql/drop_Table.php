<?php
/* 
	DROP all Tables
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

// MAJOR USER DESIGNATION COURSE PROJECT CATEGORY APPLY COURSECATEGORY PROJECTCATEGORY ROJECT_REQUIREMENT

mysqli_query($link, "SET FOREIGN_KEY_CHECKS = 0;");
mysqli_query($link, "SET @tables = NULL;");
mysqli_query($link, "SELECT GROUP_CONCAT(table_schema, '.', table_name) INTO @tables
  						FROM information_schema.tables 
  						WHERE table_schema = 'cs4400_Team_71';");
mysqli_query($link, "SET @tables = CONCAT('DROP TABLE ', @tables);");
mysqli_query($link, "PREPARE stmt FROM @tables;");
mysqli_query($link, "EXECUTE stmt;");
mysqli_query($link, "DEALLOCATE PREPARE stmt;");
mysqli_query($link, "SET FOREIGN_KEY_CHECKS = 1;");

echo "Succeed in dropping";

mysqli_close($link);

?>