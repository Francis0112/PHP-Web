<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
	<title></title>
</head>
<body class="crud555">

<?php  
	include 'connect.php';

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];

		echo "ID: ".$id;

		$sql = mysqli_query($con,"select * from players where id = '$id'") or die(mysqli_error());
		$row = mysqli_fetch_array($sql);
		$name = $row['name'];
		$class = $row['class'];
		$level = $row['level'];
		$rank = $row['rank'];
	}

?>
<form action="editResult.php" method="post">
<br>
	<div class="row">
		<label for="pname"> Name: </label>
		<input type="text" id="pname" name="name" value="<?php echo $name;  ?>">
	</div>
<div class="row"><p></p></div>
	<div class="row">
		<label for="character"> Character: </label>
		<input type="text" id="character" name="class" value="<?php echo $class; ?>">
	</div>
<div class="row"><p></p></div>
	<div class="row">
		<label for="level"> Level </label>
		<input type="text" id="level" name="level" value="<?php echo $level; ?>">
	</div>
<div class="row"><p></p></div>
	<div class="row">
		<label for="rank"> Rank: </label>
		<input type="text" id="rank" name="rank" value="<?php echo $rank; ?>">
	</div>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<br>
		<input type="submit" name="update" value="    Edit     ">
		
	</div>
	
</form>

</body>
</html>