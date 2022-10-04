<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fixCSS.css">
<script type="text/javascript" src = "fixJS.js"></script>
	<title></title>
</head>
<body>
<?php
	session_start();
	$_SESSION['user_username'];

?>
		<div class ="container">
			<div class="header">
			<img class="it" src="ITlogo.jpg">
				<h1> FDCIS.BLOG </h1>
				<ul>
					<li>Welcome: <?php echo $_SESSION['user_username'];  ?></li>
					<li><a href="logout.php"> Log out </a></li>				
				</ul>
	
			</div>

			<div class="nav">
					<ul>
					<li><a href="fix.php">Home</a></li>
					<li><a href="">Elsword</a></li>
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
				<img src="SKR.png">
				<!--<img src="ADDGif.gif">
				<img src="BMGif.gif">
				<img src="DCGif.gif">
				<img src="DCGif1.gif">
				<img src="lordkGif.gif">-->
				<ul>
					<li><a href="news.php">News</a></li>
					<li><a href="elswordd.php">Patch notes</a></li>
					<li><a href="event.php">Events</a></li>
							<p id="Characters">Characters</p>
					<div class="chars">
							<li><a href="el.php">Elsword</a></li>
							<li><a href="raven.php">Raven</a></li>
							<li><a href="ad.php">Add</a></li>
					</div>
					<li><a href="DG.php">Dungeons and Boss Raids</a></li>
					<li><a href="pvp.php">PVP</a></li>
					<li><a href="int.php">Internationals</a></li>
				</ul>
			</div>

			<div class="main">

			<div class="cont">

			<h2 class="headtitle"> News </h2>

			<!--<h3 class="head3"> [Elsword] - New Promo Trailer </h3>
				<video class="vds" controls="" poster="chung1.jpg">
					<source src="[Elsword PH] lSean (DC) VS Spandam (DC).mp4">
					<source src="Elsword - New Promo Trailer.mp4">
					</video><p> Check out this new promo trailer for Elsword.</p>-->

				<h3 class="head3"> [Elsword Official] Gameplay Features Promo </h3>
				<video class="vds" controls="" poster="elpromo.jpg" autoplay="">
					<source src="[Elsword Official] Gameplay Features Promo.mp4">
					</video><p> Check out this new promo trailer for Elsword.</p>

					<h3 class="head3"> Elsword Official - Time Tracer and Diabolic Esper Trailer </h3>
				<video class="vds" controls="" poster="addsmall.png">
					<source src="Elsword Official - Time Tracer and Diabolic Esper Trailer.mp4">
					</video><p> Check out this new promo trailer for Elsword.</p>
					


				
			</div>
			</div>

			<div class="sidebar">
				<!--<img src="Add.png" title="Lunatic Pyscher">
				<img src="IS.png" title="Infinity Sword">
				<img src="VP.jpg" title="Void Princess">
				<img id="rf" src="rf.png" title="Reckless Fist">
				<img id="send" src="cra.jpg" title="Crimson Avenger">-->
				
			</div>

			<div class="footer">
				<ul>
					<li><a href=""> About FDCIS </a></li>
					<li><a href=""> I.T Development </a></li>
					<li><a href=""> Carrers</a></li>
					<li><a href=""> Help </a></li>
					<li><a href=""> Contact Us </a></li>
				</ul>
				<p> &copy 2017 FDCIS. ALL RIGHT RESERVED. </p>
			</div>
		</div>
<script type="text/javascript" src = "fixJS.js"></script>
</body>
</html>