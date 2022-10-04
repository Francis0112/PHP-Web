<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="crudcss.css">
<script type="text/javascript" src = "fixJS.js"> </script>
</head>
<body class="bgimg">

<div class="versus1">
	<img src="RFFF.png" class="versus">
</div>
<?php  

	include 'connect.php';

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];

		//$sql = mysqli_query($con,"insert into users (id, username, password) values ('','$username', '$password') ") or die(mysqli_error());

		if ($username == "" || $password == "" || $confirm == "") {
			echo " Failed! please complete the required fields.";
		}
		else if ($password != $confirm) {
			echo "Failed! password do not match. ";
		}
		else {
			$sql = mysqli_query($con,"insert into users (id, username, password) values ('','$username', '$password') ") or die(mysqli_error());
			echo "Successfull! ";
		

	


?>
	<a href="login.php"> login now! </a>

<?php  

}

}

?>

</body>
</html>
