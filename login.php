<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <!--<link rel="stylesheet" type="text/css" href="registration.css"> -->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
	       <?php include("include/nav.inc") ?>
		   <!-- Navigation Bar ends -->
  <div class="head">
  	<h2>Log In</h2>
  </div>
	 
  <form method="post" action="web/index.php">

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn_form" name="login_user">Log in</button>
		<button type="submit" class="btn_form" name="login_user">Cancel</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Register</a>
  	</p>
  </form>
  </div>
													<!-- footer --> 
	<?php include("include/footer.inc") ?>
	<!-- footer end -->
    
</body>
</html>