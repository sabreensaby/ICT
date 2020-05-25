<?php include('server.php'); ?>
<!doctype html>
<html>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- meta character set -->
	<meta charset="utf-8">
	<title> Kitchen Staff </title>
	<?php require_once 'include/header_css.php'; ?>
</head>
<body>
	<div id="wrapper">
		<!-- Navigation Bar -->
		<?php include("include/nav.inc") ?>
		<!-- Navigation Bar ends -->
		
		<!-- Services start-->

		<div class="services">
			<div class="container">
				<div class="heading">
					<h1 class="section-title">Kitchen Staff</h1>
				</div>
				<div class="services-container">
					<table class="table" id="kitchen_stat">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Roll</th>
								<th>Sallery</th>
								<th>Experience</th>
								<th>Skills</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $kitchen_staff = print_kitchen_staff();

						foreach ($kitchen_staff as $staff) {
							//print_r($staff);
							?>
								<tr>
									<td><?php echo $staff['staff_name'] ?></td>
									<td><?php echo $staff['staff_email'] ?></td>
									<td><?php echo $staff['staff_role'] ?></td>
									<td>₹ <?php echo $staff['price'] ?></td>
									<td><?php echo $staff['experience'] ?></td>
									<td><?php echo $staff['skills'] ?></td>
									<td> <a href="<?php echo ADMIN_ACTION_URL;?>?action=buy_service&id=<?php echo $staff['id'] ?>" class="btn btn-primary">Add to cart</a> </td>
								</tr>
						<?php }
							// $img_name = $service_category_list['img_name'];
							// $path = "images/".$img_name;
						?>

							
					</table>

				</div>
			</div>
		</div>
	</div>
<!--Services end-->
<?php include("include/footer.inc") ?>
</body>
</html>