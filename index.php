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
<div class= "text" >
<img name="slide" width="99%" height="400px;">
 <h2> "Build Your Own Dream Restaurant, We are here to help you for your turn-key projects." </h2> 

</div>
		</div>
		
		
		
	<!-- Services start-->
	
	<div class="services">
	<h1 class="section-title">Services </h1>
	 
	
	 
	<div class="services-container">
	<div class="service-box"> 
	<div class="service-img">
	<img src="images/kitchen.png" class="img-responsive" alt="img" title="img" >
	
	</div>
	<div class="service-title"><a href = "kitchen_setup.php">Kitchen Setup </a> </div>
	<div class="service-desc">
		
		The Kitchen Service involves taking a client's brief then designing and managing the process of the delivery of a building. 
		It can be a new building, housing project, alterations, or conservation of an existing restaurants.
		Our service range includes a wide range of architectural designing service, commercial architecture designing service, green building design service, building.
		
	</div>
	
	</div>
	
	
	<div class="service-box"> 
	<div class="service-img">
	<img src="images/rest.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title">Restaurant Setup </div>
	<div class="service-desc">
		
		The Commercial Architectural Service involves taking a client's brief then designing and managing the process of the delivery of a building. 
		It can be a new building, housing project, alterations, or conservation of an existing building.
		Our service range includes a wide range of architectural designing service, commercial architecture designing service, green building design service, building.
		
	</div>
	</div>
	
	
	<div class="service-box"> 
	<div class="service-img">
	<img src="images/design.jpg" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title">Design </div>
	<div class="service-desc">
		
		The Commercial Architectural Service involves taking a client's brief then designing and managing the process of the delivery of a building. 
		It can be a new building, housing project, alterations, or conservation of an existing building.
		Our service range includes a wide range of architectural designing service, commercial architecture designing service, green building design service, building.
		
	</div>
	
	</div>
	
	<div class="service-box"> 
	<div class="service-img">
	<img src="images/gas.png" class="img-responsive" alt="img" title="img">
	
	</div>
	
	<div class="service-title">Legal Services </div>
	<div class="service-desc">
		
		The Commercial Architectural Service involves taking a client's brief then designing and managing the process of the delivery of a building. 
		It can be a new building, housing project, alterations, or conservation of an existing building.
		Our service range includes a wide range of architectural designing service, commercial architecture designing service, green building design service, building.
		
	</div>
	
	</div>
	</div>
	
	</div>
	
	
														<!--Services end-->
														<!-- Background Image-->
														
<div id="section">


</div>
														
														<!-- Background Image end-->
							
        
													<!-- Success stories-->
													
<div id="stories">
<h1 class="section-title">our stories </h1>

<div id="story"> 

<div class="space">  <img src="images/galary3.jpg" class="img-res">XYZ Company<hr>
 

<div class="story-desc"> Pune special tea at Chai Spot Amruttulya tea is a fant.
</div></div>


<div class="space"> <img src="images/galary2.jpg" class="img-res">YZR Company<hr>
 <div class="story-desc"> It is really impossible for some people to start the day without a cup of tea or coffee.
</div> </div> 
<div class="space"><img src="images/galary4.jpg" class="img-res"> ZYH Company<hr>
<div class="story-desc">  More than 70% of the Indian population.
</div></div>

</div>
</div>
													<!-- Success stories end-->
													<!-- Admin login-->
													
<div id="section1">

</div>
													
													<!-- Admin login end-->

	<!----------Admin Area-------------->
	<a href = "admin_login.php"> Admin Login </a>
	
													<!-- footer --> 
	<?php include("include/footer.inc") ?>
    
</body>
</html>