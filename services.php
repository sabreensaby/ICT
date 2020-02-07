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
	images[0] = 'images/slide1.jpg';
	images[1] = 'images/slide2.jpg';
	images[2] = 'images/slide3.jpg';
	images[3] = 'images/slide4.jpg';
	

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

<img name="slide" width="99.9%" height="500px;">
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

The Kitchen Service provides services like kitchen staff, kitchen equipments and different kitchen services

</div>

</div>


<div class="service-box">
<div class="service-img">
<img src="images/rest.jpg" class="img-responsive" alt="img" title="img">

</div>

<div class="service-title">Restaurant Setup </div>
<div class="service-desc" style="color:black;">

Restaurant Setup provides different services for connections like water connection, gas connection and electricity connection.

</div>
</div>


<div class="service-box" style="color:black;">
<div class="service-img">
<img src="images/design.jpg" class="img-responsive" alt="img" title="img">

</div>

<div class="service-title" style="color:black;">Design </div>
<div class="service-desc" style="color:black;">

Design services mainly provide services like Menu design, receipies design and interior design of the restaurant.

</div>

</div>



</div>


<!--Services end-->
 <?php include("include/footer.inc") ?>
</body>
</html>