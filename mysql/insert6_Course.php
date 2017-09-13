<?php
/* 
	Step 6
	Insert Table COURSE
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

mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('ARCH 4803', 'Green Infrastructure: EPA Campus Rainwater Challenge', 'Richard Dagenhart', '26', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('BMED 2250', 'Problems in Biomedical Engineering', 'Barbara Burks Fasse', '300', 'Community');");

 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('PUBP 3315', 'Environmental Policy and Politics', 'Alice Favero', '25', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('EAS 2803 ', 'Urban Forest', 'Monica Halka', '10', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('BIOL 1511', 'Honors Biological Principles; Honors Organismal Biology', 'Brian Hammer', '150', 'Sustainable Communities');");

 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('EAS 1600', 'Introduction to Environmental Science', 'Dana Hartley', '600', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('EAS 1601', 'Habitable Planet', 'Dana Hartley', '600', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('EAS 2750', 'Physics of the Weather', 'Dana	Hartley', '30', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('ARCH 2101', 'Arch Design Studio', 'John Smith', '40', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('MATH 1553', 'Intro to Linear Algebra', 'Joe Jones', '90', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('ID 2320', 'Human Factors in Design', 'Bob Johnson', '150', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('CS 1315', 'Intro Media Computation', 'Mike Lee', '100', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('HIST 2111', 'American Government', 'Juan Gonzalez', '30', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('COA 2242', 'History of Art II', 'Jane Lopez', '50', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('PHYS 2211', 'Intro Physics I', '120', 'Sustainable Communities');");

 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('PUBP 3000', 'US Constitutional Issues', 'David	Williams', '200', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('COE 2701', 'Startup Lab', 'Sarah Rodriguez', '25', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('MATH 3050', 'Math Modeling', 'James Garcia', '10', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('CS 2051', 'Honors Discrete Math', 'Jessica	Davis', '50', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('CSE 6040', 'Computing for Data Analysis', 'Rebacca	Clark', '50', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('CEE 2300', 'Environmental Engineering', 'Jimmy Lewis', '80', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('COE 3001', 'Deformable Bodies', 'Molly	Miller', '90', 'Community');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('CS 3743', 'Emerging Technologies', 'Melori Wilson', '100', 'Community');");

 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('CSE 6643', 'Numerical Linear Algebra', 'Deanna	Young', '30', 'Sustainable Communities');");
 mysqli_query($link, "INSERT INTO COURSE (CourseNumber, Name, Instructor, CEstNumStu, CDname)
 			VALUES ('INTA6001', 'International Affairs', 'Jimmy Carter', '50', 'Community');");

mysqli_close($link);

?>
