<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
	<title></title>
</head>
<body>
<?php  
	include 'connect.php';

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		

		$sql = mysqli_query($con,"select * from users where id = $id") or die(mysqli_error());

		$row = mysqli_fetch_array($sql);
		$username = $row['username'];
		$password = $row['password'];

		echo "ID:  ".$id;
	}
?>
<br>
<br>
	<form action="editacr.php" method="post">
	<div class="row">
	<label for="username"> username: </label>
	<input type="text" id="username"  name="username" value="<?php echo $username; ?>">
	</div>
<div class="row"><p></p></div>
	<label for="password"> password: </label>
	<input type="text" id="password" name="password" value="<?php echo $password; ?>">
<div class="row"><p></p></div>
	<input type="hidden" name="id" value="<?php echo $id;  ?>">
	<input type="submit" name="update" value="    update     ">
	</form>
</body>
</html>