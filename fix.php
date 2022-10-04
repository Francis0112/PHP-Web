<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fixCSS.css">
<link rel="stylesheet" type="text/css" href="fixAndroidCSS.css">
<script type="text/javascript" src = "fixJS.js"> </script>
	<title></title>
</head>
<body>

<?php  

	include 'connect.php';
	session_start();
	$_SESSION['user_username'];	
	 $idd = $_SESSION['user_id'];

	$sql = mysqli_query($con,"select * from users where id ='$idd' ") or die(mysqli_error());
	$row = mysqli_fetch_array($sql);
	$id = $row['id'];
	
?>
		<div class ="container">
			<div class="header">
			<img class="it" src="ITlogo.jpg">
				<h1> francis.Blog </h1>
				<ul>
					<li>Welcome: <?php echo $_SESSION['user_username'];  ?></li>
					<li><a href="editacc.php?edit=<?php echo $id;  ?>"> Account </a></li>
					<li><a href="logout.php"> Log out </a></li>				
				</ul>
	
			</div>

			<div class="nav">
				<ul>
					<li><a href="fix.php">Home</a></li>
					<li><a href="news.php">Elsword</a></li>
					<li><a href="anime.php">Anime</a></li>
					<li class="dropdown"><a href="" class="dropbtn"> Project </a>
			<div class="dropdown-content">
					<a href="myCSSweb.html">web progject </a>
					<a href=""> Game Development </a>
					<a href="players.php"> Web CRUD </a>
				</div>
					</li>
					<li><a href="Elsword_Downloader.exe"> Download </a></li>
				</ul>
			</div>

			<div class="ADS">
				<img src="ADDGif.gif">
				<img src="BMGif.gif">
				<img src="DCGif.gif">
				<img src="DCGif1.gif">
				<img src="lordkGif.gif">
			</div>

			<div class="main">

			<div class="cont">

			<div class="slider">
				<img class="slide" onload="show()" src="adds.jpg">
				<img class="slide" src="adds1.jpg">
				<img class="slide" src="adds2.jpg">
				<img class="slide" src="adds3.jpg">
				<img class="slide" src="adds4.jpg">
				<img class="slide" src="adds5.jpg">
			</div>
<br>
<br>
				<h3 class="head3"> [Elsword] - New Promo Trailer </h3>
				<video class="vds" controls="" poster="promo.jpg">
					<source src="Elsword - New Promo Trailer.mp4">
					</video><p> Check out this new promo trailer for Elsword.</p>
<br>
<br>
					<h3 class="head3"> [Elsword] Rose - Anime Trailer </h3>
				<video class="vds" controls="" poster="rose.jpg">
					<source src="[Elsword] Rose - Anime Trailer.mp4">
					</video><p> The "ECP System" enables her to switch to 4 different weapons and activate Over Strike. </p>
<br>
<br>
					<h3 class="head3"> [Elsword Official] Chung 2nd Job Class Trailer </h3>
				<video class="vds" controls="" poster="chungposter.jpg">
					<source src="[Elsword Official] Chung 2nd Job Class Trailer.mp4">
					</video><p> Chung's most notable feature is his Ammo. With the Cannonball Reload System, Chung is able to maintain a stable supply of ammo to fight. He also has the ability to transform into Berserk mode. </p>
<br>
<br>
					<h3 class="head3"> [Elsword Official] Elsword Way of the Sword Trailer </h3>
				<video class="vds" controls="" poster="aura.jpg">
					<source src="[Elsword Official] Elsword Way of the Sword Trailer.mp4">
					</video><p> The "Way of the Sword" ability enables him to utilize the energy gained through attacks and skills into 2 types of auras: Aura of Vitality and Aura of Destruction. Aura of Vitality helps Elsword to recover mana faster by 300% through certain commands and allows Elsword to use skills labeled as "Vitality skills" at a lower MP cost, allowing Elsword to make the most out of his MP pool. Aura of Destruction helps Elsword to do more damage by increasing the damage of his heavy attacks and skills labeled as "Destruction skills" by 100% and 50%, respectively.</p>
<br>
<br>			
			</div>
			</div>

			<div class="sidebar">
				<img src="Add.png" title="Lunatic Pyscher">
				<img src="IS.png" title="Infinity Sword">
				<img src="VP.jpg" title="Void Princess">
				<img id="rf" src="rf.png" title="Reckless Fist">
				<img id="send" src="cra.jpg" title="Crimson Avenger">
				
			</div>

			<div class="footer">
				<ul>
					<li><a href=""> About francis </a></li>
					<li><a href=""> I.T Development </a></li>
					<li><a href=""> Carrers</a></li>
					<li><a href=""> Help </a></li>
					<li><a href=""> Contact Us </a></li>
				</ul>
				<p> &copy 2017 FDCIS. ALL RIGHT RESERVED. </p>
			</div>
		</div>
</body>
</html>