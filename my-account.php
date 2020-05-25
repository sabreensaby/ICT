<?php include('server.php'); ?>
<?php include('session.php'); ?>
<!doctype html>
<html>
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- meta character set -->
        <meta charset="utf-8">
        <title> Consultation </title>
        <?php require_once 'include/header_css.php'; ?>
    </head>
    <body>
        <div id="wrapper">
			<!-- Navigation Bar -->
			<?php include("include/nav.inc") ?>
			<!-- Navigation Bar ends -->
			
			<div id="row" style="width: 100%;float: left;margin-top: 30px;">
				<div class="container ">
					 <div class="heading">
                        <h2 class="section-title">My Account</h2>
                    </div>
					<div class="row myacc" style="width: 100%">
						<div id ="contact" class="col-3">
							<ul class="nav justify-content-center">
								<li class="nav-item">
									<a class="nav-link active" href="my-account.php?content=orders">Orders</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my-account.php?content=packages">Packages</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my-account.php?content=address">Address</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my-account.php?content=staff_services">Staff Service</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo ADMIN_ACTION_URL?>?action=logout">Logout</a>
								</li>
								
							</ul>
						</div>
						<div id ="contact" class="col-9">
						<h2 class="section-title" style="text-align: left;font-size: 21px;">Welcome to your account</h2>
							<?php 
								$content = "";
								if (isset($_REQUEST['content'])) {
									$content = $_REQUEST['content'];
								}
								switch ($content) {
									case 'orders':
										$orders_list = print_orders_list();
										include_once "orders_list.php";
										break;

									case 'orders_detail':
										$id = "";
										if (isset($_REQUEST['id'])) {
											$id = $_REQUEST['id'];
										}
										$orders_detail = print_orders_detail($id);
										include_once "orders_detail.php";
										break;
									

									case 'packages':
										$orders_packages = print_ordered_packages();
										include_once "ordered_packages.php";
										break;

									
									case 'staff_services':
										$orders_services = print_ordered_services();
										include_once "ordered_services.php";
										break;


										

									case 'address':
										$address1 = print_address();
										include_once "address.php";
										break;
																				

									default:
										//include_once "dashboard.php";
										break;
								}

							?>
							
						</div>
						
					</div>
				</div>
			</div>
			
        </div>
        <!--- Map ends--->
        <?php include("include/footer.inc") ?>
        <!-- footer end -->
    </body>
</html>