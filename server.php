<?php
session_start();

$name = $email = $contact = $dateOfBirth = $user = $password_1 = $password_2 = $address =  "";
$errors = array(); 
$servername = "localhost";
$username = "root";
$password = "";
$db = "ictatjcu_cons2";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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

$exist = mysqli_query($conn, "SELECT * FROM user WHERE username='".$user."' OR email='".$email."'");

if(mysqli_num_rows($exist) > 0){
    die("user already exists");
}
else 
    $encryptpassword = md5($password_1);
$sql = "INSERT INTO user (name, email, contactno,dob, username, password, address) VALUES ('$name','$email','$contact','$dateOfBirth','$user','$encryptpassword','$address')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
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
    
$receipies_type = $_POST['receipies_type'];
$receipie_details = $_POST['receipie_details'];
$receipie_price =$_POST['receipie_price'];



$sql = "INSERT INTO receipie_design (receipie_type, receipie_details, receipie_price) VALUES ('$receipie_type','receipie_details','$receipie_price')";
if (mysqli_query($conn, $sql)) {
    echo "New recceipies has been added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

//Interior DESIGN

if (isset($_POST['ok_interior'])) {
    
$interior_type = $_POST['interior_type'];
$interior_details = $_POST['interior_details'];
$interior_price =$_POST['interior_price'];



$sql = "INSERT INTO interior_design (interior_type, interior_details, interior_price) VALUES ('$interior_type','interior_details','$interior_price')";
if (mysqli_query($conn, $sql)) {
    echo "New interior has been added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='".$user."' AND email='".$email."'");

if(mysqli_num_rows($query) == 1){
    echo "logged in";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

// SHOW KITCHEN STAFF
$sql = "SELECT name, email, role, skills,years_of_experience,additional_details  FROM kitchen_staff";
$result = mysqli_query($conn, $sql);



mysqli_close($conn);

?>