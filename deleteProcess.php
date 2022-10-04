<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
	<title></title>
</head>
<body>

<?php  

include 'connect.php';

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

	$sql = mysqli_query($con,"delete from players where id = '$id'") or die(mysqli_error());
	echo "Record Deleted!   ";

?>
<a href="players.php"> View </a>

<?php  
}
else {
	echo "Failed to delete record!";
}

?>

</body>
</html>