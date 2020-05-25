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
		    		<h2>Service Types</h2>
		    		<p>Where will your Business be this 
		    		time next year?</p>
		    	</div>
		    </div>
		</section>
		
		<!-- Services start-->

		<div class="services">
			<div class="container">
				<div class="heading">
					<h2 class="section-title">Service types</h2>
					<p class="subline">Find the best services for your businesses, We help businesses like your everyday</p>
				</div>
				<div class="services-container">

					<?php 
						$service_id = "";
						if(isset($_REQUEST['service_id']) && !empty($_REQUEST['service_id'])){
							$service_id = $_REQUEST['service_id'];
						}
						$service_types_lists = print_service_types_by_service_id($service_id);

						foreach ($service_types_lists as $service_type_lists) {

							$img_name = $service_type_lists['img_name'];
							$path = "images/".$img_name;
							//show_kitchen_staff
							$page_link = "items_list.php?id=".$service_type_lists['id'];
							if($service_type_lists['is_staff_page']=="yes"){
								$page_link = "show_kitchen_staff.php";
							}

						?>

							<a href="<?php echo $page_link;?>" class="service-box col-4"> 
								<div class="serice-img">
									<img src="<?php echo $path;?>" class="img-responsive" alt="img" title="img">
								</div>
								<div class="service-title"><?php echo ucwords($service_type_lists['service_type']); ?></div>
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