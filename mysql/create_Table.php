<?php
/* 
	Create Tables
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

/* 
	Create Table DEPARTMENT
*/
$create = "
CREATE TABLE DEPARTMENT (
DeptName VARCHAR(40) NOT NULL,
PRIMARY KEY (DeptName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table DEPARTMENT was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table MAJOR
*/
$create = "
CREATE TABLE MAJOR (
MajorName VARCHAR(50) NOT NULL,
MDeptName VARCHAR(40) NOT NULL,
PRIMARY KEY (MajorName),
FOREIGN KEY (MDeptName ) REFERENCES DEPARTMENT(DeptName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table MAJOR was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table USER
*/
$create = "
CREATE TABLE USER (
Username VARCHAR(16) NOT NULL,
Password VARCHAR(16) NOT NULL,
UserType VARCHAR(16) NOT NULL,
GTemail VARCHAR(30),
Year INT,
SMajorName VARCHAR(50),
PRIMARY KEY (Username),
UNIQUE (Username),
UNIQUE(GTemail),
FOREIGN KEY (SMajorName) REFERENCES MAJOR(MajorName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table USER was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table DESIGNATION
*/
$create = "
CREATE TABLE DESIGNATION (
DName VARCHAR(30) NOT NULL,
PRIMARY KEY (DName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table DESIGNATION was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table COURSE
*/
$create = "
CREATE TABLE COURSE (
CourseNumber VARCHAR(16) NOT NULL,
Name VARCHAR(70) NOT NULL,
Instructor VARCHAR(30),
CEstNumStu INT,
CDName VARCHAR(30) NOT NULL,
PRIMARY KEY (CourseNumber),
UNIQUE (Name),
FOREIGN KEY (CDName) REFERENCES DESIGNATION(DName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table COURSE was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table PROJECT
*/
$create = "
CREATE TABLE PROJECT (
Pname VARCHAR(100) NOT NULL,
PEstNumStu INT NOT NULL, 
AdvName VARCHAR(100) NOT NULL,
AdvEmail VARCHAR(100) NOT NULL,
Description VARCHAR(1000) NOT NULL,
PDName VARCHAR(30) NOT NULL,
PRIMARY KEY (Pname),
UNIQUE (AdvEmail),
FOREIGN KEY (PDName) REFERENCES DESIGNATION(DName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table PROJECT was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table CATEGORY
*/
$create = "
CREATE TABLE CATEGORY (
CName VARCHAR(40) NOT NULL,
PRIMARY KEY (CName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table CATEGORY was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table APPLY
*/
$create = "
CREATE TABLE APPLY (
ApplyUsername VARCHAR(16) NOT NULL,
ApplyPName VARCHAR(100) NOT NULL,
ApplyDate Date,
ApplyStatus VARCHAR(10),
PRIMARY KEY (ApplyUsername,ApplyPName),
UNIQUE (ApplyUsername,ApplyPName),
FOREIGN KEY (ApplyUsername) REFERENCES USER(Username),
FOREIGN KEY (ApplyPName) REFERENCES PROJECT(Pname)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table APPLY was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table COURSECATEGORY
*/
$create = "
CREATE TABLE COURSECATEGORY (
CcourseNum VARCHAR(16) NOT NULL,
CategoryName VARCHAR(40) NOT NULL,
PRIMARY KEY (CcourseNum,CategoryName),
UNIQUE (CcourseNum,CategoryName),
FOREIGN KEY (CcourseNum) REFERENCES COURSE(CourseNumber),
FOREIGN KEY (CategoryName) REFERENCES CATEGORY(CName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table COURSECATEGORY was created";
} else {
	echo "Error creating Table COURSECATEGORY";
}
echo "<br />";

/* 
	Create Table PROJECTCATEGORY
*/
$create = "
CREATE TABLE PROJECTCATEGORY (
ProjectName VARCHAR(100) NOT NULL,
CcategoryName VARCHAR(40) NOT NULL,
PRIMARY KEY (ProjectName,CcategoryName),
UNIQUE (ProjectName,CcategoryName),
FOREIGN KEY (ProjectName) REFERENCES PROJECT(Pname),
FOREIGN KEY (CcategoryName) REFERENCES CATEGORY(CName)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table PROJECTCATEGORY was created";
} else {
	echo "Error creating table";
}
echo "<br />";

/* 
	Create Table PROJECT_REQUIREMENT
*/
$create = "
CREATE TABLE PROJECT_REQUIREMENT (
Pname VARCHAR(100) NOT NULL,
Prequirement_Year VARCHAR(50),
Prequirement_Major VARCHAR(50),
Prequirement_Department VARCHAR(50),
PRIMARY KEY (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department),
UNIQUE (Pname,Prequirement_Year,Prequirement_Major,Prequirement_Department),
FOREIGN KEY (Pname) REFERENCES PROJECT(Pname)
) engine = InnoDB;
";

if (mysqli_query($link,$create)) {
	echo "Table ROJECT_REQUIREMENT was created";
} else {
	echo "Error creating table";
}
echo "<br />";



mysqli_close($link);
?>