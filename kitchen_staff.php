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

<h2>Add Staff</h2>
	</div>
 </div>

<form action="#" method="post">
<div class="input-group">
<label>Name</label>
<input type="text" name="name" required><br>
</div>
<div class="input-group">
<label>E-mail</label>
<input type="email" pattern="[^ @]*@[^ @]*" name="email" required><br>
</div>

  <div class="input-group">
  <label>Role</label>
<select name="role">
  <option value="Select">Select</option>
  <option value="headchef">Head Chef</option>
  <option value="souschef">Sous Chef</option>
  <option value="dessertexpert">Dessert Expert</option>
    <option value="helper">Helper</option>
  <option value="commi1">Commi 1</option>
    <option value="commi2">Commi 2</option>
  <option value="receptionist">Receptionist</option>
    <option value="cleaners">Cleaners</option>

</select>
</div>
<div class="input-group">
<label>Skills</label>
<input type="text" name="skills" required><br>
</div>
<div class="input-group">
<label>Year of Experience</label>
<select name="year">
  <option value="Select">Select</option>
  <option value="less than one year">Less Than One Year</option>
  <option value="2year">2 Years</option>
  <option value="3year">3 Years</option>
    <option value="4year">4 Years</option>
  <option value="5year">5 Years</option>
</select>
</div>

<div class="input-group">
<label>Additional Details</label>
<textarea name="additional_details"></textarea><br>
</div>
<div class="input-group">
<button type="submit" class="btn" name="ok_staff">OK</button>
</div>
<div class="input-group">
<button type="cancel" class="btn" name="cancel_staff">CANCEL</button>
</div>
</form>







</div>
		
	
</body>
</html>