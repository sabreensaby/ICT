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

	<div class="services sritems">
		<div class="container">
 <div class="heading">
                        <h2 class="section-title">Products</h2>
                    </div>
			<div class="row" style="width: 100%">

				<?php 
					$cat_id = "";
					if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
						$cat_id = $_REQUEST['id'];
					}
					$items_lists = print_items_by_cat_id($cat_id);
				?>

				<?php foreach ($items_lists as $key => $item) {
						$path = "images/".$item['img_name'];
					?>
					<div class="col-4">
						<a href="item-detail.php?id=<?php echo $item['id'];?>">
							<div class="item-img">
								<img src="<?php echo $path; ?>" class="img-product">
							</div>
							<h3 class="title"><?php echo $item['product_name'];?></h3>
						</a>
					</div>
				<?php }?>
			</div>

			
</div>
			</div>
		</div>
	</div>
<!--Services end-->
<?php include("include/footer.inc") ?>
</body>
</html>