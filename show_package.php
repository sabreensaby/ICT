
<!doctype html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
      <?php include("include/nav.inc") ?>
<!-- Navigation Bar ends -->
		
		
<?php 
include('server.php');
$sql = "SELECT package_name, package_desc, package_price  FROM package";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
	?>
	

<section class="priceList">
	<div class="heading">
			<h2 class="section-title">Packages</h2>
		</div>
	<div class="container">
		<div class="row" style="width: 100%">
			<div class="col-4">
				<div class="packages">
					<table>
						<tr>
						<td class="packname"> <?php echo $row["package_name"]?></td>
						<td><h6>PACKAGE DESCRIPTION</h6></td>
						<td> <?php echo $row["package_desc"]?></td>
						<td> <div class="pricetag"><?php //echo $row["package_price"]?>300000/-</div></td>
						<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="col-4">
				<div class="packages">
					<table>
						<tr>
						<td class="packname"> <?php echo $row["package_name"]?></td>
						<td><h6>PACKAGE DESCRIPTION</h6></td>
						<td> <?php echo $row["package_desc"]?></td>
						<td> <div class="pricetag"><?php //echo $row["package_price"]?>350000/-</div></td>
						<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="col-4">
				<div class="packages">
					<table>
						<tr>
						<td class="packname"> <?php echo $row["package_name"]?></td>
						<td><h6>PACKAGE DESCRIPTION</h6></td>
						<td> <?php echo $row["package_desc"]?></td>
						<td> <div class="pricetag"><?php //echo $row["package_price"]?>400000/-</div></td>
						<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="col-4">
				<div class="packages">
					<table>
						<tr>
						<td class="packname"> <?php echo $row["package_name"]?></td>
						<td><h6>PACKAGE DESCRIPTION</h6></td>
						<td> <?php echo $row["package_desc"]?></td>
						<td> <div class="pricetag"><?php //echo $row["package_price"]?>370000/-</div></td>
						<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="col-4">
				<div class="packages">
					<table>
						<tr>
						<td class="packname"> <?php echo $row["package_name"]?></td>
						<td><h6>PACKAGE DESCRIPTION</h6></td>
						<td> <?php echo $row["package_desc"]?></td>
						<td> <div class="pricetag"><?php //echo $row["package_price"]?>280000/-</div></td>
						<td><button style="padding:10px;display: inline-block;">ADD TO CART</button></td>
						</tr>
					</table>
				</div>	
			</div>
		</div>
	</div>
</section>	

<?php include("include/footer.inc") ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<?php } 
} else {
    echo "0 results";
}
?>