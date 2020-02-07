<?php
/*$name = filter_input(INPUT_POST,'name') ;
$email = filter_input(INPUT_POST,'email') ;
$message = filter_input(INPUT_POST,'message') ;
$errorurl = "error.html" ;
$thankyouurl = "thanks.html" ;
if(!empty($name)){
	if(!empty($email)){
		if(!empty ($message)){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ict";	
	
	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'
	.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO tblcontact (name, email, message)
VALUES ('$name','$email', '$message')";
if($conn->query($sql)){
	echo "new record is inserted";
	header( "Location: $thankyouurl" );
   exit ;
	}
	else{
		header( "Location: $errorurl" );
		echo "Error:". $sql."<br>".$conn->error;
		
	}
	$conn->close();
	}
}
else{
		echo "Message should not be empty";
	}
	} 
	else{
		echo "Email should not be empty";
		die();
	}
}
else{
		echo "Name should not be empty";
		die();
	}*/
?>