<html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AD-Main Page</title>

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
      <a href="../php/logout.php" class="logout">Logout</a>
  		<div class="container" style="text-align:center;">
  			<div class="container">
  				<div class="content">
  					<h2 class="form-heading">Choose Functionality</h2>
  					<form class="form-signin" role="form" method="post" action="ad_viewapplication.php">
  						<button class="btn btn-sm btn-primary btn-block" id="createsubmit" name="submit" type="submit">View Application</button>
  					</form>
            <form class="form-signin" role="form" method="post" action="ad_viewprojectreport.php">
              <button class="btn btn-sm btn-primary btn-block" id="createsubmit" name="submit" type="submit">View Popular Project Report</button>
            </form>
            <form class="form-signin" role="form" method="post" action="ad_viewappreport.php">
              <button class="btn btn-sm btn-primary btn-block" id="createsubmit" name="submit" type="submit">View Application Report</button>
            </form>
            <form class="form-signin" role="form" method="post" action="ad_addproject.php">
              <button class="btn btn-sm btn-primary btn-block" id="createsubmit" name="submit" type="submit">Add a Project</button>
            </form>
            <form class="form-signin" role="form" method="post" action="ad_addcourse.php">
              <button class="btn btn-sm btn-primary btn-block" id="createsubmit" name="submit" type="submit">Add a Course</button>
            </form>
  				</div>
  			</div>
  		</div>
  	</div>


  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
