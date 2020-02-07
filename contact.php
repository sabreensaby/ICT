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


</head>
<body>
	<div id="wrapper">
	

	
	<!-- Navigation Bar -->
	         <?php include("include/nav.inc") ?>
	<!-- Navigation Bar ends -->

	
	
				<!---- Map --->
				
 <div id="cont" > 
 <div id="contactus">
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
					<div class="inputgroup">
                    <p><select name="contact_subject">
                          <option value="Support">Support</option>
                          <option value="Question">Question</option>
                          <option value="Report a Bug">Report a Bug</option>
                        </select>
                    </p>
					</div>
                    <div class="inputgroup">
                    <p><textarea name="contact_message" cols="37" rows="10" title="Drop us a line." placeholder="Your comment here" required="required"></textarea></p>
					</div>
                    <button type="submit" class="btnform" name="send_message">Send Message</button>
              </form></div>
    </div>
 <div id ="contact">
 <h1> Contact Number:   </h1>
 <p> +919274747410  </p>
 <h1> Location:   </h1>
	<p> 10 Chanakya complex, vania and circle, Nadiad Gujarat 387001, India   </p>
	
	
 </div>
 
 </div>
 
 <!--Contact form start-->
    
    
	
 
 
 <section>
  
 <iframe src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58899.32436938597!2d72.83082164248833!3d22.683308042105224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5b1b136ff49f%3A0xad7d4ac9a241da65!2sGujarat%20387001%2C%20India!5e0!3m2!1sen!2sau!4v1579064579292!5m2!1sen!2sau" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section>
    				
				
				<!--- Map ends--->
	
	
	
	
	
													<!-- footer --> 
	 <?php include("include/footer.inc") ?>
	<!-- footer end -->
    
</body>
</html>