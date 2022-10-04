
<?php  

	include 'connect.php';
	session_start();

	session_destroy();
	$_SESSION['user_username'] = null;
	unset($_SESSION['user_username']);
	header('location:login.php');
	

?>


