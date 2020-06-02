<?php
ob_start();
session_start();

$name = $email = $contact = $dateOfBirth = $user = $password_1 = $password_2 = $address =  "";
$errors = array(); 

$servername = "localhost";
$username = "root";
$password = "";
$db = "ictatjcu_cons2";

define('SITE_URL', 'http://localhost/ict/');
define('ADMIN_LOGIN_URL', 'http://localhost/ict/server.php?action=admin_login');
define('ADMIN_ACTION_URL', 'http://localhost/ict/server.php');

require __DIR__ . '/include/currency-converter-php-master/vendor/autoload.php';


global $paypal_config;

$paypal_config = ['email'=>'sb-jrnb31525703@business.example.com',
					'currency_code'=>'USD',
					'notify_url'=>'http://localhost/ict/notify.php',
					'cancel_url' => 'http://localhost/ict/cancel.php',
					'cmd'=>'_xclick',
					'return_url' =>'http://localhost/ict/thankyou.php'
				];

// Create connection
global $conn;
$conn = mysqli_connect($servername, $username, $password, $db);


// Check connectionlogin_err
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$error_msg = "";
$err = [
		'login_err'=>'Please check username or password that you enter.',
		''
		];
if (isset($_REQUEST['login_err'])) {
	$error_msg = $err['login_err'];
}

if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {

	$action = $_REQUEST['action'];
	$post_data = $_REQUEST;
	switch ($action) {
		case 'admin_login':
			admin_login($post_data);
			break;
		
		case 'custom_login':
			custom_login($post_data);
			break;
			
		case 'add_edit_service_cat':
			add_edit_service_cat($post_data);
			break;
		
		case 'delete_service_category':
			delete_service_category($post_data);
			break;
		case 'delete_service_type':
			delete_service_type($post_data);
			break;

		case 'add_edit_service_type':
			add_edit_service_types($post_data);
			break;
		
		case 'add_edit_services':
			add_edit_services($post_data);
			break;

		case 'add_edit_products':
			add_edit_products($post_data);
			break;

		case 'delete_service':
			delete_services($post_data);
			break;

		case 'register':
			register($post_data);
			break;

		case 'delete_user':
			delete_user($post_data);
			break;

		case 'delete_products':
			delete_products($post_data);
			break;
			

		case 'delete_gas_connection':
			delete_gas_connection($post_data);
			break;

		case 'remove_item':
			remove_item($post_data);
			break;
			
		case 'add_edit_gas_providers':
			add_edit_gas_providers($post_data);
			break;

		case 'add_edit_gas_providers':
			add_edit_gas_providers($post_data);
			break;	

		case 'add_edit_water_providers':
			add_edit_water_providers($post_data);
			break;

		case 'add_edit_packages':
			add_edit_packages($post_data);
			break;

		
		case 'add_edit_address':
			add_edit_address($post_data);
			break;
	
		

		case 'delete_package':
			delete_package($post_data);
			break;

		case 'send_message':
			send_message($post_data);
			break;

		case 'contacted_message':
			contacted_message($post_data);
			break;

		case 'add_to_cart':
			add_to_cart($post_data);
			break;

		case 'buy_package':
			buy_package($post_data);
			break;

		case 'buy_service':
			buy_service($post_data);
			break;

		case 'purchase_service':
			purchase_service($post_data);
			break;


			
				
		case 'delete_water_connection':
			delete_water_connection($post_data);
			break;

		case 'remove_feedback':
			remove_feedback($post_data);
			break;
		case 'feedback':
			feedback($post_data);
			break;
	
		case 'place_order':
			place_order($post_data);
			break;

		case 'purchase_package':
			purchase_package($post_data);
			break;
				
			
		case 'logout':
			do_logout();
			break;
			
		default:
			# code...
			break;
	}

}

function feedback($post_data){
	global $conn;
	$table = 'feedback';
	$query = mysqli_query($conn, "INSERT INTO ".$table." (name,email,city,comment) 
										values ('".$post_data['firstname']."',
												'".$post_data['email']."',
												'".$post_data['city']."',
												'".$post_data['comment']."'											
												)
							");
	header("location:feedback.php?success=1");

}

function print_feedback(){

	global $conn;
	$table = 'feedback';
	
	$query = "SELECT * FROM " . $table;
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);

	return  mysqli_fetch_all($query, MYSQLI_ASSOC);

}

function do_logout(){
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['user_type']);
	header("location:index.php");

}



function buy_package($post_data)
{
	global $conn;
	$table = "buy_packages";
	$user_id = "";

	if(isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
	}
	$is_package_exist = is_package_exist($post_data['id']);
	if(!$is_package_exist){
		mysqli_query($conn, "INSERT INTO ".$table." (sessioni_id,item_id,user_id) 
									values ('".session_id()."',
											'".$post_data['id']."',
											'".$user_id."'
										)"
								);
	}

	header("location:buy_package.php");
		
}

function buy_service($post_data)
{
	global $conn;
	$table = "cart_services";
	$user_id = "";

	if(isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
	}

	$is_service_exist = is_service_exist($post_data['id']);

	var_dump($is_service_exist);
	if(!$is_service_exist){
		mysqli_query($conn, "INSERT INTO ".$table." (sessioni_id,item_id,user_id) 
									values ('".session_id()."',
											'".$post_data['id']."',
											'".$user_id."'
										)"
								);
	}

	header("location:checkout_service.php");
		
}


function is_package_exist($id) {

	$is_exist = false;
	global $conn;
	$table = "buy_packages";
	$query = mysqli_query($conn, "SELECT * FROM ".$table." 
									WHERE item_id = ".$id." 
									AND sessioni_id = '".session_id()."'"
							);
	if(mysqli_num_rows($query) > 0){
		$is_exist = true;
	}
	return $is_exist;
}

function is_service_exist($id) {

	$is_exist = false;
	global $conn;
	$table = "cart_services";
	$query = mysqli_query($conn, "SELECT * FROM ".$table." 
									WHERE item_id = ".$id." 
									AND sessioni_id = '".session_id()."'"
							);
	if(mysqli_num_rows($query) > 0){
		$is_exist = true;
	}
	return $is_exist;

}





function get_billing_details(){

	global $conn;
	$table = 'user';
	$query = "SELECT u.name, u.email, u.contactno, address.*  FROM " . $table  .' u';
	$query .= " LEFT JOIN address on address.user_id = u.id";
	$query .= " WHERE u.id = ".$_SESSION['id'];	
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);

}

function add_to_cart($post_data)
{
	global $conn;
	$table = "cart";
	$user_id = 0;
	if(isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
	}

	$is_exist = is_product_in_cart($post_data);

	if($is_exist){
		mysqli_query($conn,"UPDATE ".$table." set qty = qty+1 
										WHERE item_id = ".$post_data['item_id']." 
										AND sessioni_id = '".session_id()."'"
								);

	} else {
		
		mysqli_query($conn, "INSERT INTO ".$table." (sessioni_id,item_id,user_id,qty) 
										values ('".session_id()."',
												".$post_data['item_id'].",
												".$user_id.",
												".$post_data['qty']."
											)"
									);
	}

	header("location:item-detail.php?id=".$post_data['item_id']);
	
}

function print_purchases_package(){
	global $conn;
	$table = "buy_packages";

	$query = "SELECT c.*, p.package_name, p.id as p_id, p.package_price, p.package_desc FROM ".$table." c, package p";
	$query .= " WHERE c.sessioni_id = '".session_id()."'";
	$query .= " AND c.item_id = p.id";

	if(isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
		$query .= " AND c.user_id = ".$user_id;
	}
	$query .= " ORDER BY c.id DESC";

	$query = mysqli_query($conn, $query);

	return mysqli_fetch_all($query, MYSQLI_ASSOC);
}


function print_purchases_service(){
	global $conn;
	$table = "cart_services";

	$query = "SELECT c.*, s.staff_role, s.id as s_id, s.descriptions, s.price FROM ".$table." c, services s";
	$query .= " WHERE c.sessioni_id = '".session_id()."'";
	$query .= " AND c.item_id = s.id";

	// if(isset($_SESSION['id'])){
	// 	$user_id = $_SESSION['id'];
	// 	$query .= " AND c.user_id = ".$user_id;
	// }
	$query .= " ORDER BY c.id DESC";

	$query = mysqli_query($conn, $query);

	return mysqli_fetch_all($query, MYSQLI_ASSOC);
}


function place_order($post_data){
	global $paypal_config,$conn;
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	
	$is_address_saved = is_address_saved();

	if($is_address_saved){
		update_billing_address($post_data);

	} else {
		save_billing_address($post_data);
	}

	$order_id = save_order($post_data);

	$data['business'] = $paypal_config['email'];
    // Set the PayPal return addresses.
    $data['return'] = stripslashes($paypal_config['return_url']).'?order_id='. $order_id."&order_type=product";
    $data['cancel_return'] = stripslashes($paypal_config['cancel_url']).'?order_id='. $order_id."&order_type=product";
    $data['notify_url'] = stripslashes($paypal_config['notify_url']);

    // Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	
    $data['item_name'] = "cart items";
	$data['amount'] = get_converted_currency($post_data['amount']);
	$data['currency_code'] = $paypal_config['currency_code'];	
	$data['cmd'] = $paypal_config['cmd'];

    $queryString = http_build_query($data);

	$full_url =  $paypal_url . '?' . $queryString;
	header("location:".$full_url);
}

function purchase_package($post_data){
	global $paypal_config, $conn;
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	
	$is_address_saved = is_address_saved();

	if($is_address_saved){
		update_billing_address($post_data);

	} else {
		save_billing_address($post_data);
	}

	$order_id = save_package($post_data);

	$data['business'] = $paypal_config['email'];
    // Set the PayPal return addresses.
    $data['return'] = stripslashes($paypal_config['return_url']).'?order_id='. $order_id."&order_type=package";
    $data['cancel_return'] = stripslashes($paypal_config['cancel_url']).'?order_id='. $order_id."&order_type=package";
    $data['notify_url'] = stripslashes($paypal_config['notify_url']).'?order_id='. $order_id."&order_type=package";

    // Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	
    $data['item_name'] = "cart items";
	$data['amount'] = get_converted_currency($post_data['amount']);;
	$data['currency_code'] = $paypal_config['currency_code'];	
	$data['cmd'] = $paypal_config['cmd'];

    $queryString = http_build_query($data);
	$full_url =  $paypal_url . '?' . $queryString;

	header("location:".$full_url);
}



function purchase_service($post_data){
	global $paypal_config, $conn;
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	
	$is_address_saved = is_address_saved();

	if($is_address_saved){
		update_billing_address($post_data);

	} else {
		save_billing_address($post_data);
	}

	$order_id = save_service($post_data);
	$data['business'] = $paypal_config['email'];
    // Set the PayPal return addresses.
    $data['return'] = stripslashes($paypal_config['return_url']).'?order_id='. $order_id."&order_type=service";
    $data['cancel_return'] = stripslashes($paypal_config['cancel_url']).'?order_id='. $order_id."&order_type=service";
    $data['notify_url'] = stripslashes($paypal_config['notify_url']);

    // Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	
    $data['item_name'] = "cart items";
	$data['amount'] = get_converted_currency($post_data['amount']);
	$data['currency_code'] = $paypal_config['currency_code'];	
	$data['cmd'] = $paypal_config['cmd'];
    $queryString = http_build_query($data);
	$full_url =  $paypal_url . '?' . $queryString;

	header("location:".$full_url);
}



function is_address_saved(){
	global $conn;
	$is_exist = false;
	$table = "address";

	$query = mysqli_query($conn, "SELECT * FROM ".$table." 
									WHERE user_id = " .$_SESSION['id']							
							);
	if(mysqli_num_rows($query) > 0){
		$is_exist = true;
	}
	return $is_exist;

}

function update_billing_address( $post_data ){
	global $conn;
	$table = "address";
	$query = mysqli_query($conn,"UPDATE ".$table." set address = '".$post_data['address']."',
										city = '".$post_data['city']."',
										state = '".$post_data['state']."',
										zip_code = '".$post_data['zip']."'
										WHERE user_id =". $_SESSION['id']
								);
}

function save_billing_address( $post_data ) {
	global $conn;
	$table = "address";

	$query = mysqli_query($conn, "INSERT INTO ".$table." ( user_id, address, city, state, 
										zip_code ) 
										values (".$_SESSION['id'].",
												'".$post_data['address']."',
												'".$post_data['city']."',
												'".$post_data['state']."',
												'".$post_data['zip']."'
												)"
									);
}

function save_order($post_data) {
	global $conn;
	$order_id = generate_order_id($post_data);

	$cart_items = print_cart_items();
	$table = "orders";

	foreach ($cart_items as $item) {

		mysqli_query($conn, "INSERT INTO ".$table." (order_id, item_id, user_id, price,qty ) 
										values (".$order_id.",
												'".$item['item_id']."',
												".$_SESSION['id'].",
												'".$item['price']."',
												'".$item['qty']."'
												)"
									);
		
	}

	//remove_cart_items();

	return $order_id;


}

function remove_cart_items(){
	global $conn;	
	mysqli_query($conn, "DELETE from cart where session_id ='".session_id()."'");
	header("location:cart.php");
}

function delete_ordered_items($order_type,$order_id)
{
	
	global $conn;
	if($order_type == "product"){	
		mysqli_query($conn, "DELETE from orders where order_id =".$order_id);
	} else if($order_type == "package") {
		mysqli_query($conn, "DELETE from  purchased_pacakge where id =".$order_id);

	} else if($order_type == "service") {
		mysqli_query($conn, "DELETE from  purchased_services where id =".$order_id);
	}
}

function refresh_cart_items($order_type){
	global $conn;
	if($order_type == "product"){	
		mysqli_query($conn, "DELETE from cart where sessioni_id ='".session_id()."'");
	} else if($order_type == "package") {
		mysqli_query($conn, "DELETE from  buy_packages where sessioni_id ='".session_id()."'");		
	} else if($order_type == "service") {
		mysqli_query($conn, "DELETE from  cart_services where sessioni_id ='".session_id()."'");
	}
	
}



function save_package($post_data) {
	global $conn;
	$last_id = "";
	$cart_items = print_purchases_package();
	$table = "purchased_pacakge";

	foreach ($cart_items as $item) {

		mysqli_query($conn, "INSERT INTO ".$table." (package_id, user_id, price ) 
										values (
												'".$item['item_id']."',
												".$_SESSION['id'].",
												'".$post_data['amount']."'
												)"
									);
		$last_id = mysqli_insert_id($conn);

		
	}

	return $last_id;


}

function save_service($post_data) {
	global $conn;
	$last_id = "";
	$cart_items = print_purchases_service();
	$table = "purchased_services";

	foreach ($cart_items as $item) {

		mysqli_query($conn, "INSERT INTO ".$table." (service_id, user_id, price ) 
										values (
												'".$item['item_id']."',
												".$_SESSION['id'].",
												'".$post_data['amount']."'
												)"
									);
		$last_id = mysqli_insert_id($conn);

		
	}
	return $last_id;


}



function generate_order_id($post_data){
	global $conn;
	$table = "order_ids";


	mysqli_query($conn, "INSERT INTO ".$table." ( user_id, amount ) 
										values (".$_SESSION['id'].",".$post_data['amount'].")"
									);	
	return  mysqli_insert_id($conn);


}





function print_cart_items(){
	global $conn;
	$table = "cart";

	$query = "SELECT c.*, p.product_name, p.id as p_id, p.img_name, p.price FROM ".$table." c, products p";
	$query .= " WHERE c.sessioni_id = '".session_id()."'";
	$query .= " AND c.item_id = p.id";

	/*if(isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
		$query .= " OR c.user_id = ".$user_id;
	}*/
	$query .= " ORDER BY c.id DESC";
	$query = mysqli_query($conn, $query);

	return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function get_cart_count(){
	return count(print_cart_items());

}

function is_product_in_cart($post_data){
	$is_exist = false;
	global $conn;
	$table = "cart";
	$query = mysqli_query($conn, "SELECT * FROM ".$table." 
									WHERE item_id = ".$post_data['item_id']." 
									AND sessioni_id = '".session_id()."'"
							);
	if(mysqli_num_rows($query) > 0){
		$is_exist = true;
	}
	return $is_exist;
}

function admin_login($post_data) {
	global $conn;
	$is_login = user_login($post_data);

	if( $is_login ){
		header("location:admin/index.php");
	}else{
		header("location:admin_login.php?login_err=0");
	}
}

function custom_login($post_data) {
	global $conn;
	$is_login = user_login($post_data);
	
	if( $is_login ){
		header("location:index.php");
	} else {
		header("location:login.php?login_err=0");
	}
}


function user_login($post_data){

	global $conn;
	$username = $post_data['username'];
	$password = $post_data['password'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE email='". $username. "' AND password = '". $password."'");
	$is_login = false;
	

	
	if(mysqli_num_rows($query) > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];  //user id
		$_SESSION['username'] = $row['username'];  //user id
		$_SESSION['user_type'] = $row['user_type'];  //user id
		$is_login = true;
	}
	return $is_login;
}

function add_edit_service_cat($post_data){
	global $conn;
	$table = "services_cat";

	$file_name = get_file_name_uploaded($post_data);

	if($post_data['service_id'] > 0) {
		$query = mysqli_query($conn,"UPDATE ".$table." set service_cat = '".$post_data['service_cat']."',
											service_description = '".addslashes($post_data['service_description'])."',
											img_name = '".$file_name."'
										WHERE id =".$post_data['service_id']
								);


	} else{
		$query = mysqli_query($conn, "INSERT INTO ".$table." (service_cat,service_description,img_name) 
										values ('".$post_data['service_cat']."',
												'".addslashes($post_data['service_description'])."',
												'".$file_name."'
												)
							");

	}
	header("location:admin/index.php?content=service_category");

}

function get_file_name_uploaded($post_data){

	$file_name = "";
	if(!empty($_FILES['image']['name'])){
		$file_name = upload_files($post_data);
	} else {
		$file_name = $post_data['old_img'];
	}
	return $file_name;
}

function upload_files($post_data){
	$basename = "";
	$filename   = uniqid() . "_" . time(); // 5dab1961e93a7_1571494241
	$extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); // jpg
	$basename   = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
	$file_name = $_FILES['image']['name'];
	$path = "images/".$basename;
	move_uploaded_file($_FILES["image"]["tmp_name"], $path);

	return $basename;
}


function print_service_category($id=null) {
	global $conn;
	$table = "services_cat";
	$query = "SELECT * FROM " . $table;
	if($id){
		$query .= " WHERE id =".$id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}


function print_orders_list(){
	global $conn;
	$table = "order_ids";
	$query = "SELECT * FROM " . $table;
	if( not_admin()){
		$query .= " where user_id =".$_SESSION['id'];
	}

	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_orders_detail($id=null){
	global $conn;
	$table = "orders";
	$query = "SELECT o.*, p.product_name ,p.id as pid FROM " . $table." o, products p";
	if($id){
		$query .= "  WHERE o.item_id =p.id AND o.order_id= ".$id;
	}

	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}
function get_user_name($id){
	global $conn;
	$table = "user";
	//SELECT pp.*,p.package_name FROM purchased_pacakge pp, package p WHERE pp.package_id=p.id
	$query = "SELECT * from user ";
		$query .= " WHERE id=".$id;
	$query = mysqli_query($conn, $query);
	return $result = mysqli_fetch_array($query, MYSQLI_ASSOC);



}

function print_ordered_packages($id=null){
	global $conn;
	$table = "purchased_pacakge";
	//SELECT pp.*,p.package_name FROM purchased_pacakge pp, package p WHERE pp.package_id=p.id
	$query = "SELECT pp.*,p.package_name FROM " . $table." pp, package p";
		$query .= " WHERE pp.package_id=p.id";
		if(not_admin()){
			$query .= " AND pp.user_id =".$_SESSION['id'];
		}

	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_ordered_services($id=null){
	global $conn;
	$table = "purchased_services";
	//SELECT pp.*,p.package_name FROM purchased_pacakge pp, package p WHERE pp.package_id=p.id
	$query = "SELECT ps.*,s.staff_name,s.staff_email,s.staff_role,s.price FROM " . $table." ps, services s";
		$query .= " WHERE ps.service_id = s.id";

		if(not_admin()){
			$query .= " AND ps.user_id =".$_SESSION['id'];
		}

	$query .= " order by ps.id DESC";
	
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function not_admin(){
	$not_admin = false;
	if($_SESSION['user_type'] !='admin'){
		$not_admin = true;
	}
	return $not_admin;


}

function print_address(){
	global $conn;
	$table = "address";
	$query = "SELECT a.*,u.name,u.email,u.contactno FROM " . $table." a, user u ";
	$query .= " WHERE u.id=a.user_id AND a.user_id=".$_SESSION['id'];
	$query .= " order by a.id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);

}

function add_edit_address( $post_data ){

	print_r($post_data);
	global $conn;
	$table = "address";
	$query = mysqli_query($conn,"UPDATE ".$table." set address = '".$post_data['address']."',
										city = '".$post_data['city']."',
										state = '".$post_data['state']."',
										zip_code = '".$post_data['zip']."'
										WHERE user_id =". $_SESSION['id']
								);
	mysqli_query($conn,"UPDATE user set name = '".$post_data['name']."',
						contactno = '".$post_data['contact']."'
						WHERE id =". $_SESSION['id']
					);
	header("location:my-account.php?content=address");

}

function remove_item($post_data){
	global $conn;	
	mysqli_query($conn, "DELETE from cart where id =".$post_data['id']);
	header("location:cart.php");
}

function delete_service_category($post_data){
	global $conn;
	
	mysqli_query($conn, "DELETE from services_cat where id =".$post_data['id']);
	header("location:admin/index.php?content=service_category");
}


function delete_service_type($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from services_types where id =" . $post_data['id']);
	header("location:admin/index.php?content=service_types");
}

function delete_services($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from services where id =" . $post_data['id']);
	header("location:admin/index.php?content=services");
}


function add_edit_service_types($post_data)
{
	global $conn;
	$table = "services_types";
	$file_name = get_file_name_uploaded($post_data);



	if ($post_data['service_id'] > 0) {
		$query = mysqli_query($conn, "UPDATE ".$table." 
									set service_type= '".$post_data['service_cat']."',
									service_id= '".$post_data['service_category_lists']."',
									img_name = '".$file_name."',
									is_staff_page = '".$post_data['is_staff_page']."'
									WHERE id = ".$post_data['service_id']
							);
	} else {
		$query = mysqli_query($conn, "INSERT INTO ".$table." (service_id,service_type,img_name,
												is_staff_page) 
										values ('".$post_data['service_category_lists']."',
												'".$post_data['service_cat']."',
												'".$file_name."',
												'".$post_data['is_staff_page']."'
												)"
									);
	}
	header("location:admin/index.php?content=service_types");
}


function print_service_types($id = null)
{
	global $conn;
	$table = "services_types";
	$query = "SELECT sc.service_cat ,st.* FROM " . $table. " st, services_cat sc";
	
	$query .= " WHERE st.service_id = sc.id ";

	if ($id) {
		$query .= "AND st.id =" . $id;
	}

	$query .= " order by st.id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}
function print_kitchen_staff($id = null)
{
	global $conn;
	$table = "services";
	$query = "SELECT * FROM " . $table;
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}


function print_service_types_by_service_id($id = null)
{
	global $conn;
	$table = "services_types";
	$query = "SELECT sc.service_cat ,st.* FROM " . $table. " st, services_cat sc";
	
	$query .= " WHERE st.service_id = sc.id ";

	if ($id) {
		$query .= "AND sc.id =". $id;
	}

	$query .= " order by st.id DESC";

	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_items_by_cat_id($id = null)
{
	global $conn;
	$table = "products";
	$query = "SELECT * FROM " . $table;
	if ($id) {
		$query .= " WHERE product_cat =".$id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_items_by_item_id($id = null)
{
	global $conn;
	$table = "products";
	$query = "SELECT * FROM " . $table;
	if ($id) {
		$query .= " WHERE id =".$id;
	}
	$query .= " order by id DESC limit 1";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}




function print_service_by_service_id($id = null)
{
	global $conn;
	$table = "services";
	$query = "SELECT * FROM " . $table;
	if ($id) {
		$query .= " WHERE service_type_id =". $id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}



function print_services($id = null)
{
	global $conn;
	$table = "services";
	$query = "SELECT st.service_type ,s.* FROM " . $table. " s, services_types st";
	$query .= " WHERE st.id = s.service_type_id";

	if ($id) {
		$query .= " AND s.id =" . $id;
	}
	$query .= " order by s.id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_products($id = null)
{
	global $conn;
	$table = "products";
	$query = "SELECT st.service_type ,p.* FROM " . $table. " p, services_types st";
	$query .= " WHERE st.id = p.product_cat";

	if ($id) {
		$query .= " AND p.id =" . $id;
	}
	$query .= " order by p.id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}



function add_edit_services($post_data)
{
	global $conn;
	$table = "services";
	if ($post_data['service_id'] > 0) {

		$query = mysqli_query($conn, "UPDATE ".$table." 
									set service_type_id= '".$post_data['service_type_id']."',
									staff_email = '".$post_data['service_email']."',
									staff_role = '".$post_data['staff_role']."',
									descriptions = '".$post_data['service_description']."',
									price = '".$post_data['price']."',
									staff_name = '".$post_data['staff_name']."',
									skills = '".$post_data['skills']."',
									experience = '".$post_data['experience']."'
									WHERE id = ".$post_data['service_id']
							);
	} else {

		$query = mysqli_query($conn, "INSERT INTO ".$table." (service_type_id,staff_email,staff_name,staff_role, descriptions,price,skills,experience) 
										values ('".$post_data['service_type_id']."',
												'".$post_data['service_email']."',
												'".$post_data['staff_name']."',
												'".$post_data['staff_role']."',
												'".$post_data['service_description']."',
												'".$post_data['price']."',
												'".$post_data['skills']."',
												'".$post_data['experience']."'
												)"
									);
	}
	header("location:admin/index.php?content=services");
}


function add_edit_products($post_data)
{
	global $conn;
	$table = "products";
	$file_name = get_file_name_uploaded($post_data);
	if ($post_data['product_id'] > 0) {

		$query = mysqli_query($conn, "UPDATE ".$table." 
									set product_code 	= '".$post_data['product_code']."',
									product_name 		= '".$post_data['product_title']."',
									product_cat 		= '".$post_data['category_id']."',
									price 				= ".$post_data['price'].",
									descrptions 		= '".$post_data['product_description']."',
									img_name 			= '".$file_name."'
									WHERE id 			= ".$post_data['product_id']
							);
	} else {
			
		$query = mysqli_query($conn, "INSERT INTO ".$table." (product_code,product_name,product_cat, price,
											descrptions, img_name) 
										values ('".$post_data['product_code']."',
												'".$post_data['product_title']."',
												".$post_data['category_id'].",
												".$post_data['price'].",
												'".$post_data['product_description']."',
												'".$file_name."'
												)"
									);
	}
	header("location:admin/index.php?content=products");
}


function register($post_data){
	global $conn;

	$name = $post_data['name'];
	$email =$post_data['email'];
	$contact =$post_data['contact'];
	$dateOfBirth = $post_data['bday'];
	$user = $post_data['username'];
	$password_1 =$post_data['password1'];
	$password_2 =$post_data['password2'];
	$address =$post_data['address'];
	echo "<pre>";
	print_r($post_data);

	if ($password_1 != $password_2) {
		header("location:".SITE_URL."registration.php?err=match_password");
		die;
	}
	//$encryptpassword = md5($password_1);
	$encryptpassword = $password_1;
	$sql = "INSERT INTO user (name, email, contactno,dob, username, password, address) VALUES ('$name','$email','$contact','$dateOfBirth','$user','$encryptpassword','$address')";

	mysqli_query($conn, $sql);
	header("location:".SITE_URL."login.php?msg=register");
}


function print_users($id = null)
{
	global $conn;
	$table = "user";
	$query = "SELECT * FROM " . $table;

	if ($id) {
		$query .= " WHERE id =" . $id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_gas_connection($id = null)
{
	global $conn;
	$table = "gas_connection";
	$query = "SELECT * FROM " . $table;

	if ($id) {
		$query .= " WHERE id =" . $id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function print_water_connection($id = null)
{
	global $conn;
	$table = "water_connection";
	$query = "SELECT * FROM " . $table;

	if ($id) {
		$query .= " WHERE id =" . $id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function delete_user($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from user where id =" . $post_data['id']);
	header("location:admin/index.php?content=users");
}

function delete_products($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from products where id =" . $post_data['id']);
	header("location:admin/index.php?content=products");
}



function remove_feedback($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from feedback where id =" . $post_data['id']);
	header("location:admin/index.php?content=feedback");
}

function delete_water_connection($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from water_connection where id =" . $post_data['id']);
	header("location:admin/index.php?content=water_connection");
}

function delete_gas_connection($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from gas_connection where id =" . $post_data['id']);
	header("location:admin/index.php?content=gas_connection");
}


function add_edit_gas_providers($post_data)
{
	global $conn;
	$table = "gas_connection";
	if ($post_data['service_id'] > 0) {
		// $query = mysqli_query($conn, "UPDATE ".$table." 
		// 							set service_type= '".$post_data['service_cat']."',
		// 							service_id= '".$post_data['service_category_lists']."',
		// 							img_name = '".$file_name."'
		// 							WHERE id = ".$post_data['service_id'],
		// 					);
	} else {



		$query = mysqli_query($conn, "INSERT INTO ".$table." (gas_service_provider,gas_connection_details,gas_price) 
										values ('".$post_data['gas_provider']."',
												'".$post_data['gas_details']."',
												'".$post_data['gas_price']."')"
									);
	}
	header("location:admin/index.php?content=gas_connection");
}



function add_edit_water_providers($post_data)
{
	global $conn;
	$table = "water_connection";

	if ($post_data['water_provider_id'] > 0) {
		// $query = mysqli_query($conn, "UPDATE ".$table." 
		// 							set service_type= '".$post_data['service_cat']."',
		// 							service_id= '".$post_data['service_category_lists']."',
		// 							img_name = '".$file_name."'
		// 							WHERE id = ".$post_data['service_id'],
		// 					);
	} else {

		$query = mysqli_query($conn, "INSERT INTO water_connection (water_connection_provider, water_connection_details, 										water_price) 
										values ('".$post_data['water_provider']."',
												'".$post_data['water_details']."',
												'".$post_data['water_price']."')"
									);
	}
	header("location:admin/index.php?content=water_connection");
}

function print_packages($id = null)
{
	global $conn;
	$table = "package";
	$query = "SELECT * FROM " . $table;

	if ($id) {
		$query .= " WHERE id =" . $id;
	}
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);
}


function add_edit_packages($post_data)
{
	global $conn;
	$table = "package";
	if ($post_data['package_id'] > 0) {
		$query = mysqli_query($conn, "UPDATE ".$table." 
									set service_type= '".$post_data['service_cat']."',
									service_id= '".$post_data['service_category_lists']."',
									WHERE id = ".$post_data['service_id']
							);
	} else {



		$query = mysqli_query($conn, "INSERT INTO ".$table." (package_name,package_desc,package_price) 
										values ('".$post_data['package_name']."',
												'".$post_data['package_desc']."',
												'".$post_data['package_price']."')"
									);
	}
	header("location:admin/index.php?content=packages");
}

function delete_package($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from package where id =" . $post_data['id']);
	header("location:admin/index.php?content=packages");
}

function send_message($post_data) {
	global $conn;
	$contact_name = $post_data['contact_name'];
	$contact_email = $post_data['contact_email'];
	$contact_subject =$post_data['contact_subject'];
	$contact_message =$post_data['contact_message'];
	$table = "contact";
	mysqli_query($conn, "INSERT INTO ".$table." (name, email, contact_reason, comments) 
									VALUES ('$contact_name','$contact_email','$contact_subject','$contact_message')"
								);

	header("location:contact.php?success=1");
}



function print_contacted_messages(){

	global $conn;
	$table = "contact";
	$query = "SELECT * FROM " . $table;

	// if ($id) {
	// 	$query .= " WHERE id =" . $id;
	// }
	$query .= " order by id DESC";
	$query = mysqli_query($conn, $query);
	return  mysqli_fetch_all($query, MYSQLI_ASSOC);

}

function contacted_message($post_data)
{
	global $conn;

	mysqli_query($conn, "DELETE from contact where id =" . $post_data['id']);
	header("location:admin/index.php?content=contacted_messages");
}


function get_converted_currency($amount){
	$converter = new CurrencyConverter\CurrencyConverter;
	return ($converter->convert('INR', 'USD')*$amount);
}

/*if (isset($_POST['reg_user'])) {
	
$name = $_POST['name'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$dateOfBirth = $_POST['bday'];
$user = $_POST['username'];
$password_1 =$_POST['password1'];
$password_2 =$_POST['password2'];
$address =$_POST['address'];
if ($password_1 != $password_2) {
	die ("password do not match");
  }


	$encryptpassword = md5($password_1);
$sql = "INSERT INTO user (name, email, contactno,dob, username, password, address) VALUES ('$name','$email','$contact','$dateOfBirth','$user','$encryptpassword','$address')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
	
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}*/


// // LOGIN USER
// if (isset($_POST['login_user'])) {
//   $username = $_POST['username'];
//   $password = $_POST['password'];

// $query = mysqli_query($conn, "SELECT * FROM user WHERE username='".$user."' AND email='".$email."'");

// if(mysqli_num_rows($query) == 1){
//     echo "logged in";
// }else{
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// }
//KITCHEN STAFF

/*if (isset($_POST['ok_staff'])) {
	
$name = $_POST['name'];
$email =$_POST['email'];
$role = $_POST['role'];
$skills =$_POST['skills'];
$years_of_experience =$_POST['year'];
$additional_details =$_POST['additional_details'];


$sql = "INSERT INTO kitchen_staff (name, email, role,skills, years_of_experience, additional_details) VALUES ('$name','$email','$role','$skills','$years_of_experience','$additional_details')";
if (mysqli_query($conn, $sql)) {
	echo "New staff has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}*/

//KITCHEN EQUIPMENT

if (isset($_POST['ok_equip'])) {
	
$type = $_POST['type'];
$quality =$_POST['quality'];
$details = $_POST['details'];
$price =$_POST['price'];



$sql = "INSERT INTO kitchen_equipment (equipment_type, quality, details,price) VALUES ('$type','$quality','$details','$price')";
if (mysqli_query($conn, $sql)) {
	echo "New Equipment has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


//KITCHEN SERVICE

if (isset($_POST['ok_service'])) {
	
$kitchen_type = $_POST['kitchen_type'];
$details = $_POST['details'];
$price =$_POST['price'];



$sql = "INSERT INTO kitchen_service (kitchen_service_type, service_details,service_price) VALUES ('$kitchen_type','$details','$price')";
if (mysqli_query($conn, $sql)) {
	echo "New Kitchen Service has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
//GAS CONNECTION SERVICE

if (isset($_POST['ok_gas'])) {
	
$gas_provider = $_POST['gas_provider'];
$gas_details = $_POST['gas_details'];
$gas_price =$_POST['gas_price'];



$sql = "INSERT INTO gas_connection (gas_service_provider, gas_connection_details,gas_price) VALUES ('$gas_provider','$gas_details','$gas_price')";
if (mysqli_query($conn, $sql)) {
	echo "New Gas Connection Service has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//WATER CONNECTION SERVICE

if (isset($_POST['ok_water'])) {
	
$water_provider = $_POST['water_provider'];
$water_details = $_POST['water_details'];
$water_price =$_POST['water_price'];



$sql = "INSERT INTO water_connection (water_connection_provider, water_connection_details, water_price) VALUES ('$water_provider','$water_details','$water_price')";
if (mysqli_query($conn, $sql)) {
	echo "New water Connection Service has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//ELECTRICITY CONNECTION SERVICE

if (isset($_POST['ok_electricity'])) {
	
$electricity_provider = $_POST['electricity_provider'];
$electricity_details = $_POST['electricity_details'];
$electricity_price =$_POST['electricity_price'];



$sql = "INSERT INTO electricity_connection (electricity_connection_provider, electricity_connection_details, electricity_price) VALUES ('$electricity_provider','$electricity_details','$electricity_price')";
if (mysqli_query($conn, $sql)) {
	echo "New water Connection Service has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


//MENU DESIGN

if (isset($_POST['ok_menu'])) {
	
$menu_type = $_POST['menu_type'];
$menu_details = $_POST['menu_details'];
$menu_price =$_POST['menu_price'];



$sql = "INSERT INTO menu_design (menu_type, menu_details, menu_price) VALUES ('$menu_type','$menu_details','$menu_price')";
if (mysqli_query($conn, $sql)) {
	echo "New menu has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//receipies DESIGN

if (isset($_POST['ok_receipie'])) {
	
$receipie_type = $_POST['Receipie_type'];
$receipie_details = $_POST['receipie_details'];
$receipie_price =$_POST['receipie_price'];



$sql = "INSERT INTO receipie_design (receipie_type, receipie_details, receipie_price) VALUES ('$receipie_type','$receipie_details','$receipie_price')";
if (mysqli_query($conn, $sql)) {
	echo "New recceipies has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//Interior DESIGN

if (isset($_POST['ok_interior'])) {
	
$interior_type = $_POST['Interior_Design_type'];
$interior_details = $_POST['interior_details'];
$interior_price =$_POST['interior_price'];



$sql = "INSERT INTO interior_design (interior_type, interior_details, interior_price) VALUES ('$interior_type','$interior_details','$interior_price')";
if (mysqli_query($conn, $sql)) {
	echo "New interior has been added";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//Package

// if (isset($_POST['ok_package'])) {
	
// $package_name = $_POST['package_name'];
// $package_desc = $_POST['package_desc'];
// $package_price =$_POST['package_price'];



// $sql = "INSERT INTO package (package_name, package_desc, package_price) VALUES ('$package_name','$package_desc','$package_price')";
// if (mysqli_query($conn, $sql)) {
// 	echo "New Package has been added";
// } else {
// 	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
// }

//Add contact details

/*if (isset($_POST['send_message'])) {
	
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_subject =$_POST['contact_subject'];
$contact_message =$_POST['contact_message'];



$sql = "INSERT INTO contact (name, email, contact_reason, comments) VALUES ('$contact_name','$contact_email','$contact_subject','$contact_message')";
if (mysqli_query($conn, $sql)) {
	echo "New contact has enquired.";
} 
mysqli_close($conn);*/





// SHOW KITCHEN STAFF
$sql = "SELECT name, email, role, skills,years_of_experience,additional_details  FROM kitchen_staff";
$result = mysqli_query($conn, $sql);




// SHOW PACKAGE
$sql = "SELECT package_name, package_desc, package_price  FROM package";
$result = mysqli_query($conn, $sql);



// SHOW KITCHEN EQUIPMENT
/*$sql = "SELECT equipment_type, quality, details, price FROM kitchen_equipment";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	?>
	<div class="equipment_container" style="margin-left:280px;margin-right:280px;">
	<div style="height:200px;width:200px;float:left;background-color:pink;padding:10px;margin:50px;"> 
	<?php echo $row["equipment_type"]."<br>".$row["quality"]."<br>".$row["details"].$row["price"] 
	?> 
	</div> 
	</div>
	   
   <?php }
} else {
	echo "0 results";
}*/



//}
?>