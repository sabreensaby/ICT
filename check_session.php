<?php
	ob_start();
	if(!isset($_SESSION['id'])){
		header('location:../index.php');
	}
?>