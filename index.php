<!doctype html>
<html>
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- meta character set -->
<meta charset="utf-8">
<title> Consultation </title>

<link href="style.css" rel="stylesheet" type="text/css">
<!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="slick.css">

</head>
<body>
<div id="wrapper">



<!-- Navigation Bar -->
      <?php include("include/nav.inc") ?>
<!-- Navigation Bar ends -->

<section id="newSlider" class="lazy slider" data-sizes="50vw">
    <div class="sliderImg" style="background-image: url(./images/slider_1.jpg);background-size: cover;">
    	<div class="slideText">
    		<h2>Startup</h2>
    		<p>Where will your Business be this 
    		time next year?</p>
    	</div>
    </div>
    <div class="sliderImg" style="background-image: url(./images/slider_3.jpg);background-size: cover;">
    	<div class="slideText">
    		<h2>OPERATIONS</h2>
    		<p>Where will your Business be this 
    		time next year?</p>
    	</div>
    </div>
    <div class="sliderImg" style="background-image: url(./images/slider_2.jpg);background-size: cover;">
    	<div class="slideText">
    		<h2>BUSINESS PLANNING</h2>
    		<p>when was the last time you thought of having a business</p>
    	</div>
    </div>
</section>


<!-- Services start-->

<div class="services">
	<div class="container">
		<div class="heading">
			<h2 class="section-title">Our Services</h2>
			<p class="subline">Find the best services for your businesses, We help businesses like your everyday</p>
		</div>
		<div class="services-container">
			<a href="#" class="service-box col-4"> 
				<div class="serice-img">
					<img src="images/ser_1.png" class="img-responsive" alt="img" title="img">
				</div>
				<div class="service-title">Kitchen Setup</div>
				<div class="service-desc">
				The Kitchen Service provides services like kitchen staff, kitchen equipments and different kitchen services
				</div>
			</a>
			<a href="#" class="service-box col-4"> 
				<div class="serice-img">
					<img src="images/ser_2.png" class="img-responsive" alt="img" title="img">
				</div>
				<div class="service-title">Restaurant Setup </div>
				<div class="service-desc">
				Restaurant Setup provides different services for connections like water connection, gas connection and electricity connection.
				</div>
			</a>
			<a href="#" class="service-box col-4"> 
				<div class="serice-img">
					<img src="images/ser_1.png" class="img-responsive" alt="img" title="img">
				</div>
				<div class="service-title">Design Setup </div>
				<div class="service-desc">
			Design services mainly provide services like Menu design, receipies design and interior design of the restaurant.

				</div>
			</a>
		</div>
	</div>
</div>


<!--Services end-->
<!-- Background Image-->

<div id="section" class="parasection">
	<div class="parallaxText">
		<h3>We are just a click away.<br>
		start building your dreams right away.</h3>
	</div>
</div>

<!-- Background Image end-->

       
<!-- Success stories-->

<div id="stories">
	<div class="container">
		<div class="heading">
			<h2 class="section-title">Read Our Stories</h2>
		</div>
		<div id="story"> 
			<div class="space col-4"> 
				<div class="storyImg">
					<a href="#">
						<img class="img-res" src="images/blog_1.jpg">
					</a>
				</div> 
				<h3>CheeseDaddy</h3>
				 <div class="story-desc"> 
					Best Consultants to work with!
				</div>
			</div>
			<div class="space col-4"> 
				<div class="storyImg">
					<a href="#">
						<img class="img-res" src="images/blog_2.jpg">
					</a>
				</div> 
				<h3>Aquenos</h3>
				 <div class="story-desc"> 
				 Appreciate your help and services. It worked really good for our restaurant.
				 </div>
			</div>
			<div class="space col-4"> 
				<div class="storyImg">
					<a href="#">
						<img class="img-res" src="images/blog_3.jpg">
					</a>
				</div> 
				<h3>Foodies</h3>
				 <div class="story-desc"> 
				Thanks for all the solutions and services. Kudos to you and your team!
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Success stories end-->

<!-- footer -->
<?php include("include/footer.inc") ?>
   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
      	slidesToScroll: 1,
      	slidesToShow: 1,
      	arrows:false,
      	autoplay:true,
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script> 
</body>
</html>