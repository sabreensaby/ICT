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
<h2>Add Menu Designs </h2>
	</div>
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Type of Menu</label>
<select name="menu_type">
  <option value="Select">Select</option>
  <option value="Fun Restaurant Menu Designs">Fun Restaurant Menu Designs</option>
  <option value="Modern Menu Designs">Modern Menu Designs</option>
  <option value="Old School Menu Designs">Old School Menu Designs</option>
    
 

</select>
</div>



<div class="input-group">
<label>Details</label>
<textarea name="menu_details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="menu_price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_menu">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_menu">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>