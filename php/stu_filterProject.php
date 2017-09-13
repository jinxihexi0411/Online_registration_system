<?php
// create account from website New Student Registration
/*
  Connecting to MySQL database
*/
include("dbinfo.php");

if (isset($_POST['keyword'])) {
  $keyword = $_POST['keyword'];
} else {
  die("SYSTEM ERROR: wrong keyword");
}

if (isset($_POST['department'])) {
  $department = $_POST['department'];
} else {
  die("SYSTEM ERROR: wrong department");
}

if (isset($_POST['major'])) {
  $major = $_POST['major'];
} else {
  die("SYSTEM ERROR: wrong major email");
}

if (isset($_POST['year'])) {
  $year = $_POST['year'];
} else {
  die("SYSTEM ERROR: wrong year");
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

if(empty($keyword) && $year == 'ALL' && $major == 'ALL' && $department == 'ALL' && $designation == 'ALL' && count($categorys) == 0) {
  $sql_query_FINAL = 'SELECT DISTINCT Pname FROM PROJECT';
} else {
  $sql_query_INI = 'SELECT P FROM
              (SELECT PROJECT.Pname AS P, PDName AS DEG, CcategoryName AS C, Prequirement_Year AS Y, Prequirement_Major AS M, Prequirement_Department AS DEP
              FROM PROJECT
              LEFT JOIN PROJECTCATEGORY ON PROJECTCATEGORY.ProjectName = PROJECT.Pname
              LEFT JOIN PROJECT_REQUIREMENT ON PROJECT.Pname = PROJECT_REQUIREMENT.Pname) AS TEMP
              WHERE ';

  $sql = array();

  if(!empty($keyword)) {
    $sql[] = 'P LIKE \'%'.$keyword.'%\'';
  }

  if($year != 'ALL') {
    $sql[] = '(Y=\'' . $year. '\' OR Y = \'ALL\')';
  }

  if($department != 'ALL') {
    $sql[] = '(DEP =\''.$department. '\' OR DEP = \'ALL\')';
  }

  if($major != 'ALL') {
    $sql[] = '(M =\''.$major. '\' OR M = \'ALL\')';
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

    $sql_query_FINAL = $sql_query_INI . $sql_query . ' GROUP BY P'
                    . ' HAVING COUNT(*) >= '. count($categorys);
  } else {
    $sql_query_FINAL = $sql_query_INI . $sql_query . ' GROUP BY P';
  }
}

// echo $sql_query_FINAL;
$result = mysqli_query($link,$sql_query_FINAL);

$project_num = mysqli_num_rows($result);
if($project_num != 0){
  while($row = mysqli_fetch_row($result)) {
    echo '<tr class="table"><td class="table">'.$row[0].'</td><td class="table">Project</td></tr>';
  }
}           
/*
  Close the SQL connection
*/
mysqli_close($link);
?>
