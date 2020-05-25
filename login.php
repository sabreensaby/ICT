<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<?php require_once 'include/header_css.php'; ?>

</head>
<body>
	<?php include("include/nav.inc") ?>

	<div class="custitle">
		<div class="header">
			<h2>Login</h2>
		</div>
	</div> 
	<div class="cusregForms">
		

		<form method="post" action="<?php echo ADMIN_ACTION_URL;?>?action=custom_login" >
			<?php if(isset($_REQUEST['login_err'])):?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					Please check username or password.
				</div>

			<?php endif;?>
			<?php if(isset($_REQUEST['msg'])):?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					Please login, Regitered successfully.
				</div>

			<?php endif;?>
			<div class="input-group">
				<label>Email</label>
				<input type="text" name="username" placeholder="Email" required>
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div class="input-group loginbts">
				<button type="submit" class="btn_form" name="login_user" >Login</button>
				<button type="reset" class="btn_form">Cancel</button>
			</div>
			<p>
				Not yet a member? <a href="registration.php">Sign up</a> <br>
				Are you an admin? <a href="admin_login.php">Click Here!</a><br>
			</p>
		</form>
	</div> 
	<!-- Footer -->
	<?php include("include/footer.inc") ?>
	<!-- Footer -->
</body>
</html>

