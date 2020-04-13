<!doctype html>
<html>
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- meta character set -->
<meta charset="utf-8">
<title> Consultation </title>

<link href="style.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
		<div class="fdform row">
			<div class="col-12">
				<label for="fname">Full Name</label>
                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="New York">
                <label for="Comment">Comment</label>
                <textarea placeholder="Feel Free to Comment"></textarea>
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
    <div class="col-12">
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
      <h6>Sabreen</h6>
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
				<h3>XYZ Company</h3>
				 <div class="story-desc"> 
				 	Proin lacinia nisl ut ultricies posuere nulla ut imperdiet nunc. Quisque id tellus vitae mauris feugiat comodone, donec pretium odio nec sagittis euismod.
				</div>
			</div>
			<div class="space col-4"> 
				<div class="storyImg">
					<a href="#">
						<img class="img-res" src="images/blog_2.jpg">
					</a>
				</div> 
				<h3>XYZ Company</h3>
				 <div class="story-desc"> 
				 	Proin lacinia nisl ut ultricies posuere nulla ut imperdiet nunc. Quisque id tellus vitae mauris feugiat comodone, donec pretium odio nec sagittis euismod..
				</div>
			</div>
			<div class="space col-4"> 
				<div class="storyImg">
					<a href="#">
						<img class="img-res" src="images/blog_3.jpg">
					</a>
				</div> 
				<h3>XYZ Company</h3>
				 <div class="story-desc"> 
				 	Proin lacinia nisl ut ultricies posuere nulla ut imperdiet nunc. Quisque id tellus vitae mauris feugiat comodone, donec pretium odio nec sagittis euismod.
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Success stories end-->

<!-- footer -->
<?php include("include/footer.inc") ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>