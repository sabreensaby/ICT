<?php include_once('server.php');?>
<?php $feedbacks = print_feedback(); ?>
<!doctype html>
<html>
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- meta character set -->
<meta charset="utf-8">
<title> Feedback </title>
<?php require_once 'include/header_css.php'; ?>

</head>
<body>
<div id="wrapper">
<!-- Navigation Bar -->
      <?php include("include/nav.inc") ?>
<!-- Navigation Bar ends -->
<section id="newSlider" class="lazy slider" data-sizes="50vw">
    <div class="sliderImg kitchenSetimg" style="background-image: url(./images/feedback.jpg);background-size: cover;background-position: center;">
    	<div class="slideText">
    		<h2>Feedback</h2>
    		<p>Where will your Business be this 
    		time next year?</p>
    	</div>
    </div>
</section>	
<section id="feedbackfoorm" class="feedbackfoorm section">
	<div class="container">
		<div class="heading">
			<h2 class="section-title">Feedback</h2>
		</div>
		<div class="fdform fdd row">
			<div class="col-12">
				<form action="<?php echo ADMIN_ACTION_URL;?>?action=feedback" method="post">
					<label for="fname">Full Name</label>
					<input type="text" required class="form-control" id="fname" name="firstname" placeholder="John M. Doe">
					<label for="email">Email</label>
					<input type="text" required id="email" name="email" placeholder="john@example.com">
					<label for="city">City</label>
					<input type="text"  id="city" name="city" placeholder="New York">
					<label for="Comment">Comment</label>
					<textarea id="Comment" required name="comment" placeholder="Feel Free to Comment"></textarea>
					<button type="submit" class="btn btn-primary btn-large">Submit</button>
				</form>
				
			</div>	
		</div>
	</div>
</section>
<!-- Success stories-->
<section class="happyClients section">
	<div class="container">
  		<div class="heading">
			<h2 class="section-title">Happy Clients</h2>
		</div>
	
		<div id="newSlider"  class="lazy slider" data-sizes="50vw">
			<?php foreach($feedbacks as $feedback):?>
				<div class="slideText1">
					<p><?php echo $feedback['comment'];?></p><h6><?php echo $feedback['name'];?></h6>
				</div>
			<?php endforeach;?>
		</div>
	</div>
	
</section>
<div class="blank" style="width:80px;">
<p>&nbsp; &nbsp </p>
</div>	

<!-- footer -->
<?php include("include/footer.inc"); ?>


	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="./js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
    jQuery(document).on('ready', function() {
      
		jQuery(".lazy").slick({
      	slidesToScroll: 1,
      	slidesToShow: 1,
      	arrows:true,
      	autoplay:true,
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>
</body>
</html>