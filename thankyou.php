<?php include('server.php');
	$order_type = "product";
	$thank_str = "for placing the order";
	$order_id = 0;
	if(isset($_REQUEST['order_type'])){
		$order_type = $_REQUEST['order_type'];
		if(isset($_REQUEST['order_id']) && $_REQUEST['order_id'] > 0 ){
			$order_id = $_REQUEST['order_id'];
        }


		if($order_type == 'service'){
			refresh_cart_items($order_type,$order_id);
			$thank_str = "for buying service";
		}
		if($order_type == 'package'){
			refresh_cart_items($order_type,$order_id);
			$thank_str = "for buying package";
		}

		refresh_cart_items($order_type);
	}
?>

<html>
<head>
	<title>Cart</title>
	<?php require_once 'include/header_css.php'; ?>
</head>
<body>

	<div id="wrapper">
		<!-- Navigation Bar -->
		<?php include("include/nav.inc"); ?>

		<div class="services">
			<div class="container thanksyou">
				<div class="heading">
					<h2 class="section-title">Thank you</h2>
				</div>                
                <p>Thankyou <?php echo $_SESSION['username']. " ". $thank_str;?>  .</p>
                <p>Order ID : # <?php echo isset($_REQUEST['order_id'])?$_REQUEST['order_id'] : "";?></p>
			
			</div>
		</div>
	</div>
<!--Services end-->
<?php include("include/footer.inc") ?>
</body>
</html>