<?php
/* 
	Step 2
	Insert Table MAJOR
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

// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('CM', 'College of Computing');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('CS', 'College of Computing');");

// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('ARCH', 'College of Design');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('ID', 'College of Design');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('MUSIC', 'College of Design');");

// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('AE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('BMED', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('CHBE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('CEE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('CE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('EE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('IE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('MSE', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('ME', 'College of Engineering');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('NRE', 'College of Engineering');");

// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('MATH', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('APHYS', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('BIOC', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('BIOL', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('CHEM', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('EAS', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('PHYS', 'College of Sciences');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('PSYC', 'College of Sciences');");

// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('Applied Language and Intercultural Studies', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('Computational Media', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('ECON', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('INTA', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('FS', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('History, Technology, and Society', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('International Affairs', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('International Affairs and Modern Languages', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('LMC', 'Ivan Allen College of Liberal Arts');");
// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('PUBP', 'Ivan Allen College of Liberal Arts');");

// mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
// 			VALUES ('BA', 'Scheller College of Business');");




mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Computational Media', 'College of Computing');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Computer Science', 'College of Computing');");

mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Architecture', 'College of Design');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Industrial Design', 'College of Design');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Music Technology', 'College of Design');");

mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Aerospace Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Biomedical Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Chemical and Biomolecular Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Civil Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Computer Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Electrical Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Environmental Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Industrial Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Materials Science and Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Mechanical Engineering', 'College of Engineering');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Nuclear and Radiological Engineering', 'College of Engineering');");

mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Applied Mathematics', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Applied Physics', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Biochemistry', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Biology', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Chemistry', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Discrete Mathematics', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Earth and Atmospheric Sciences', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Physics', 'College of Sciences');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Psychology', 'College of Sciences');");

mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Applied Language and Intercultural Studies', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Computational Media', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Economics', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Economics and International Affairs', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Global Economics and Modern Languages', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('History, Technology, and Society', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('International Affairs', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('International Affairs and Modern Languages', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Literature, Media, and Communication', 'Ivan Allen College of Liberal Arts');");
mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Public Policy', 'Ivan Allen College of Liberal Arts');");

mysqli_query($link, "INSERT INTO MAJOR (MajorName, MDeptName)
			VALUES ('Business Administration', 'Scheller College of Business');");


mysqli_close($link);

?>