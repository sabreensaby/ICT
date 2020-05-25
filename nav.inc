<div class="topbar">
	<div class="container-fluid">
		<div class="float-right">
			<div class="cart-icon">
				<?php $cart_count = get_cart_count();?>
				<a href="cart.php"><i class="fas fa-cart-plus"></i> (<?php echo $cart_count; ?>)</a>
			</div>
			<div class="cart-icon">
				<a href="buy_package.php">Package</a>
			</div>
			<div class="cart-icon">
				<a href="checkout_service.php">Kitchen staff</a>
			</div>
			<div class="cart-icon">
			<?php if(!isset($_SESSION['username'])): ?>
				<a href= "login.php" class="btn btn-two"> Sign In</a>
				<a href= "registration.php" class="btn btn-two">Sign Up</a>
			<?php else: ?>
				<a href= "my-account.php" class="btn btn-two">My Account</a>
				<a href= "<?php echo ADMIN_ACTION_URL?>?action=logout" class="btn btn-two">Log out</a>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="cusheader">
	<div class="container-fluid">
		<div id="logo">
			<a href="index.php"> <img src="images/logo3.png"> </a>
		</div>
		<nav>
			<ul>
				<li> <a href="index.php"> Home </a></li>
				<li> <a href="services.php"> Services </a> </li>
				<li> <a href="feedback.php">Feedback </a> </li>
				<li> <a href="show_package.php"> Package </a> </li>
				<li> <a href="about.php"> About Us </a> </li>
				<li> <a href="contact.php"> Contact Us</a> </li>
				<li> <a href="miscelleneous.php">Miscelleneous Services</a> </li>
			</ul>
		</nav>

		<div class="button"> 
			
		</div>
	</div>
</div>