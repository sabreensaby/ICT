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
	<div id="slider">
	
		
		<script>
	var i = 0; // Start point
	var images = [];
	var time = 2500;

	// Image List
	images[0] = 'images/galary2.jpg';
	images[1] = 'images/galary3.jpg';
	images[2] = 'images/galary4.jpg';
	images[3] = 'images/galary5.jpg';
	

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;

</script>

<img name="slide" width="99%" height="400px;">
		</div>
		
		
		
	
<!-- Kitchen SetUp start-->
	
	<div class="services">
	<h1 class="section-title">KITCHEN SETUP </h1>
	 
	
	 
	<div class="services-container">
	<div class="service-box1"> 
	<div class="serice-img">
	<img src="images/kitchen staff.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	<div class="service-title">Kitchen Staff </div>
	
	
	</div>
	
	
	<div class="service-box1"> 
	<div class="serice-img">
	<img src="images/kitchen equipment.jpg" class="img-responsive" alt="img" title="img" style= "height:198px;">
	
	</div>
	
	<div class="service-title">Kitchen Equipment </div>
	
	</div>
	
	
	<div class="service-box1"> 
	<div class="serice-img">
	<img src="images/kitchen services.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title">Kitchen Services </div>
	
	
	
	
	</div>
	</div>
	
	</div>
	
	
														<!--Services end-->
	
	
	
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
