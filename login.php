<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
	        <nav>
			
			
			
			<div class="button"> 
				<a href= "login.php" class="btn btn-two"> Sign In</a>
			<a href= "registration.php" class="btn btn-two">Sign Up</a>
	</div> 
	<div id="logo">
	<a href="index.html"> <img src="images/logo3.png" style="height:150px;"> </a>
	</div>

			
				<ul>
					<li > <a href = "index.html" id= "0" onClick= "nav_li_selected(0)"> Home </a> </li>
					<li> <a href = "services.html" id= "1" onClick= "nav_li_selected(1)"> Services </a> </li>
					<li> <a href = "feedback.html" id= "2" onClick= "nav_li_selected(2)">Feedback </a> </li>
					
					<li> <a href = "package.html" id= "3" onClick= "nav_li_selected(4)"> Package </a> </li>
					<li> <a href = "about.html" id= "4" onClick= "nav_li_selected(4)"> About Us </a> </li>
					<li > <a href = "contact.html" id= "5" onClick= "nav_li_selected(4)"> Contact Us</a> </li>
									</ul>
			</nav>
	<!-- Navigation Bar ends -->
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="web/index.html">

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Sign up</a>
  	</p>
  </form>
  </div>
													<!-- footer --> 
	<footer class="footer">
	<div class="foot ">
		<div class="row footer-grids">
			<div class="terms">
				<h4>Terms and Conditions</h4>
				
				
			</div>
			
			<div class="contact">
				<h4>Contact No:</h4>
				<p>  +919274747410 </p>
				
				
			</div>
			
			<div class="address">
				<h4>Location:</h4>
				
					<p> 10 Chanakya complex, vania and circle, Nadiad Gujarat 387001, India </p>
				
			</div>
		</div>
		
		<div class="copyright">
			<p class=""> © 2019 Nostalgic Eatery. All rights reserved | Design by ICTteam8</p>
			
		</div>
	</div>
</footer>
</div>
	<!-- footer end -->
    
</body>
</html>