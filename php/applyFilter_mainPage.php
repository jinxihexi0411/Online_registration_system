<?php
// update acount for student

//Connecting to MySQL database
include("dbinfo.php");

// get name_keyword
if (isset($_POST['name_keyword'])) {
	$name_keyword = $_POST['name_keyword'];
} else {
	die("SYSTEM ERROR: wrong name_keyword");
}

// get department
if (isset($_POST['mydepartment'])) {
	$mydepartment = $_POST['mydepartment'];
} else {
	die("SYSTEM ERROR: wrong department");
}

// get major
if (isset($_POST['mymajor'])) {
	$mymajor = $_POST['mymajor'];
} else {
	die("SYSTEM ERROR: wrong major");
}

// get Category
if (isset($_POST['mycategorys'])) {
	$mycategory = $_POST['mycategorys'];
} else {
	die("SYSTEM ERROR: wrong categorys");
}

// get Designation
if (isset($_POST['mydesignation'])) {
	$mydesignation = $_POST['mydesignation'];
} else {
	die("SYSTEM ERROR: wrong designation");
}

// get year
if (isset($_POST['myyear'])) {
	$myyear = $_POST['myyear'];
} else {
	die("SYSTEM ERROR: wrong year");
}

// get type
if (isset($_POST['mytype'])) {
	$mytype = $_POST['mytype'];
} else {
	die("SYSTEM ERROR: wrong type");
}


echo "key".$name_keyword."<br>";
echo "designation".$mydesignation."<br>";
echo "category".$mycategory."<br>";
echo "department".$mydepartment."<br>";
echo "major".$mymajor."<br>";
echo "year".$myyear."<br>";

?>