<?php include('server.php'); ?>
<!doctype html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>	
	<?php require_once 'include/header_css.php'; ?>

</head>
<body>
	<div id="wrapper">
		<!-- Navigation Bar -->
	    <?php include("include/nav.inc") ?>
		<!-- Navigation Bar ends -->	

		<section class="priceList">
			<div class="heading">
					<h2 class="section-title">Packages</h2>
			</div>
			<div class="container">
				<div class="row" style="width: 100%;">
					<?php 
						$packages = print_packages();
						foreach ($packages as $key => $package) { ?>

							<div class="col-4">
								<div class="packages">
									<table>
										<tr>
											<td class="packname"><?php echo ucfirst($package['package_name']); ?></td>
										</tr>
										<tr>
											<td><h6>PACKAGE DESCRIPTION</h6></td></tr>
										<tr>
											<td><?php echo $package['package_desc']; ?></td></tr>
										<tr>
											<td> <div class="pricetag">₹ <?php echo $package['package_price']; ?></div></td></tr>
										<tr>
											<td>
												<a class="btn btn-primary" href="<?php echo ADMIN_ACTION_URL;?>?action=buy_package&id=<?php echo $package['id'];?>">Buy Now</a>
											</td>
											
										</tr>
									</table>
								</div>	
							</div>
					<?php }	?>
				</div>
			</div>
		</section>	
	</div>
	<?php include("include/footer.inc"); ?> 
</body>
</html>   
