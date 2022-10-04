<?php  

	include 'connect.php';
	
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = mysqli_query($con, "select * from users where username = '$username' and password = '$password' ") or die(mysqli_error());
		$count = mysqli_num_rows($sql);

		if ($count == 1) {
			session_start();

			$row = mysqli_fetch_array($sql);
			$session_username = $row['username'];
			$session_id = $row['id'];

			$_SESSION['user_username'] = $session_username;
			$_SESSION['user_id'] = $session_id;

			header('location:fix.php');

		}		

			elseif ($count != 1) {
				header('location:login.php');
			}

		}
	
?>