<?php include('server.php'); ?>

<html>
	<head>
		<title>Services</title>
		<?php require_once 'include/header_css.php'; ?>

	</head>
	<body>

<div id="wrapper">
	<!-- Navigation Bar -->
	<?php include("include/nav.inc"); ?>

	<div class="services">
		<div class="container">

			<h1 style="text-align:center">STAFF</h1>

			<table width="100%">
				<tr>
					<th>STAFF NAME </th>
					<th> EMAIL </th> 
					<th> ROLE</th>
					<th>MORE ACTION</th>
				</tr>
		
				<?php 
					$servicetype_id = "";
					if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
						$servicetype_id = $_REQUEST['id'];
					}


					$service_lists = print_service_by_service_id($servicetype_id);

					if (count($service_lists) > 0) {
			    	// output data of each row
					foreach ($service_lists as $service_list) { ?>
						<tr>

							<td> <?php echo $service_list["staff_name"]?></td>
							<td> <?php echo $service_list["staff_email"]?></td>
							<td> <?php echo $service_list["staff_role"]?></td>
							<td><button>ADD TO CART</button></td>
						</tr>

					<?php } 
					}
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