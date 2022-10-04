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
		$name = $_POST['name'];
		$class = $_POST['class'];
		$level = $_POST['level'];
		$rank = $_POST['rank'];

	    	$sql = mysqli_query($con,"update players set name = '$name', class = '$class', level = '$level', rank = '$rank' where id = '$id'") or die(mysqli_error());
	    	echo "Record updated!   ";
	
?>
<a href="players.php"> view </a>

<?php  

}
else {
	echo "Failed to update Record!";
}

?>

</body>
</html>