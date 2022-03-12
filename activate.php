<?php
session_start();
ob_start();

require 'include/connect.php';

if (isset($_GET['token'])) {

	$token = $_GET['token'];
	
	$sql = "update admindetails set status = 'active' where token = '$token'";


	if (mysqli_query($connection, $sql)) {
		$_SESSION['msg'] = "Account Activated. you can login";
      	header('Location: http://localhost/demo/index.php');
      	exit;
	}


} else {
	$_SESSION['msg'] = "Activation Failed!";
    header('Location: http://localhost/demo/signup.php');
    exit;
}


?>