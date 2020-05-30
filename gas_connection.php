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

<h2>Add Gas Service</h2>
	</div>
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Gas Service Provider</label>
<select name="gas_provider">
  <option value="Select">Select</option>
  <option value="Indane">Indane Gas</option>
  <option value="Bharat">Bharat Gas</option>
  <option value="Gujarat">Gujarat Gas</option>
    <option value="Indian">Indian Gas</option>
 

</select>
</div>



<div class="input-group">
<label>Details</label>
<textarea name="gas_details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="gas_price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_gas">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_gas">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>