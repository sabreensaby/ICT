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

         case 'logout':
            do_logout();
            break;

            

            
            
            
        default:
            # code...
            break;
    }

}

function do_logout(){
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    header("location:index.php");

}

function admin_login($post_data) {
    global $conn;
    $username = $post_data['username'];
    $password = $post_data['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username='". $username. "' AND password = '". $password."'");

    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_array($query);
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];  //user id
        $_SESSION['username'] = $row['username'];  //user id
        header("location:admin/index.php");

    }else{
        header("location:admin_login.php?login_err=0");
    }
}

function add_edit_service_cat($post_data){
    global $conn;
    $table = "services_cat";

    if($post_data['service_id'] > 0) {
        echo "UPDATE " . $table . " set service_cat = '".$post_data['service_cat']."'
                                        WHERE id =". $post_data['service_id'].")";
        $query = mysqli_query($conn, "UPDATE " . $table . " set service_cat = 
                                                            '".$post_data['service_cat']."'
                                        WHERE id =". $post_data['service_id']);

    } else{
        $query = mysqli_query($conn, "INSERT INTO " . $table . " (service_cat) values ('" . $post_data['service_cat'] . "')");
    }

    header("location:admin/index.php?content=service_category");

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


function add_edit_service_types($post_data)
{
    global $conn;
    $table = "services_types";
    if ($post_data['service_id'] > 0) {
        $query = mysqli_query($conn, "UPDATE ".$table." 
                                     set service_type= '".$post_data['service_cat']."',
                                    service_id= '".$post_data['service_category_lists']."'
                                    WHERE id = ".$post_data['service_id']
                            );
    } else {
        $query = mysqli_query($conn, "INSERT INTO " . $table . "(service_id,service_type) values ('".$post_data['service_category_lists']."','".$post_data['service_cat']."')");
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










if (isset($_POST['reg_user'])) {
	
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
    //echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


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

if (isset($_POST['ok_staff'])) {
    
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
}

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

if (isset($_POST['ok_package'])) {
    
$package_name = $_POST['package_name'];
$package_desc = $_POST['package_desc'];
$package_price =$_POST['package_price'];



$sql = "INSERT INTO package (package_name, package_desc, package_price) VALUES ('$package_name','$package_desc','$package_price')";
if (mysqli_query($conn, $sql)) {
    echo "New Package has been added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//Add contact details

if (isset($_POST['send_message'])) {
    
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_subject =$_POST['contact_subject'];
$contact_message =$_POST['contact_message'];



$sql = "INSERT INTO contact (name, email, contact_reason, comments) VALUES ('$contact_name','$contact_email','$contact_subject','$contact_message')";
if (mysqli_query($conn, $sql)) {
    echo "New contact has enquired.";
} 
mysqli_close($conn);





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



}
?>