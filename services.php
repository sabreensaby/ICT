<!doctype html>
<html>
<head>
<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- meta character set -->
		<meta charset="utf-8">
<title> Consultation </title>

<link href="style.css" rel="stylesheet" type="text/css">


</head>
<body>
	<div id="wrapper">
	

	
	<!-- Navigation Bar -->
	        <nav>
			
			
			
			<div class="button"> 
				<a href= "" class="btn btn-two"> Sign In</a>
			<a href= "registration.php" class="btn btn-two">Sign Up</a>
	</div> 
	<div id="logo">
	<a href="index.html"> <img src="images/logo3.png" style="height:150px;"> </a>
	</div>

			
				<ul>
					<li > <a href = "index.html" id= "0" onClick= "nav_li_selected(0)"> Home </a> </li>
					<li> <a href = "services.php" id= "1" onClick= "nav_li_selected(1)"> Services </a> </li>
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
		
		
		
	<!-- Services start-->
	
	<div class="services">
	<h1 class="section-title">Services </h1>
	 
	
	 
	<div class="services-container">
	<div class="service-box"> 
	<div class="serice-img">
	<img src="images/services_kitchen.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	<div class="service-title">Kitchen </div>

	
	</div>
	
	
	<div class="service-box"> 
	<div class="serice-img">
	<img src="images/galary2.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title">Restaurant Setup </div>
	
	</div>
	
	
	<div class="service-box"> 
	<div class="serice-img">
	<img src="images/galary2.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title">Package </div>
	
	
	</div>
	</div>
	
	</div>
	
	
														<!--Services end-->