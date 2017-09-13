<?php
/* 
	Step 2
	Insert Table PROJECT_REQUIREMENT
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

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Excel Peer Support Network', 'Senior', 'Computer Science','ALL');");


mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('ESW Hydroponics/Urban Farming Project', 'Junior','ALL','ALL');");
 			
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Excel Current Events', 'Senior', 'ALL','College of Computing');");
 			
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 		    VALUES ('Shakespeare in Prison Project', 'ALL', 'ALL','College of Design');");
 		    
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Know Your Water Project', 'Senior', 'Computer Science','ALL');");
 			
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Epic Intentions', 'ALL', 'ALL','ALL');");
 			
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Greenfood branch', 'Senior', 'ALL','ALL');");
 			
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Programming a game to teach health in poor nations', 'ALL', 'Computer Science','ALL');");
 			
mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Grace Mission Tutoring', 'ALL', 'Industrial Engineering','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', 'Senior', 'Computer Science','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Club Management', 'ALL', 'Industrial Engineering','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 		    VALUES ('Organic Design', 'ALL', 'ALL','College of Design');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Improved Cookstoves', 'Senior', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Water Resource Innovation', 'Junior', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Vietnamese Teaching', 'Senior', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Green Stormwater Infrastruture', 'ALL', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Project LOVE', 'Senior', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Inproving Living Condition', 'Senior', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('Green Garden Project', 'ALL', 'ALL','ALL');");

mysqli_query($link, "INSERT INTO PROJECT_REQUIREMENT (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department)
 			VALUES ('HOPE Community', 'Junior', 'ALL','ALL');");


mysqli_close($link);

?>