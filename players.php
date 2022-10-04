<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
<script type="text/javascript" src ="fixJS.js"></script>
	<title></title>
</head>
<body class ="crud555">

<?php  
	include 'connect.php';
	session_start();
?>
<div class="hed">
<ul>
	<li>Welcome to CRUD: <?php echo $_SESSION['user_username'];  ?></li>
	<li><a href="fix.php"> Home </a></li>
	<li><a href="logout.php"> logout </a></li>
</ul>
</div>

<h3> Add Player</h3>
<hr>

<form action="addProcess.php" method="post">
	<div class="row">
		<label for="pname"> Name: </label>
		<input type="text" placeholder="Enter name" id="pname" name="name">
	</div>
<div class="row"><p></p></div>
	<div class="row">
		<label for="character"> Character: </label>
		<input type="text" placeholder="Enter character" id="character" name="class">
	</div>
<div class="row"><p></p></div>
	<div class="row">
		<label for="level"> Level </label>
		<input type="text" placeholder="Enter level" id="level" name="level">
	</div>
<div class="row"><p></p></div>
	<div class="row">
		<label for="rank"> Rank: </label>
		<input type="text" placeholder="Enter rank" id="rank" name="rank">
	</div>
<div class="row"><p></p></div>
		<input type="submit" name="add" value="    ADD    ">
</form>

<br>

<h3> Players </h3>
<hr>

	<form action="searchProcess.php" method="post">
	<div class="row">
		<label for="search"> Search: </label>
		<input type="text" placeholder="Search" id="search" name="search"><input type="submit" name="go" value="Search">
	</div>
	</form>
	
<br>

	<table border="1">
		<tr><th>ID</th><th>Name</th><th>Character</th><th>Level</th><th>Rank</th></tr>
		<?php  
			$sql = mysqli_query($con,"select * from players");
			while ($row = mysqli_fetch_array($sql)) {
				$id = $row['id'];
				$name = $row['name'];
				$class = $row['class'];
				$level = $row['level'];
				$rank = $row['rank'];
			
		?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $class; ?></td>
					<td><?php echo $level; ?></td>
					<td><?php echo $rank; ?></td>
					<td><a href="editProcess.php?edit=<?php echo $id; ?>"> Edit </a></td>
					<td><a href="deleteProcess.php?delete=<?php echo $id; ?>"> Delete </a></td>
				</tr>
		<?php } ?>
	</table>
</body>
</html>