

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
		
<div class="cusheadertitle">
	<h1 style="text-align:center">PACKAGES</h1>
</div>		
<?php 
include('server.php');
$sql = "SELECT package_name, package_desc, package_price  FROM package";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
	?>
	
	
	
	<table>
<tr>
<th>PACKAGE NAME </th>
<th> PACKAGE DESCRIPTION </th> 
<th> PACKAGE PRICE</th>
<th>MORE ACTION</th>
</tr>

<tr>

<td> <?php echo $row["package_name"]?></td>
<td> <?php echo $row["package_desc"]?></td>
<td> <?php echo $row["package_price"]?></td>
<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
</tr>

</table>
	

<?php include("include/footer.inc") ?>
       
<?php } 
} else {
    echo "0 results";
}
?>