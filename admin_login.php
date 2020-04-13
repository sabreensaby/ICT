<?php include('server.php'); ?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>

<body>
	<div class="admin_area">
		<h2>Admin Login</h2>

	</div>

	<form method="post" action="<?php echo ADMIN_LOGIN_URL; ?>">
		<?php if (!empty($error_msg)) : ?>
			<div class="error"><?php echo $error_msg; ?></div>
		<?php endif; ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>

			<label>Password</label>
			<input type="password" name="password" required>

			<button type="submit" class="btn" name="login_user">Login</button>
		</div>

	</form>
	</div>

	<body>

</html>