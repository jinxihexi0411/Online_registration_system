<?php
//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

//  Get all the department
$sql = "SELECT * FROM DEPARTMENT ORDER BY DeptName";
$DepartName = mysqli_query($link,$sql) or die(mysqli_error($link));
$DepartName_num = mysqli_num_rows($DepartName);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student: edit profile</title>

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
  					<h2 class="form-heading">Edit Profile</h2>
    					<form class="form-signin" role="form" method="post" action="../php/stu_updateAccount.php">
    						<h5 align="left">Department</h5>
                <select class="form-control" name="mydepartment" id="mydepartment">
                  <?php
                    echo '<option value="">--Select department--</option>';
                    while($row = mysqli_fetch_row($DepartName)) {
                      echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                    }
                  ?>
                </select>

    						<h5 align="left">Major</h5>
                <select class="form-control" name="mymajor" id="mymajor">
                  <option value="">--Select department first--</option>
                </select>

    						<h5 align="left">Year</h5>
                <select class="form-control" name="myyear" id="myyear">
                  <option value="1">Freshman</option>
                  <option value="2">Sophomore</option>
                  <option value="3">Junior</option>
                  <option value="4">Senior</option>
                </select>
                
    						<button class="btn  btn-primary btn-block" id="createsubmit" name="submit" type="submit">Update</button>
    					</form>
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
          $('#mydepartment').on('change',function() {
              var sel_dep = $(this).val();
              if(sel_dep){
                  $.ajax({
                      type: 'POST',
                      url: '../php/updateMajorByDept.php',
                      data: ({select_department: sel_dep}),
                      success:function(html) {
                          $('#mymajor').html(html);
                      }
                  }); 
              } else {
                  $('#mymajor').html('<option value="">--Select department first--</option>'); 
              }
          });
        });
    </script>
  </body>
</html>
