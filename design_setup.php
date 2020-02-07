<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
      <?php include("include/nav.inc") ?>
<!-- Navigation Bar ends -->
	
	<div id="slider">
	
		
		<script>
	var i = 0; // Start point
	var images = [];
	var time = 4000;

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

<img name="slide" width="99.9%" height="400px;">
		</div>
		
		
		
	
<!-- Kitchen SetUp start-->
	
	<div class="services">
	<h1 class="section-title">DESIGN</h1>
	 
	
	 
	<div class="services-container" style= "margin-left:18%; margin-bottom:5%;">
	<div class="service-box1"> 
	<div class="service-img">
	<img src="images/kitchen staff.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	<div class="service-title"> Menu Design </a> </div>
	
	
	</div>
	
	
	<div class="service-box1"> 
	<div class="service-img">
	<img src="images/kitchen equipment.jpg" class="img-responsive" alt="img" title="img" >
	
	</div>
	
	<div class="service-title">Receipies Design </a> </div>
	
	</div>
	
	
	<div class="service-box1"> 
	<div class="service-img">
	<img src="images/kitchen services.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title"> Interior Design </a> </div>
	
	
	
	
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
