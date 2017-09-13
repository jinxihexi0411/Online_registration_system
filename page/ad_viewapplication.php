<?php
//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

// Get SELF infomation
$sql = "SELECT Username, SMajorName, Year, ApplyStatus, ApplyPName
        FROM USER
        RIGHT JOIN APPLY 
        ON APPLY.ApplyUsername = USER.Username";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$application_num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AD-View Application</title>

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
                    <th style="width: 4%" data-field="state" data-checkbox="true"></th>
                    <th style="width: 43%" data-field="projectName" >Project</th>
                    <th style="width: 25%" data-field="appMajor">Aply. Major</th>
                    <th style="width: 15%" data-field="appYear">Aply. Year</th>
                    <th style="width: 13%" data-field="appStatus">Status</th>
                    <th style="width: 0%" data-field="appUsername"></th>
                  </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                  <?php
                    if($application_num == 0) {
                      echo "<script type='text/javascript'>alert('No application was found!');</script>";
                    } else {
                      while($row = mysqli_fetch_row($result)) {
                        switch($row[2]) {
                          case "1":
                            $myyear = 'Freshman';
                            break;
                          case "2":
                            $myyear = 'Sophomore';
                            break;    
                          case "3":
                            $myyear = 'Junior';
                            break;  
                          case "4":
                            $myyear = 'Senior';
                            break;  
                        }

                        if($row[3] == 'pending') {
                          $table_sentence = '<tr><td><input type="checkbox" value=""></td>';
                        } else {
                          $table_sentence = '<tr><td></td>';
                        }

                        $table_sentence = $table_sentence . '<td>'.$row[4].'</td>';
                        $table_sentence = $table_sentence . '<td>'.$row[1].'</td>';
                        $table_sentence = $table_sentence . '<td>'.$myyear.'</td>';
                        $table_sentence = $table_sentence . '<td>'.$row[3].'</td>';
                        $table_sentence = $table_sentence . '<td style="display:none;">'.$row[0].'</td></tr>';
                        echo $table_sentence;
                      }  
                    }        
                  ?>
                </tbody>
              </table>

              <button class="btn btn-sm" id="btn-return" type="button" style="float: left;">Return</button>
              
              <button class="btn btn-sm btn-primary" id="btn-accept" type="submit" style="float: right;">Accept</button>
              <button class="btn btn-sm btn-warning" id="btn-reject" type="submit" style="float: right;">Reject</button>
              <button class="btn btn-sm" id="btn-refresh" type="button" style="float: right;">Refresh</button>

  				</div>
  			</div>
  		</div>
  	</div>
  </body>
</html>
