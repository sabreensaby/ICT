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
		<h1 style="text-align:center">STAFF</h1>
		
<?php 
include('server.php');
$sql = "SELECT name, email, role, skills,years_of_experience,additional_details  FROM kitchen_staff";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	?>
	
	
	<table>
<tr>
<th>STAFF NAME </th>
<th> EMAIL </th> 
<th> ROLE</th>
<th>MORE ACTION</th>
</tr>

<tr>

<td> <?php echo $row["name"]?></td>
<td> <?php echo $row["email"]?></td>
<td> <?php echo $row["skills"]?></td>
<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
</tr>

</table>

	
   <?php }
} else {
    echo "0 results";
}
?>
