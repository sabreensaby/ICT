<?php include('server.php'); ?>
<html>

<head>
	<title>Admin Login ICT</title>
	<?php require_once 'include/header_css.php'; ?>

</head>

<body>
<div class="amdinbg">
	<div class="container">
		<div class="adminpanel">
			<div class="adminwhite">
				<h2 class="section-title">Admin Login</h2>
				<form method="post" action="<?php echo ADMIN_LOGIN_URL; ?>">
					<?php if (!empty($error_msg)) : ?>
						<div class="error"><?php echo $error_msg; ?></div>
					<?php endif; ?>
					<div class="input-group">
						<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required placeholder="Email">
						</div>
						<div class="form-group">

						<label>Password</label>
						<input type="password" name="password" class="form-control" required placeholder="********">
						<br>
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-success" name="login_user">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<body>

</html>