<?php
session_start();

$name = $email = $contact = $dateOfBirth = $user = $password_1 = $password_2 = $address =  "";
$errors = array(); 
$servername = "localhost";
$username = "root";
$password = "";
$db = "registration";



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



?>