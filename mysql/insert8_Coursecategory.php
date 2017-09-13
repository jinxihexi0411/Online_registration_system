<?php
/* 
	Step 8
	Insert Table COURSECATEGORY
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

mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum,CategoryName)
 			VALUES ('ARCH 4803', 'computing for good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum,CategoryName)
 			VALUES ('ARCH 4803', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('BMED 2250', 'computing for good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('BMED 2250', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('PUBP 3315', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('PUBP 3315', 'sustainable communities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 2803', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 2803', 'sustainable communities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('BIOL 1511', 'sustainable communities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 1600', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 1600', 'sustainable communities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 1601', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 1601', 'sustainable communities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 2750', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('EAS 2750', 'sustainable communities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('ARCH 2101', 'adaptive learning');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('ARCH 2101', 'technology for social good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('MATH 1553', 'technology for social good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('ID 2320', 'sustainable coommunities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('ID 2320', 'crowd-sourced');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CS 1315', 'collaborative action');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('HIST 2111', 'computing for good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('HIST 2111', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('COA 2242', 'reciprocal teaching and learning');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('PHYS 2211', 'sustainable coommunities');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('PUBP 3000', 'technology for social good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('PUBP 3000', 'collaborative action');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('COE 2701', 'sustainable communities');"); 			
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('COE 2701', 'computing for good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('MATH 3050', 'doing good for your neighborgood');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('MATH 3050', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CS 2051', 'collaborative action');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CS 2051', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CSE 6040', 'reciprocal teaching and learning');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CEE 2300', 'urban development');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('COE 3001', 'adaptive learning');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CS 3743', 'technology for social good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CSE 6643', 'computing for good');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('CSE 6643', 'reciprocal teaching and learning');");
mysqli_query($link, "INSERT INTO COURSECATEGORY (CcourseNum, CategoryName)
 			VALUES ('INTA6001', 'collaborative action');");

mysqli_close($link);

?>
