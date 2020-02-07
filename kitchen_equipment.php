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

<h2>Add Equipment</h2>
	</div>
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Equipment Type</label>
<select name="type">
  <option value="Select">Select</option>
  <option value="cook">Cooking Equipment</option>
  <option value="benchtop">Benchtop</option>
  <option value="coffee">Coffee Equipment</option>
    <option value="juicers">Juicers</option>
  <option value="pizza">Pizza Equipment and accessories</option>
    <option value="bakery">Bakery Equipment</option>
  <option value="display">Food Display Cases</option>
    <option value="dishwasher">Dishwasher</option>

</select>
</div>

<div class="input-group">
<label>Quality</label>
<select name="quality">
  <option value="Select">Select</option>
  <option value="2star">2 Star</option>
  <option value="3star">3 Star</option>
  <option value="4star">4 Star</option>
    <option value="5star">5 Star</option>

</select>
</div>

<div class="input-group">
<label>Details</label>
<textarea name="details"></textarea><br>
</div>
<div class="input-group">
<label>Price</label>
<input type="text" name="price" required><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_equip">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_equip">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>