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
<h2>Add Package</h2>
	</div>
 </div>

<form action="#" method="post">
<div class="input-group">
<label>Package Name</label>
<input type="text" name="package_name" required><br>
</div>

<div class="input-group">
<label>Package Description</label>
<textarea name="package_desc"></textarea><br>
</div>
<div class="input-group">
<label>Package Price</label>
<input type="text" name="package_price" required><br>
</div>


<div class="input-group">
<button type="submit" class="btn" name="ok_package">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_package">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>