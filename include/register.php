<?php
session_start();
ob_start();

require 'connect.php';

if(isset($_POST['signup'])){

  $username = sanitize($_POST['username']);
  $email = sanitize($_POST['email']);
  $mobile = sanitize($_POST['mobile']);
  $password = sanitize($_POST['password']);

  $username = mysqli_real_escape_string($connection, $username);
  $email = mysqli_real_escape_string($connection, $email);
  $mobile = mysqli_real_escape_string($connection, $mobile);
  $password = mysqli_real_escape_string($connection, $password);

  $hashedPass = password_hash($password, PASSWORD_BCRYPT);
  $status = "inactive";

  $token = bin2hex(random_bytes(15));

  $sql = "insert into admindetails (username, email, mobile, password, token, status) values('$username', '$email', '$mobile', '$hashedPass', '$token' ,'$status')";


  if(mysqli_query($connection, $sql)) {

    $subject = "Activation Email";
    $body = "Hi, ".$username.", click on this link to activate account http://localhost/demo/activate.php?token=".$token;
    $from = "From: pk687376alternative@gmail.com";

    if (mail($email, $subject, $body, $from)) {

      $_SESSION['msg'] = "Signup Successful. Plz Check your email id for activation!";
      header('Location: http://localhost/demo/index.php');
      exit;
    } else {
      $_SESSION['msg'] = "Email sending failed!";
      header('Location: http://localhost/demo/signup.php');
      exit;
    }

  } else {
    $_SESSION['msg'] = "Signup Failed!";
    header('Location: http://localhost/demo/signup.php');
    exit;
  }
}

?>