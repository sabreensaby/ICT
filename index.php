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
	images[2] = 'images/galary5.jpg';
	images[3] = 'images/galary6.jpg';
	

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
<img name="slide">
<h2> "Build Your Own Dream Restaurant, We are here to help you for your turn-key projects." </h2>
</div>
		

</div>



<!-- Services start-->

<div class="services">
	<div class="container">
		<h1 class="section-title">Services </h1>
		<div class="services-container">
			<div class="service-box"> 
				<div class="serice-img"> 
					<img src="images/kitchen.png" class="img-responsive" alt="img" title="img"> 
	
				</div>
				<div class="service-title"> Kitchen Setup</div>
				<div class="service-desc">
					The Kitchen Service provides services like kitchen staff, kitchen equipments and different kitchen services
				</div>
			</div>
			<div class="service-box"> 
				<div class="serice-img">
					<img src="images/rest.jpg" class="img-responsive" alt="img" title="img">
				</div>
				<div class="service-title">Restaurant Setup </div>
				<div class="service-desc">
					Restaurant Setup provides different services for connections like water connection, gas connection and electricity connection.

				</div>
			</div>
			<div class="service-box"> 
				<div class="serice-img">
					<img src="images/design.jpg" class="img-responsive" alt="img" title="img">
				</div>
				<div class="service-title">Deals</div>
				<div class="service-desc">
				Design services mainly provide services like Menu design, receipies design and interior design of the restaurant.

				</div>
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
	<div class="container">
	
		<h1 class="section-title">our stories </h1>
	<div id="story"> 
			<div class="space">  
				  <img src="images/galary3.jpg" class="img-res">CheeseDaddy<hr>
				
				 <div class="story-desc"> Best Consultants to work with!</div>
			</div>
			
			<div class="space"> 
				<img src="images/galary2.jpg" class="img-res">Aquenos<hr>
			 	<div class="story-desc"> Appreciate your help and services. It worked really good for our restaurant
				</div> 
			</div> 
			
			<div class="space"><img src="images/galary4.jpg" class="img-res"> Foodies<hr>
				<div class="story-desc"> Thanks for all the solutions and services. Kudos to you and your team!
				</div>
			</div>
	</div>
	</div>
</div>
<!-- Success stories end-->

<!-- footer -->
<?php include("include/footer.inc") ?>
   
</body>
</html>