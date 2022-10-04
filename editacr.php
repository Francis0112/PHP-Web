<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
	<title></title>
</head>
<body>

<?php  
	
	include 'connect.php';

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = mysqli_query($con,"update users set username = '$username', password = '$password' where id = '$id' ") or die(mysqli_error());
		echo "Account updated!   ";
	
?>

<a href="fix.php">  View </a>
<?php
	session_start();
	$_SESSION['user_username'] = $username;
}
elseif (!$sql) {
		echo "Failed to update account!  ";
	}

?>

</body>
</html>