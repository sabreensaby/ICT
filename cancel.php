<?php include('server.php');
	$order_type = "product";
	if(isset($_REQUEST['order_type'])){
        $order_id =0;
        $order_type = $_REQUEST['order_type'];

        if(isset($_REQUEST['order_id']) && $_REQUEST['order_id'] > 0 ){
            $order_id = $_REQUEST['order_id'];
        }
        
        if($_REQUEST['order_type']=="product"){
            refresh_cart_items($order_type,$order_id);
            delete_ordered_items($order_type,$order_id);

        }
        if($_REQUEST['order_type']=="package"){

            delete_ordered_items($order_type,$order_id);          
            refresh_cart_items($order_type,$order_id);
        }
        if($_REQUEST['order_type']=="service"){

            
            refresh_cart_items($order_type,$order_id);
            delete_ordered_items($order_type,$order_id);

        }
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
					<h2 class="section-title">Come Back</h2>
				</div>                
                <p><?php echo $_SESSION['username'];?>, Your order has been cancelled </p>
			</div>
		</div>
	</div>
<!--Services end-->
<?php include("include/footer.inc") ?>
</body>
</html>