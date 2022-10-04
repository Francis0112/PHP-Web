<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
	<title></title>
</head>
<body class="crud555">

<h3> Results </h3>
<hr>
<br>

<table border="1">
		<tr><th>ID</th><th>Name</th><th>Character</th><th>Level</th><th>Rank</th></tr>

<?php  
	include 'connect.php';

	if (isset($_POST['go'])) {
		$search = $_POST['search'];
		echo "Search: ".$search;

		$sql = mysqli_query($con,"select * from players where id like '%$search%' or name like '%$search%' or class like '%$search%' or level like '%$search%' or rank like '%$search%' ") or die(mysqli_error());

		while ($row = mysqli_fetch_array($sql)) {
				$id = $row['id'];
				$name = $row['name'];
				$class = $row['class'];
				$level = $row['level'];
				$rank = $row['rank'];
				
?>

			<tr>
				<td><?php echo $id;  ?></td>
				<td><?php echo $name;  ?></td>
				<td><?php echo $class;  ?></td>
				<td><?php echo $level; ?></td>
				<td><?php echo $rank; ?></td>
				<td><a href="editProcess.php?edit=<?php echo $id;  ?>"> Edit </a></td>
				<td><a href="deleteProcess.php?delete=<?php echo $id;  ?>"> Delete </a></td>
			</tr>
<?php
}  
}
?>
	</table>

</body>
</html>