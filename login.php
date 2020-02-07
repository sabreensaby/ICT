<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="log" >
  <div class="header">
  <!-- Navigation Bar -->
	       <?php include("include/nav.inc") ?>
															<!-- Navigation Bar ends -->
  	<h2 style="text-align:center; margin-left:15%;">Login</h2>
  </div>
	 
  <form method="post" action="index.php" style="margin-bottom:9%;">

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn_form" name="login_user">Login</button>
		<button type="submit" class="btn_form" name="login_user">Cancel</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Sign up</a> <br>
  		Are you an admin? <a href="admin_area.php">Click Here!</a>
  	</p>
  </form>
  </div>
  <!-- Footer -->
	       <?php include("include/footer.inc") ?>
															<!-- Footer -->
</body>
</html>

