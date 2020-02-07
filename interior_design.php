<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
 
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
	       <?php include("include/nav.inc") ?>
															<!-- Navigation Bar ends -->
<div class="admin_service" style="margin-left:40%; margin-bottom:3%; margin-top:2%;">

<h2>Add Interior Design </h2>
	</div>
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Type of Interior Design</label>
<select name="Interior_Design_type">
  <option value="Select">Select</option>
  <option value="Dine Area Design">Dine Area Design</option>
  <option value="Kitchen Design">Kitchen Design</option>
  <option value="Bar Design">Bar Design</option>
 
    
 

</select>
</div>



<div class="input-group">
<label>Details</label>
<textarea name="interior_details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="interior_price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_interior">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_interior">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>