<?php
// filter course 
/*
  Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['keyword'])) {
  $keyword = $_POST['keyword'];
} else {
  die("SYSTEM ERROR: wrong keyword");
}

if (isset($_POST['designation'])) {
  $designation = $_POST['designation'];
} else {
  die("SYSTEM ERROR: wrong designation name");
}

if (isset($_POST['category'])) {
  $categorys = $_POST['category'];
} else {
  $categorys = NULL;
}

if(empty($keyword) && $designation == 'ALL' && count($categorys) == 0) {
  $sql_query_FINAL = 'SELECT DISTINCT Name FROM COURSE';
} else {
  $sql_query_INI = 'SELECT CName FROM
                  (SELECT Name AS CName, CourseNumber AS CNum, CDName AS DEG, CategoryName AS C
                  FROM COURSE
                  LEFT JOIN COURSECATEGORY ON COURSE.CourseNumber = COURSECATEGORY.CcourseNum) AS TEMP
                  WHERE ';

  $sql = array();

  if(!empty($keyword)) {
    $sql[] = 'CName LIKE \'%'.$keyword.'%\'';
  }

  if($designation != 'ALL') {
    $sql[] = 'DEG =\''.$designation.'\'';
  }

  for($i = 0; $i < count($sql); $i++) {
    if($i == 0) {
      $sql_query = $sql[$i];
    } else {
      $sql_query = $sql_query . ' AND ' . $sql[$i];
    }
  }


  $sql_category = '';
  if(count($categorys) > 0) {
    for($i = 0; $i < count($categorys); $i++) {
      if($i == 0) {
        $sql_category = 'C IN (\''. $categorys[$i] . '\'';
      } else {
        $sql_category = $sql_category . ' ,\''.$categorys[$i]. '\'';
      }
    }
    $sql_category = $sql_category . ')';

    if(!isset($sql_query)) {
      $sql_query = $sql_category;
    } else {
      $sql_query = $sql_query . ' AND ' . $sql_category;
    }

    $sql_query_FINAL = $sql_query_INI . $sql_query . ' GROUP BY CName'
                    . ' HAVING COUNT(*) >= '. count($categorys);
  } else {
    $sql_query_FINAL = $sql_query_INI . $sql_query . ' GROUP BY CName';
  }
}

$result = mysqli_query($link,$sql_query_FINAL);

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_row($result)) {
    echo '<tr class="table"><td class="table">'.$row[0].'</td><td class="table">Course</td></tr>';
  }
}  
/*
  Close the SQL connection
*/
mysqli_close($link);
?>
