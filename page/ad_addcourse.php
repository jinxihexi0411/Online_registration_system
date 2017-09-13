<?php
//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

//  Get all the designation
$sql = "SELECT * FROM DESIGNATION ORDER BY DName";
$Designation = mysqli_query($link,$sql) or die(mysqli_error($link));

//  Get all the category
$sql = "SELECT CNAME FROM CATEGORY ORDER BY CName";
$Category = mysqli_query($link,$sql) or die(mysqli_error($link));
$Category_num = mysqli_num_rows($Category);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AD- Add Course</title>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>


    <!-- Include Twitter Bootstrap and jQuery: -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <!-- Include bootstrap-multiselect CSS and JS -->
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Include customized js code -->
    <script type="text/javascript" src="js/ad_addcourse.js"></script>
    <script type="text/javascript" src="js/checkInput.js"></script>
   </head>
   
  <body>
  	<div id="wrap">
  		<div class="container" style="text-align:center;">
  			<div class="container">
  				<div class="content">
  					<h2 class="form-heading">Add a Course</h2>
  					<form class="form-signin" role="form" id="form-input">
  						<h5 align="left">Course Number</h5>
  						<input type="text" id="coursenumber" class="form-control" maxlength="16"
                required="required"  oninput="checkCourseNumber(this)" autofocus>
              <h5 align="left">Course Name</h5>
              <input type="text" id="coursename" class="form-control" maxlength="70"  
                required="required" oninput="checkCourseName(this)" autofocus>
  						<h5 align="left">Instructor</h5>
  						<input type="text" id="courseinstructor" class="form-control" maxlength="30"
              required="required" oninput="checkInstructorName(this)">
              <h5 class="form-signin-heading" align="left">Designation</h5>
              <select class="form-control" id="mydesignation" required>
                <?php
                  while($row = mysqli_fetch_row($Designation)) {
                    echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                  }
                ?>
              </select> 

              <h5 class="form-signin-heading" align="left">Category (multiple)</h5>
              <select id="mycategory" name="mycategory" multiple="multiple">
              <?php
                while($row = mysqli_fetch_row($Category)) {
                  echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                }
              ?>
              </select>

              
              <h5 align="left">Estimate # of student</h5>
              <input type="number" id="coursestudentNum" class="form-control" required oninput="checkStuNum(this)">
              <h5 align="left"> </h5>
              <button class="btn btn-md" id="btn-return" name="btn-return" type="button">Return</button>
              <button class="btn btn-md btn-primary" id="btn-courseSubmit" type="submit">Submit</button>
  						
  					</form>
  				</div>
          <div>
          
          </div>
          <!--Course Modal -->
          <div class="modal fade" id="courseModal" role="dialog">
            <div class="modal-dialog" style ="text-align: left">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" id="courseTitle"> </div>
                <div id="courseContent" class="modal-body"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-default btn-primary" id="btn-confirm">Confirm</button>
                </div>
              </div>
            </div>
          </div>

          <!--Confirmation Modal -->
          <div class="modal fade" id="confirmModal" role="dialog">
            <div class="modal-dialog" style ="text-align: left">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" id="confirmTitle"></div>
                <div id="confirmContent" class="modal-body"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
  			</div>
  		</div>
  	</div>
  </body>
</html>
