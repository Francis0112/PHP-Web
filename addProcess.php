<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
	<title></title>
</head>
<body class="crud555">

<?php  
	include 'connect.php';

	if (isset($_POST['add'])) {

		$name = $_POST['name'];
		$class = $_POST['class'];
		$level = $_POST['level'];
		$rank = $_POST['rank'];
	

	$sql = mysqli_query($con,"insert into players(id,name,class,level,rank) values ('','$name','$class','$level','$rank')") or die(mysqli_error());
	echo "Record Added!   ";
	if (!$sql) {
		echo "Failed to Add record.";
	}

}

?>
<a href="players.php"> view </a>

</body>
</html>