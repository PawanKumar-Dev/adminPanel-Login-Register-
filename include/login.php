<?php
session_start();
ob_start();
require 'connect.php';

if (isset($_POST['login'])) {
	
	$username = sanitize($_POST['username']);
  	$password = sanitize($_POST['password']);

  	$getHashSql = "select password from admindetails where username = '$username' and status = 'active'";
  	$dbpass = mysqli_query($connection, $getHashSql);

  	if (mysqli_num_rows($dbpass)) {
  		
  		$result = mysqli_fetch_assoc($dbpass);

  		if (password_verify($password, $result['password'])) {

  			$_SESSION['login'] = $username;
	  		$_SESSION['msg'] = "Login Successfully!";

  			if (isset($_POST['remember'])) {

		  		setcookie("loginUserCookie", $username, time() + 86400 ,  "/");
		  		setcookie("loginPassCookie", $password, time() + 86400,  "/");

		  		header('Location: http://localhost/demo/panel.php');
		  	} else {
		  		header('Location: http://localhost/demo/panel.php');
		  	}  			
	    	
	  	} else {
  			$_SESSION['msg'] = "Login Invalid!";
    		header('Location: http://localhost/demo/index.php');
    		exit;
  		}

  	} else {
  		$_SESSION['msg'] = "Login Invalid!";
    	header('Location: http://localhost/demo/index.php');
    	exit;
  	}
}



?>