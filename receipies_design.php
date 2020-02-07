<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
	       <?php include("include/nav.inc") ?>
															<!-- Navigation Bar ends -->
<div class="admin_service" style="margin-left:40%; margin-bottom:3%; margin-top:2%;">
<h2>Add Receipies Design </h2>
	</div>
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Type of Receipies</label>
<select name="Receipie_type">
  <option value="Select">Select</option>
  <option value="Fast Food Receipies">Fast food receipies</option>
  <option value="Authentic Food Receipies">Authentic Food Receipies</option>
  <option value="Modern Food Receipies">Modern Food Receipies</option>
  <option value="Dessert&Bakery Food Receipies">Dessert&Bakery Food Receipies</option>
    
 

</select>
</div>



<div class="input-group">
<label>Details</label>
<textarea name="receipie_details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="receipie_price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_receipie">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_receipie">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>