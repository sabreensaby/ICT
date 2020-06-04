<?php include('server.php'); ?>
<!doctype html>
<html>
<head>

<title> About </title>
<?php require_once 'include/header_css.php'; ?>

</head>
<body>
	<div id="wrapper">
	
<!-- Navigation Bar -->
	       <?php include("include/nav.inc") ?>
															<!-- Navigation Bar ends -->
<section id="newSlider" class="lazy slider" data-sizes="50vw">
    <div class="sliderImg kitchenSetimg" style="background-image: url(./images/aboutUs.jpg);background-size: cover;">
    	<div class="slideText">
    		<h2>About Us</h2>
    		<p>Where will your Business be this 
    		time next year?</p>
    	</div>
    </div>
</section>															
<!-- About start-->
<section class="aboutUsLoop section">
	<div class="container">
		<div class="row" style="width: 100%;">
			<div class="col-6">
				<div class="aboutboxcontent">
					<h3>Nostalgic</h3>
					<h4>Eatery</h4>
					<p>We are team of experts with major qualifications from hotel industry. We have many years of practical experience working from trainee to Head of Corporate Operations. We have screened more than 20 restaurants and are providing restaurant consultancy services to more than 5 clients. We assure excellent response and transparent services for your entire restaurant start-up requirements. Do not get in to wrong directions. Contact us now and get a clear direction for success.
					</p>
				</div>
			</div>
			<div class="col-6">
				<div class="aboutboxImg">
					<img src="./images/abimg1.jpg">
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section" class="aboutUsLoop abbox2 section">
	<div class="container">
		<div class="row" style="width: 100%;">
			<div class="col-6">
				<div class="aboutboxImg">
					<img src="./images/abimg2.jpg">
				</div>
			</div>
			<div class="col-6">
				<div class="aboutboxcontent white">
					<h3>Our</h3>
					<h4>Services</h4>
					<p>The services we provide is how to setup the kitchen and restaurant. How to design the services and legal services as well.

					</p>
				</div>
			</div>
		</div>
	</div>
</section>

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
														<!-- About end-->
															
															<!-- footer --> 
<?php include("include/footer.inc") ?>
	
</body>
</html>