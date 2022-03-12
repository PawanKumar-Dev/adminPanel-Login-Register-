<?php 

session_start();

session_destroy();

header('Location: http://localhost/demo/index.php');
exit;

?>