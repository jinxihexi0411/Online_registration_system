<?php
//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

// Get applicant infomation
$sql = "SELECT COUNT( * ) FROM APPLY";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$row = mysqli_fetch_row($result);
$totalApplicantNum = $row[0];

$sql = "SELECT COUNT( * ) FROM APPLY
        WHERE ApplyStatus =  'accepted'";
$result = mysqli_query($link,$sql) or die(mysqli_error($link)); 
$row = mysqli_fetch_row($result);
$totalAcceptNum = $row[0];

$sql = "SELECT ApplyPName, COUNT( * ) AS totalApply, 
              SUM( IF( APPLY.ApplyStatus =  'accepted', 1, 0 ) ) AS totalAccept, 
              SUM( IF( APPLY.ApplyStatus =  'accepted', 1, 0 ) ) / COUNT( * ) AS acceptRatio
        FROM APPLY
        LEFT JOIN USER ON USER.Username = APPLY.ApplyUsername
        GROUP BY ApplyPName
        ORDER BY acceptRatio DESC , ApplyPName ASC";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AD-Application Report</title>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>


    <!-- Include Twitter Bootstrap and jQuery: -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ad_viewapplication.css" rel="stylesheet">

    <!-- Include bootstrap-table CSS and JS -->
    <link rel="stylesheet" href="css/bootstrap-table.css" type="text/css"/>
    <script src="js/bootstrap-table.js"></script> 

    <!-- Include customized js code -->
    <script type="text/javascript" src="js/ad_viewapplication.js"></script> 


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
   
  <body>
    <div id="wrap">
      <div class="container" style="text-align:center;">
        <div class="container">
          <div class="content">
            <form class="form-signin" role="form" method="post" id="filter-form">
            <h2 class="form-heading">Application</h2>
            <?php
              $sum_sentence = '<h5 class="form-signin-heading" align="left">';
              $sum_sentence = $sum_sentence . $totalApplicantNum . ' applications in total,';
              $sum_sentence = $sum_sentence . 'accepted ' . $totalAcceptNum . ' applications.</h5>';
              echo $sum_sentence;
            ?>

            <table
              class="table 
              table-striped 
              table-hover 
              table-sm 
              table-condensed 
              table-bordered
              table td text-left row-fluid" 
              data-toggle="table" 
              data-pagination="true"
              id="viewapplication_table">
              <thead>
                <tr>
                  <th style="width:30%">Project</th>
                  <th style="width:20%"># of Applicants</th>
                  <th style="width:20%">accept rate</th>
                  <th style="width:30%">top 3 majors</th>
                </tr>
              </thead>
              <tbody data-link="row" class="rowlink">
                <?php
                  $applicantInfo_num = mysqli_num_rows($result);

                  if($applicantInfo_num == 0) {
                    echo "<script type='text/javascript'>alert('No application was found!');</script>";
                  } else {
                    while($row = mysqli_fetch_row($result)) {
                      $projectName = $row[0];
                      $sql = "SELECT SMajorName, COUNT(*) AS majorNum
                              FROM APPLY LEFT JOIN USER
                              ON USER.Username=APPLY.ApplyUsername
                              WHERE ApplyPName='$projectName'
                              GROUP BY SMajorName
                              ORDER BY majorNum DESC";
                      $major_result = mysqli_query($link,$sql) or die(mysqli_error($link));
                      $cutOff = 0;
                      $major_sentence = '';
                      while($cutOff < 3) {
                        if($major_row = mysqli_fetch_row($major_result)) {
                          $major_sentence = $major_sentence. $major_row[0]. ' / ';
                        } else {
                          break;
                        }
                      }
                      $major_sentence = substr($major_sentence, 0,-2);

                      $table_sentence = '<tr>';
                      $table_sentence = $table_sentence . '<td>'.$row[0].'</td>';
                      $table_sentence = $table_sentence . '<td>'.$row[1].'</td>';
                      $table_sentence = $table_sentence . '<td>'.round($row[3]*100).'%</td>';
                      $table_sentence = $table_sentence . '<td>'.$major_sentence.'</td>';
                      $table_sentence = $table_sentence . '</tr>';
                      echo $table_sentence;  
                    }                          
                  }
   
                ?>
              </tbody>
            </table>

              <button class="btn btn-sm" id="btn-return" type="button" style="float: left;">Return</button>
              
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
