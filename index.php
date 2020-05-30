<?php include('../server.php'); ?>
<?php include_once "check_session.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dashboard Template for Bootstrap</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ICT</a>
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="<?php echo ADMIN_ACTION_URL?>?action=logout">Sign out</a>
			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">

			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">

					<ul class="nav flex-column">
						<li class="nav-item"><a href="index.php?content=service_category">Service Categories</a></li>
						<li class="nav-item"><a href="index.php?content=service_types">Service Types</a></li>
						<li class="nav-item"><a href="index.php?content=services">Add Services</a></li>
						<li class="nav-item"><a href="index.php?content=products">Add Products</a></li>
						<li class="nav-item"><a href="index.php?content=users">Users</a></li>
						<!-- <li class="nav-item"><a href="index.php?content=gas_connection">Gass Connectins</a></li>
						<li class="nav-item"><a href="index.php?content=water_connection">Water supply</a></li> -->
						<li class="nav-item"><a href="index.php?content=packages">Packages</a></li>
						<li class="nav-item"><a href="index.php?content=contacted_messages">Contacted messages</a></li>
						<li class="nav-item"><a href="index.php?content=feedback">Feedback</a></li>
						<li class="nav-item"><a href="index.php?content=orders">Orders</a></li>
						<li class="nav-item"><a href="index.php?content=ordered_packages">Purchased Packages</a></li>
						<li class="nav-item"><a href="index.php?content=staff_services">Staff Service</a></li>

						
					</ul>

				</div>
			</nav>

			<div class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<?php
					$content = "";
					if (isset($_REQUEST['content'])) {
						$content = $_REQUEST['content'];
					}
					switch ($content) {
						case 'service_category':
							$service_category_lists = print_service_category();
							include_once "service_category.php";
							break;

						case 'add_edit_service_cat':
							$service_category_lists = [];
							if (isset($_REQUEST['id'])) {
								$id = $_REQUEST['id'];
								$service_category_lists = print_service_category($id);
							}
							include_once "add_service_category.php";
							break;
						case 'service_types':
							$service_category_lists = print_service_types();
							include_once "service_types.php";
							break;

						case 'add_edit_service_type':
							$service_category_lists = [];
							$service_type_data = [];

							if (isset($_REQUEST['id'])) {
								$id = $_REQUEST['id'];
								$service_type_data = print_service_types($id);
							}

							$service_category_lists = print_service_category();
							include_once "add_service_type.php";
							break;

						case 'products':
							$products = print_products();
							include_once "products.php";
							break;

						case 'services':
							$service_lists = print_services();
							include_once "services.php";
							break;

						case 'add_edit_services':
							$service_category_lists = [];
							$service_type_data = [];
							if (isset($_REQUEST['id'])) {
								$id = $_REQUEST['id'];
								$service_type_data = print_services($id);
							}
							$service_type_lists = print_service_types();
							include_once "add_edit_services.php";
							break;

						case 'add_edit_products':
							$service_category_lists = [];
							$service_type_data = [];
							if (isset($_REQUEST['id'])) {
								$id = $_REQUEST['id'];
								$products = print_products($id);
							}

							$service_type_lists = print_service_types();
							include_once "add_edit_products.php";
							break;



						case 'users':
							$users = print_users();
							include_once "users.php";
							break;

						case 'gas_connection':
							$gas_connections = print_gas_connection();
							include_once "gas_connection.php";
							break;

						case 'add_edit_gas_providers':
							// if (isset($_REQUEST['id'])) {
							// 	$id = $_REQUEST['id'];
							// 	$gas_connections = print_gas_connection($id);
							// }
							include_once "add_edit_gas_providers.php";
							break;		

						case 'water_connection':
							$water_connections = print_water_connection();
							include_once "water_connection.php";
							break;


						case 'add_edit_water_providers':
							// if (isset($_REQUEST['id'])) {
							// 	$id = $_REQUEST['id'];
							// 	$gas_connections = print_gas_connection($id);
							// }
							include_once "add_edit_water_providers.php";
							break;

						case 'packages':
							$packages = print_packages();
							include_once "packages.php";
							break;

						case 'add_edit_packages':
							include_once "add_edit_packages.php";
							break;

						case 'contacted_messages':
							$contacted_messages = print_contacted_messages();
							include_once "contacted_messages.php";
							break;
						
						case 'feedback':
							$feedback = print_feedback();
							include_once "feedback.php";
							break;

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
						
						case 'ordered_packages':
							$orders_packages = print_ordered_packages();
							include_once "ordered_packages.php";
							break;

						case 'staff_services':
							$orders_services = print_ordered_services();
							include_once "ordered_services.php";
							break;
							
							
						default:
							include_once "dashboard.php";
							break;
					}
				?>

			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>