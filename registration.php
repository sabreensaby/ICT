<?php include 'server.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <?php require_once 'include/header_css.php'; ?>
    </head>
    <body>
        <!-- Navigation Bar -->
        <?php include("include/nav.inc") ?>
        <!-- Navigation Bar ends -->
        <div class="custitle ">
            <div class="heading header">
                <h2 class="section-title">Register</h2>
            </div>
        </div>
        <div class="cusregForms">
            <form action="<?php echo ADMIN_ACTION_URL?>/?action=register" method="post">
            <?php if(isset($_REQUEST['err'])):?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					Password and confirm password does not match
				</div>

			<?php endif;?>
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" required><br>
                </div>
                <div class="input-group">
                    <label>E-mail</label>
                    <input type="email" pattern="[^ @]*@[^ @]*" name="email" required><br>
                </div>
                <div class="input-group">
                    <label>Contact No.(format: xxxxxxxxxx):</label>
                    <input type="tel" pattern="^\d{10}$" name="contact" required><br>
                </div>
                <div class="input-group">
                    <label>Date of Birth</label>
                    <input type="date" name="bday" required><br>
                </div>
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" required><br>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password1" id="password" required><br>
                </div>
                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password2" id="confirm_password" required><br>
                </div>
                <div class="input-group">
                    <label>Address</label>
                    <textarea name="address"></textarea><br>
                </div>
                <div class="input-group loginbts">
                    <button type="submit" class="btn_form" name="reg_user">Register</button>
                    <button type="reset" class="btn_form">Cancel</button>
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>
        <!-- footer --> 
        <?php include("include/footer.inc") ?>
        </div>
        <!-- footer end -->
    </body>
</html>