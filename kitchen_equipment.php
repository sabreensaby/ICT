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
<div class="background_image"><img src = "images/background_image.jpg"  alt="img" title="img" style= "height:50%;width:100%; opacity:0.3;z-index:-1;">

<h2>Add Equipment</h2>
	
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Equipment Type</label>
<select name="type">
  <option value="Select">Select</option>
  <option value="cook">Cooking Equipment</option>
  <option value="benchtop">Benchtop</option>
  <option value="coffee">Coffee Equipment</option>
    <option value="juicers">Juicers</option>
  <option value="pizza">Pizza Equipment and accessories</option>
    <option value="bakery">Bakery Equipment</option>
  <option value="display">Food Display Cases</option>
    <option value="dishwasher">Dishwasher</option>

</select>
</div>

<div class="input-group">
<label>Quality</label>
<select name="quality">
  <option value="Select">Select</option>
  <option value="2star">2 Star</option>
  <option value="3star">3 Star</option>
  <option value="4star">4 Star</option>
    <option value="5star">5 Star</option>

</select>
</div>

<div class="input-group">
<label>Details</label>
<textarea name="details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_equip">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_equip">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>