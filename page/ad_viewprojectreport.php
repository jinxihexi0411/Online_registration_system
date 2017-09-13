<?php
//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

// Get SELF infomation
$sql = "SELECT ApplyPName, COUNT(*) AS AppNum
        FROM APPLY
        GROUP BY ApplyPName
        ORDER BY AppNum DESC";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$projectApply_num = mysqli_num_rows($result);
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
    <link href="css/stu_mainpage.css" rel="stylesheet">

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
              <table
                class="table 
                table-striped 
                table-hover 
                table-sm 
                table-condensed 
                table-bordered
                table td text-left row-fluid" 
                data-pagination="true"
                id="viewapplication_table">
                <thead>
                  <tr>
                    <th style="width: 70%" data-sortable="true">Project</th>
                    <th style="width: 30%" data-sortable="true"># of applicant</th>
                  </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                  <?php
                    if($projectApply_num == 0) {
                      echo "<script type='text/javascript'>alert('No application was found!');</script>";
                    } else {
                      $index = 0;
                      while($index < 10) {
                        if($row = mysqli_fetch_row($result)) {
                          $table_sentence = '<tr>';
                          $table_sentence = $table_sentence . '<td>'.$row[0].'</td>';
                          $table_sentence = $table_sentence . '<td>'.$row[1].'</td>';
                          $table_sentence = $table_sentence . '</tr>';
                          echo $table_sentence;                         
                        } else {
                          break;
                        }
                        $index = $index + 1;
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
