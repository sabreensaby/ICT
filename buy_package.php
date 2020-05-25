<?php include('server.php') ?>
<?php 
	$first_name = "";
	$last_name = "";
	$email = "";
	$address = "";
	$city = "";
	$state = "";
	$zip = $phone ="";

	if(!isset($_SESSION['id'])){
		header('location:login.php?err=2');
	} else {
		$user_data = get_billing_details();
		$first_name = $user_data[0]['name'];
		$email = $user_data[0]['email'];
		$phone = $user_data[0]['contactno'];
		$address = $user_data[0]['address'];
		$city = $user_data[0]['city'];
		$state = $user_data[0]['state'];
		$zip = $user_data[0]['zip_code'];

	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
        <?php require_once 'include/header_css.php'; ?>
        <style>
            input[type=text]{width:100%;margin-bottom:20px;padding:12px;border:1px solid #e0e1e2;border-radius:0}label{font-family:Roboto,sans-serif;font-weight:500;font-size:15px}.icon-container{margin-bottom:20px;padding:7px 0;font-size:24px}.btns{font-size:13px;float:right;border:0;text-transform:uppercase;font-family:Roboto,sans-serif;padding:15px 25px;font-weight:700;background-color:orange;border-radius:0!important}.btns:hover{background-color:#000;color:#fff}a{color:#2196f3}hr{border:1px solid #d3d3d3}span.price{float:right;color:grey}
        </style>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation Bar -->
            <?php include("include/nav.inc") ?>
            <!-- Navigation Bar ends -->
            <section class="full internal-page checkOut section">
                <div class="container">
                    <div class="heading">
                        <h1>Checkout</h1>
					</div>
					<form action="<?php echo ADMIN_ACTION_URL?>?action=purchase_package" method="post">
						<div class="row">
                            <div class="col-8">
								<h3>Billing Address</h3>
								<div class="row">
									<div class="col-6">
										<label for="first_name">Name</label>
										<input type="text" id="state" name="first_name" value="<?php echo $first_name;?>" placeholder="First Name">
									</div>
									<div class="col-6">
										<label for="phone">Phone No.</label>
										<input type="text" id="phone" value="<?php echo $phone;?>" name="phone" placeholder="Phone No.">
									</div>
								</div>
								<label for="email">Email</label>
								<input type="text" id="email" name="email" placeholder="john@example.com" value="<?php echo $email;?>">
								<label for="adr">Address</label>
								<input type="text" id="adr" value="<?php echo $address;?>" name="address" placeholder="542 W. 15th Street">
								<label for="city">City</label>
								<input type="text" id="city" value="<?php echo $city;?>" name="city" placeholder="New York">
								<div class="row">
									<div class="col-6">
										<label for="state">State</label>
										<input type="text" id="state" value="<?php echo $state;?>" name="state" placeholder="NY">
									</div>
									<div class="col-6">
										<label for="zip">Zip</label>
										<input type="text" id="zip" value="<?php echo $zip;?>" name="zip" placeholder="10001">
									</div>
								</div>
								<h3>Payment</h3>
								<label for="fname">Accepted Cards</label>
								<div class="icon-container">
									<i class="fab fa-cc-visa" style="color:navy;"></i>
									<i class="fab fa-cc-amex" style="color:blue;"></i>
									<i class="fab fa-cc-mastercard" style="color:red;"></i>
									<i class="fab fa-cc-discover" style="color:orange;"></i>
									<i class="fab fa-cc-paypal"></i>
								</div>
								<p>
								<input type="radio" value="paypal" checked>
								<label for="fname">Payment using Paypal</label></p>
								<div class="" style="float:left;">
									<button type="submit" name="place_order" class="btn btn-info">Submit</button>
								</div>
                               
                            </div>
                            <div class="col-4">
                                <div class="coTotal">
                                    <?php $cart_items = print_purchases_package(); ?>
                                    <h4>Cart <span class="price"><i class="fa fa-shopping-cart"></i> </span></h4>
                                    <?php $total_amt = 0; foreach ($cart_items as $cart) { ?>
                                    <p><a href="#"><?php echo $cart["package_name"]?></a> <span class="price">
										₹ <?php echo $cart["package_price"]?></span></p>
                                    <p><a href="#"><?php echo $cart["package_desc"]?></a></p>
                                    <?php } ?>
                                    <hr>
                                </div>
                            </div>
							<input type="hidden" name="amount" value="<?php echo $cart["package_price"];?>">
						</div>
					</form>
                </div>
            </section>
            <!-- Kitchen SetUp start-->
        </div>
        <!-- footer end -->
        <?php include("include/footer.inc") ?> 
    </body>
</html>