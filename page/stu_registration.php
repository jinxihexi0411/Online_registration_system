<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

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
  					<h2 class="form-heading">New Student Registration</h2>
  					<form class="form-signin" role="form" method="post" action="../php/stu_addAccount.php">
  						<h5 align="left">Username</h5>
              <input type="text" name="myusername" id="myusername" class="form-control" maxlength="16" required placeholder="username"
                oninvalid="this.setCustomValidity('Please enter the username')"
                oninput="setCustomValidity('')" />
  						<h5 align="left">GT Email Address</h5>
              <div class="input-group">
                <input type="text" name="myGTemail" id="myGTemail" class="form-control" required placeholder="example"
                  oninvalid="this.setCustomValidity('Please enter the GT email')"
                  oninput="setCustomValidity('')" />
                <span class="input-group-addon">@gatech.edu</span>
              </div>
  						<h5 align="left">Password</h5>
  						<input type="password" name="mypassword" id="mypassword" class="form-control" required placeholder="password"
                oninvalid="this.setCustomValidity('Please enter the password')"
                oninput="setCustomValidity('')" />
  						<h5 align="left">Confirm Password</h5>
  						<input type="password" name="mypassword_confirm" id="mypassword_confirm" class="form-control" placeholder="confirm password"
                required>

              <script language='javascript' type='text/javascript'>
                var password = document.getElementById("mypassword")
                  , confirm_password = document.getElementById("mypassword_confirm");

                function validatePassword(){
                  if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords are not matching");
                  } else {
                    confirm_password.setCustomValidity('');
                  }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
              </script>
              <button class="btn btn-sm " id="btn-return" type="button">Return</button>
  						<button class="btn btn-sm btn-primary" id="createsubmit" name="submit" type="submit">Create</button>
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
        $('#btn-return').click(function(){
          window.location.href = "../index.html";
        });
      });
    </script>
  </body>
</html>
