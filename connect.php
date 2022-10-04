<?php  

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'fix';

	$con = mysqli_connect($servername,$username,$password,$dbname);

		if (!$con) {
			die(mysqli_connect_error());
		}

?>