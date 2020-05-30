<?php include('server.php'); ?>
<!doctype html>
<html>
<head>
	<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- meta character set -->
		<meta charset="utf-8">
	<title> Consultation </title>
	<?php require_once 'include/header_css.php'; ?>
</head>
<body>
	<div id="wrapper">
		<!-- Navigation Bar -->
		<?php include("include/nav.inc") ?>
		<!-- Navigation Bar ends -->
		<section id="newSlider" class="lazy slider" data-sizes="50vw">
		    <div class="sliderImg kitchenSetimg" style="background-image: url(./images/kitchenSetup.jpg);background-size: cover;">
		    	<div class="slideText">
		    		<h2>Our Services</h2>
		    		<p>Where will your Business be this 
		    		time next year?</p>
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

					<?php 
						$service_category_lists = print_service_category();
						foreach ($service_category_lists as $service_category_list) {

							$img_name = $service_category_list['img_name'];
							$path = "images/".$img_name;
						?>

							<a href="service_types.php?service_id=<?php echo $service_category_list['id'];?>" class="service-box col-4"> 
								<div class="serice-img">
									<img src="<?php echo $path;?>" class="img-responsive" alt="img" title="img">
								</div>
								<div class="service-title"><?php echo ucwords($service_category_list['service_cat']); ?></div>
								<div class="service-desc"><?php echo $service_category_list['service_description']; ?></div>
							</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<!--Services end-->
<?php include("include/footer.inc") ?>
</body>
</html>