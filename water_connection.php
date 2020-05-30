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
<h2>Add Water Connection </h2>
	</div>
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Water Service Provider</label>
<select name="water_provider">
  <option value="Select">Select</option>
  <option value="GWSSB">GWSSB</option>
  <option value="GWSASB">GWSASB</option>
  <option value="Gujarat Water Supplier">Gujarat Water Supplier</option>
    <option value="Earth Water Provider">Earth Water Provider</option>
 

</select>
</div>



<div class="input-group">
<label>Details</label>
<textarea name="water_details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="water_price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_water">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_water">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>