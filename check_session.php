<?php
    ob_start();
    if(isset($_SESSION['id']) && $_SESSION['user_type'] != 'admin' ){
		header('location:../index.php');
    }
	if(!isset($_SESSION['id']) ){
		header('location:../index.php');
	}
?>