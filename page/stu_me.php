<?php

session_start();

//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

// Get SELF infomation
$SELF_username = $_SESSION['myusername'];

//  Get apply info
$sql = "SELECT * FROM APPLY WHERE ApplyUsername='$SELF_username'";
$applyResult = mysqli_query($link,$sql) or die(mysqli_error($link));
$applyResult_num = mysqli_num_rows($applyResult);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Me Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
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
  					<h2 class="form-heading">ME</h2>
            <?php
            if($applyResult_num > 0){
            $html = <<<HTML
            <div class="tooltip-wrapper disabled" data-title="You have applied projects. You can not edit profile">
            <button class="btn btn-md btn-primary" disabled>Edit Profile</button>
            </div>
HTML;
            echo $html;
          }
            if($applyResult_num == 0){
            $html = <<<HTML
            <form class="form-signin" role="form" method="post" action="stu_editprofile.php" id="btn-EditProfile">
            <button class="btn btn-md btn-primary" type="submit">Edit Profile</button>
            </form>
HTML;
            echo $html;
          }
            ?>
            <form class="form-signin" role="form" method="post">
              <button class="btn btn-md btn-primary" type="submit" id="btn-viewApplication">View Application</button>
              <button class="btn btn-md" type="submit" id="btn-return">Back to Main Page</button>
            </form>

            <!--Application Modal -->
            <div class="modal fade" id="applicationModal" role="dialog">
              <div class="modal-dialog" style ="text-align: left">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header" id="applicationTitle"><b>View Application</b></div>
                  <div id="applicationContent" class="modal-body"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

      		</div>
  			</div>
  		</div>
  	</div>


  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var SELF_username = "<?php echo $SELF_username?>";
        $(function() {
          $('.tooltip-wrapper').tooltip({position: "bottom"});
        });

        $('#btn-viewApplication').on('click', function(event) {
          event.preventDefault(); 
          $("#applicationModal").modal("show");
          $.ajax({
            type: 'POST',
            url: '../php/application_check.php',
            data: ({"userName": SELF_username}),
            success:function(data) {
              console.log(data);
              var applicationObj = jQuery.parseJSON(data);
              var applicationObj_len = applicationObj.length;
              if (applicationObj_len == '0') {
                $('#applicationContent').html($('<p>No project has been applied</p>'));
              } else {
                var table_sentence = '';
                for (i = 0; i < parseInt(applicationObj_len); i++) {
                  table_sentence += '<tr>'
                                    +'<td>' + applicationObj[i].ApplyDate +'</td>'
                                    +'<td>' + applicationObj[i].ApplyPName +'</td>'
                                    +'<td>' + applicationObj[i].ApplyStatus +'</td>'
                                    +'</tr>';
                }
       
                $('#applicationContent').html($('<table class="table table-striped table-sm table-condensed'
                  + 'table-bordered table td text-left row-fluid" data-pagination="true">'
                  + '<thead> <tr> <th style="width: 25%" data-field="appDate" data-sortable="true">Date</th>'
                  + '<th style="width: 50%" data-field="projectName" data-sortable="true">Project Name</th>'
                  + '<th style="width: 25%" data-field="appStatus" data-sortable="true">Status</th></tr></thead>'
                  + '<tbody data-link="row" class="rowlink">'
                  + table_sentence
                  + '</tbody>'
                  + '</table>'
                  + '</thead>'));
              }
            }
          });
        });
       

        $('#btn-return').on('click', function(event) {
          event.preventDefault(); 
          window.location = "stu_mainpage.php";
        });
      })
    </script>
  </body>
</html>
