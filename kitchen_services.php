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
<div class="background_image"><img src = "images/background_image.jpg"  alt="img" title="img" style= "height:50%;width:100%; opacity:0.3;z-index:-1;">

<h2>Add Kitchen Service</h2>
	
 </div>

<form action="#" method="post">


  <div class="input-group">
  <label>Type of Kitchen Service</label>
<select name="kitchen_type">
  <option value="Select">Select</option>
  <option value="high">High End Restaurant</option>
  <option value="low">Low Budget Restaurant</option>
  <option value="casual">Casual Dining Restaurant</option>
    <option value="fast">Fast Food Cafe</option>
 

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
<button type="submit" class="btn" name="ok_service">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_service">CANCEL</button>
</div>
</form>







</div>
		
	<?php include("include/footer.inc") ?>
</body>
</html>