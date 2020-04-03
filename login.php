<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("include/nav.inc") ?>

<div class="custitle">
  <div class="header">
  	<h2 style="text-align:center;background-color: #000;">Login</h2>
  </div>
</div> 
<div class="cusregForms">
  <form method="post" action="index.php" >

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group loginbts">
  		<button type="submit" class="btn_form" name="login_user">Login</button>
		<button type="submit" class="btn_form" name="login_user">Cancel</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Sign up</a> <br>
  		Are you an admin? <a href="admin_login.php">Click Here!</a>
  	</p>
  </form>
</div> 
  <!-- Footer -->
	       <?php include("include/footer.inc") ?>
															<!-- Footer -->
</body>
</html>

