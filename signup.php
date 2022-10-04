<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="crudcss.css">
<script type="text/javascript" src ="fixJS.js"></script>
	<title></title>
</head>
<body class="login">

<?php  

	include 'connect.php';

	if (isset($_GET['$msg'])) {
		echo $_GET['$msg'];
	}


?>

	<div class="fullscreen-bg">
    <video loop muted autoplay poster="elswords.jpg" class="fullscreen-bg__video">
        <source src="Elsword Official - Ain Trailer.mp4" type="video/mp4">
    </video>
	</div>

	<div class="container">
	<div class="header">
		<h3>Sign Up</h3>
	</div>
	<div class="imgCon">
		<img src="logavatar.jpg" class="avatar">
	</div>

		<div class="link">
		<ul>
			<li><a href="login.php"> Sign in </a></li>
		</ul>
		</div>

		<p></p>
		<form class="form" action="signupProcess.php" method="post" onsubmit="return valdate()">
			<div class="row">
			<label for="username"> Username: </label>
			<input type="text" placeholder="Enter username" id="username" name="username" required>
			</div>
<div class="row"><p></p></div>	
			<div class="row">
			<label for="password"> Password: </label>
			<input type="password" placeholder="Enter password" id="password" name="password" required>
			</div>
<div class="row"><p></p></div>	
			<div class="row">
				<label for="confirm"> Confirm: </label>
				<input type="password" placeholder="Confirm password" id="confirm" name="confirm" required>
			</div>
<br>
			<input type="submit" class="btn" name="submit" value="Done">
		
		</form>
		
	</div>
</body>
</html>