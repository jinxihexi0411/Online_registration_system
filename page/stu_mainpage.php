<?php

session_start();

//  Include database configuration
define('ROOT_PATH', dirname(dirname(__FILE__))); 
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

//  Get all the department
$sql = "SELECT * FROM DEPARTMENT ORDER BY DeptName";
$DepartName = mysqli_query($link,$sql) or die(mysqli_error($link));
$DepartName_num = mysqli_num_rows($DepartName);

//  Get all the designation
$sql = "SELECT * FROM DESIGNATION ORDER BY DName";
$Designation = mysqli_query($link,$sql) or die(mysqli_error($link));
$Designation_num = mysqli_num_rows($DepartName);

//  Get all the category
$sql = "SELECT CNAME FROM CATEGORY ORDER BY CName";
$Category = mysqli_query($link,$sql) or die(mysqli_error($link));
$Category_num = mysqli_num_rows($Category);

// Get SELF infomation
$SELF_username = $_SESSION['myusername'];
$sql = "SELECT * 
FROM  USER
LEFT JOIN MAJOR ON USER.SMajorName = MAJOR.MajorName
WHERE Username='$SELF_username'";
$SELF = mysqli_query($link,$sql) or die(mysqli_error($link));
$SELF_result = mysqli_fetch_assoc($SELF);

$SELF_year_number = $SELF_result["Year"];
switch($SELF_year_number) {
	case "1":
		$SELF_year = 'Freshman';
		break;
	case "2":
		$SELF_year = 'Sophomore';
		break;		
	case "3":
		$SELF_year = 'Junior';
		break;	
	case "4":
		$SELF_year = 'Senior';
		break;	
}

$SELF_major = $SELF_result["MajorName"];
$SELF_department = $SELF_result["MDeptName"];

if($SELF_major == NULL || $SELF_department == NULL || $SELF_year_number == NULL) {
  $redirectURL = 'stu_editprofile.php';
  echo "<script type='text/javascript'>alert('Your infomation is not complete. Please update it first!');</script>";
  header("Refresh:0;url={$redirectURL}");
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Main Page</title>

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

    <!-- Include the plugin's CSS and JS: -->
    <!-- Include bootstrap-multiselect CSS and JS -->
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>

    <!-- Include jasny-bootstrap CSS and JS -->
<!--     <script src="js/jasny-bootstrap.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/jasny-bootstrap.min.css" type="text/css"/> -->

    <!-- Include bootstrap-table CSS and JS -->
    <link rel="stylesheet" href="css/bootstrap-table.css" type="text/css"/>
    <script src="js/bootstrap-table.js"></script> 

    <script src="js/stu_mainpage.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
   
  <body>
  	<div id="wrap">
      <a href="../php/logout.php" class="logout">Logout</a>
  		<div class="container" style="text-align:center;">
  			<div class="container">
  				<div class="content">
  					<h2 class="form-heading">Main Page</h2>

            <input type="hidden" id="SELF_username" value="<?php echo $SELF_username;?>">
            <input type="hidden" id="SELF_year" value="<?php echo $SELF_year;?>">
            <input type="hidden" id="SELF_major" value="<?php echo $SELF_major;?>">
            <input type="hidden" id="SELF_department" value="<?php echo $SELF_department;?>">

            <form class="form-signin" role="form" method="post" action="stu_me.php">
              <button class="btn btn-primary" id="createsubmit" name="submit" type="submit">Me Page</button>
            </form> 

            <form class="form-signin" role="form" method="post" id="filter-form">
              <h5 class="form-signin-heading">-------------------------------------------------------------------------------</h5>
              <h5 class="form-signin-heading" align="left">Title</h5>
              <input type="text" name="name_keyword" id="name_keyword" class="form-control" maxlength="16" placeholder="Project/Course keyword"/>
              <div class="row">

                <div class="col-md-6">
                  <h5 class="form-signin-heading" align="left">Department</h5>
                  <select class="form-control" name="mydepartment" id="mydepartment">
                    <?php
                      echo '<option value="ALL">--ALL--</option>';
                      while($row = mysqli_fetch_row($DepartName)) {
                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                      }
                    ?>
                  </select>   

                  <h5 class="form-signin-heading" align="left">Year</h5>
                  <select class="form-control" name="myyear" id="myyear">
                    <option value="ALL">--ALL--</option>
                    <option value="Freshman">Freshman</option>
                    <option value="Sophomore">Sophomore</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                  </select>  

                  <h5 class="form-signin-heading" align="left">Category (multiple)</h5>
                  <select id="mycategory" name="mycategory" multiple="multiple">
                    <?php
                      while($row = mysqli_fetch_row($Category)) {
                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                      }
                    ?>
                  </select>
                </div>

                <div class="col-md-6">
                  <h5 class="form-signin-heading" align="left">Major</h5>
                  <select class="form-control" name="mymajor" id="mymajor">
                    <option value="ALL">--ALL--</option>
                  </select> 

                  <h5 class="form-signin-heading" align="left">Designation</h5>
                  <select class="form-control" name="mydesignation" id="mydesignation">
                    <?php
                      echo '<option value="ALL">--ALL--</option>';
                      while($row = mysqli_fetch_row($Designation)) {
                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                      }
                    ?>
                  </select>  

                  <h5 class="form-signin-heading" align="left">Type</h5>
                  <select class="form-control" name="mytype" id="mytype">
                    <option value="ALL">--ALL--</option>
                    <option value="Project">Project</option>
                    <option value="Course">Course</option>
                  </select>  
                </div>
              </div>

              <h5 class="form-signin-heading" align="left"> </h5>

              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-primary" id="applyFilter" name="applyFilter" type="submit">Apply Filter</button>           
                </div>
                <div class="col-md-6">
                  <button class="btn btn-secondary" id="resetFilter" name="resetsFilter" type="reset">Reset Filter</button>           
                </div>
              </div>     
            </form>

            <h5 class="form-signin-heading">-------------------------------------------------------------------------------</h5>
            <form class="form-signin" role="form" method="post" id="filter-form">
              <table
                class="table 
                table-striped 
                table-hover 
                table-sm 
                table-condensed 
                table-bordered
                table td text-left row-fluid"  
                data-pagination="true"
                id="course_project_table">
                <thead>
                  <tr>
                  	<th style="width: 75%" class="table">Name</th>
                  	<th style="width: 25%" class="table">Type</th>
                  </tr>
                </thead>
                <tbody data-link="row" class="rowlink" id = "table-content">
                	<?php
                		$sql_course = "SELECT Name FROM COURSE ORDER BY Name";
                		$sql_project = "SELECT Pname FROM PROJECT ORDER BY Pname";

                		$Course = mysqli_query($link,$sql_course) or die(mysqli_error($link));
                		$Project = mysqli_query($link,$sql_project) or die(mysqli_error($link));

                		$project_num = mysqli_num_rows($Project);
                		$course_num = mysqli_num_rows($Course);

                		if($project_num == 0 && $course_num == 0 ){
                			echo '<tr><td>No result found</td><td>--</td></tr>';
                		} else {
                			while($row = mysqli_fetch_row($Project)) {
                        echo '<tr class="table"><td class="table">'.$row[0].'</td><td class="table">Project</td></tr>';
                      }
                      while($row = mysqli_fetch_row($Course)) {
                        echo '<tr class="table"><td class="table">'.$row[0].'</td><td class="table">Course</td></tr>';
                      }
                    }         		
                	?>
                </tbody>
              </table>


              <!--Project Modal -->
      			  <div class="modal fade" id="projectModal" role="dialog">
      			    <div class="modal-dialog" style ="text-align: left">
      			      <!-- Modal content-->
      			      <div class="modal-content">
                    <div class="modal-header" id="projectTitle"> </div>
                    <div id="projectContent" class="modal-body"></div>
                      <div class="modal-footer">
      			        	  <button type="button" class="btn btn-primary" id="btnApply">Apply</button>
      			          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
                </div>
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
      			        </div>
      			      </div>
      			    </div>
      			  </div>

      			  <!--Apply Modal -->
      			  <div class="modal fade" id="applyModal" role="dialog">
      			    <div class="modal-dialog" style ="text-align: left">
      			      <!-- Modal content-->
      			      <div class="modal-content">
      			        <div class="modal-header" id="applyTitle"> </div>
      			        <div id="applyContent" class="modal-body"></div>
      			        <div class="modal-footer">
      			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			        </div>
      			      </div>
      			    </div>
      			  </div>	

            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

