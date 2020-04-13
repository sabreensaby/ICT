<?php include 'server.php'?>
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

</head>
<body>
	<div id="wrapper">
	

	
	<!-- Navigation Bar -->
	         <?php include("include/nav.inc") ?>
	<!-- Navigation Bar ends -->
<section id="newSlider" class="lazy slider" data-sizes="50vw">
    <div class="sliderImg kitchenSetimg" style="background-image: url(./images/contactUs.jpg);background-size: cover;background-position: center;">
    	<div class="slideText">
    		<h2>Contact Us</h2>
    		<p>Where will your Business be this 
    		time next year?</p>
    	</div>
    </div>
</section>	
	
				<!---- Map --->
				
 <div id="cont" > 
 	<div class="container">
 		<div class="row" style="width: 100%;">
			 <div id ="contact" class="col-5">
				 <h1> Contact Number:   </h1>
				 <p> +919274747410  </p>
				 <h1> Location:   </h1>
					<p> 10 Chanakya complex, vania and circle, Nadiad Gujarat 387001, India   </p>
			 </div>
			 <div id="contactus" class="col-7">
			        <h1>Contact us now!</h1>
			        <p>You can contact us using the contact form below.</p>
					<div class="cont_form">
			              <form action="contact.php" method="post" >
						  <div class="inputgroup">
			                    <p><input type="text" name="contact_name" placeholder="Your Name*" class="cform-text" size="40" title="Your name" required="required"></p>
								</div>
								<div class="inputgroup">
			                    <p><input type="email" name="contact_email" placeholder="Your Email*" class="cform-text" size="40" title="Your email" required="required"></p>
								</div>
								<div class="inputgroup inputselect">
			                    <p><select name="contact_subject">
			                          <option value="Support">Support</option>
			                          <option value="Question">Question</option>
			                          <option value="Report a Bug">Report a Bug</option>
			                        </select>
			                    </p>
								</div>
			                    <div class="inputgroup inputText">
			                    <p><textarea name="contact_message" cols="37" rows="10" title="Drop us a line." placeholder="Your comment here" required="required"></textarea></p>
								</div>
			                    <button type="submit" class="btnform" name="send_message">Send Message</button>
			              </form>
			        </div>
			 </div>
 		</div>
 </div>
 
 </div>
 
 <!--Contact form start-->
    
    
	
 
 
 <section>
  
 <iframe src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58899.32436938597!2d72.83082164248833!3d22.683308042105224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5b1b136ff49f%3A0xad7d4ac9a241da65!2sGujarat%20387001%2C%20India!5e0!3m2!1sen!2sau!4v1579064579292!5m2!1sen!2sau" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section>
    				
				
				<!--- Map ends--->
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
													<!-- footer --> 
	 <?php include("include/footer.inc") ?>
	<!-- footer end -->
    
</body>
</html>