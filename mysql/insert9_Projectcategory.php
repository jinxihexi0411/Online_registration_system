<?php
/* 
	Step 9
	Insert Table PROJECTCATEGORY
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

mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName,CcategoryName)
 			VALUES ('Excel Peer Support Network', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName,CcategoryName)
 			VALUES ('Excel Peer Support Network', 'reciprocal teaching and learning');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('ESW Hydroponics/Urban Farming Project', 'urban development');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('ESW Hydroponics/Urban Farming Project', 'sustainable communities');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Excel Current Events', 'computing for good');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Excel Current Events', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Excel Current Events', 'reciprocal teaching and learning');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Excel Current Events', 'technology for social good');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Shakespeare in Prison Project', 'urban development');");		
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Shakespeare in Prison Project', 'sustainable communities');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Know Your Water Project', 'sustainable communities');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Know Your Water Project', 'crowd sourced');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Epic Intentions', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Epic Intentions', 'collaborative action');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Greenfood branch', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Greenfood branch', 'urban development');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Programming a game to teach health in poor nations', 'computing for good');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Programming a game to teach health in poor nations', 'doing good for your neighborhood');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Programming a game to teach health in poor nations', 'reciprocal teaching and learning');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Grace Mission Tutoring', 'doing good for your neighborhood');");	
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Grace Mission Tutoring', 'collaborative action');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Grace Mission Tutoring', 'adaptive learning');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', 'computing for good');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', 'doing good for your neighborhood');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', 'urban development');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', 'technology for social good');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', 'sustainable communities');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Club Management', 'adaptive learning');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Club Management', 'crowd-sourced');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Club Management', 'collaborative action');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Organic Design', 'adaptive learning');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Organic Design', 'collaborative action');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Organic Design', 'urban development');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Improved Cookstoves', 'computing for good');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Improved Cookstoves', 'doing good for your neighborhood');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Improved Cookstoves', 'adaptive learning');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Improved Cookstoves', 'collaborative action');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Water Resource Innovation', 'doing good for your neighborhood');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Water Resource Innovation', 'urban development');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Water Resource Innovation', 'technology for social good');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Vietnamese Teaching', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Vietnamese Teaching', 'reciprocal teaching and learning');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Vietnamese Teaching', 'adaptive learning');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Vietnamese Teaching', 'crowd-sourced');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Vietnamese Teaching', 'collaborative action');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Green Stormwater Infrastruture', 'sustainable communities');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Green Stormwater Infrastruture', 'urban development');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Project LOVE', 'urban development');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Project LOVE', 'collaborative action');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Inproving Living Condition', 'urban development');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Inproving Living Condition', 'collaborative action');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Inproving Living Condition', 'sustainable communities');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Green Garden Project', 'urban development');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('Green Garden Project', 'sustainable communities');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('HOPE Community', 'doing good for your neighborhood');");
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('HOPE Community', 'collaborative action');"); 			
mysqli_query($link, "INSERT INTO PROJECTCATEGORY (ProjectName, CcategoryName)
 			VALUES ('HOPE Community', 'adaptive learning');"); 	

mysqli_close($link);

?>
