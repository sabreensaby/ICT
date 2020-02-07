<?php include 'server.php'?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<!-- Navigation Bar -->
	        <nav>
			
			
			
			
	<div id="logo">
	<a href="index.php"> <img src="images/logo3.png" style="height:150px; width:160px;"> </a>
	</div>
 
			
				<ul>
					<li > <a href = "index.php" id= "0" onClick= "nav_li_selected(0)"> Home </a> </li>
					<li> <a href = "services.php" id= "1" onClick= "nav_li_selected(1)"> Services </a> </li>
					<li> <a href = "feedback.php" id= "2" onClick= "nav_li_selected(2)">Feedback </a> </li>
					
					<li> <a href = "show_package.php" id= "3" onClick= "nav_li_selected(4)"> Package </a> </li>
					<li> <a href = "about.php" id= "4" onClick= "nav_li_selected(4)"> About Us </a> </li>
					<li > <a href = "contact.php" id= "5" onClick= "nav_li_selected(4)"> Contact Us</a> </li>
									</ul>
					<li>				
				<a href= "registration.php" class="btn btn-two"> Register </a>
				<a href= "login.php" class="btn btn-two">Log In </a>
			
	</div>
			</nav>
	<!-- Navigation Bar ends -->
<div class="header" style= "background: black;">

  	<h2>Register</h2>
	
 </div>

<form action="login.php" method="post">
<div class="input-group">
<label>Name</label>
<input type="text" name="name" required><br>
</div>
<div class="input-group">
<label>E-mail</label>
<input type="email" pattern="[^ @]*@[^ @]*" name="email" required><br>
</div>
<div class="input-group">
<label>Contact No.(format: xxxxxxxxxx):</label>
<input type="tel" pattern="^\d{10}$" name="contact" required><br>
</div>

  <div class="input-group">
  <label>Date of Birth</label>
<input type="date" name="bday" required><br>
</div>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" required><br>
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password1" id="password" required><br>
</div>
<div class="input-group">
<label>Confirm Password</label>
<input type="password" name="password2" id="confirm_password" required><br>
</div>
<div class="input-group">
<label>Address</label>
<textarea name="address"></textarea><br>
</div>
<div class="input-group">
<button type="submit" class="btn_form" name="reg_user">Register</button>
<button type="submit" class="btn_form" name="reg_user">Cancel</button>
</div>
<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
</form>
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