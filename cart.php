<?php include('server.php'); ?>

<html>
<head>
	<title>Cart</title>
	<?php require_once 'include/header_css.php'; ?>
</head>
<style type="text/css">
.cartservice td, th{width: auto !important;float: none;}
</style>
<body>

	<div id="wrapper">
		<!-- Navigation Bar -->
		<?php include("include/nav.inc"); ?>

		<div class="services cartservice">
			<div class="container">
				<div class="heading">
					<h2 class="section-title">CART</h2>
					<p class="subline">Find the best services for your businesses, We help businesses like your everyday</p>
				</div>
				<table class="table">
					<tr>
						<th></th>
						<th>Product</th> 
						<th>Price</th>
						<th>Qty</th>
						<th>Total</th>
						<th></th>
					</tr>
			
					<?php 
						$total_amt = 0;
						$cart_items = print_cart_items();
						if (count($cart_items) > 0) {
							// output data of each row
							foreach ($cart_items as $cart) {
								$path = "images/".$cart["img_name"];
								$total_price = $cart["price"]*$cart["qty"]; 

								$total_amt = $total_amt+$total_price;
								
								?>
								<tr>

									<td><img src="<?php echo $path; ?>" class="img" width="80"></td>						
									<td><?php echo $cart["product_name"]?></td>
									<td>₹ <?php echo $cart["price"]?></td>

									<td><?php echo $cart["qty"]?></td>
									<td>₹ <?php echo $total_price;?></td>
									
									
									<td><a href="<?php echo ADMIN_ACTION_URL;?>?action=remove_item&id=<?php echo $cart["id"]; ?>" class="btn btn-danger">Delete</a></td>
									
								</tr>

							<?php } 
						}
					?> 
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th>Total</th>
							<th>₹ <?php echo $total_amt; ?></th>
							<th></th>
						</tr> 

				</table>
				<div>
					<a href="checkout.php" class="btn btn-success btn-lg">Checkout</a>
				</div>
			</div>
		</div>
	</div>
<!--Services end-->
<?php include("include/footer.inc") ?>
</body>
</html>