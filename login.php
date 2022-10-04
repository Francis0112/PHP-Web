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

?>

	<div class="fullscreen-bg">
    <video loop muted autoplay poster="elswords.jpg" class="fullscreen-bg__video">
        <source src="Elsword Official - Ain Trailer.mp4" type="video/mp4">
    </video>
	</div>


	<div class="container">
		<div class="header">
		<h3>Login</h3>
	</div>
	<div class="imgCon">
		<img src="logavatar.jpg" class="avatar">
	</div>

		<div class="link">
		<ul>
			<li><a href="signup.php"> Sign up </a></li>
		</ul>
		</div>
		

		<form class="form" action="loginProcess.php" method="post" onsubmit="return lgvaldate()">
		<p></p>
			<div class="row">
			<label for="usernameLG"> Username:</label>
			<input type="text" placeholder="Enter username" id="usernameLG" name="username" required>
			</div>
<div class="row"><p></p></div>	
			<div class="row">
			<label for="passwordLG"> Password: </label>
			<input type="password" placeholder="Enter password" id="passwordLG" name="password" required>
			</div>
<br>			
			<input type="submit" class="btn" name="submit" value="login">
		
		</form>
	</div>
</body>
</html>