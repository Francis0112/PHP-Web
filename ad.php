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
				<img src="Addit.png">
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
							<li><a href="">Add</a></li>
					</div>
					<li><a href="DG.php">Dungeons and Boss Raids</a></li>
					<li><a href="pvp.php">PVP</a></li>
					<li><a href="int.php">Internationals</a></li>
				</ul>
			</div>

			<div class="main">

			<div class="cont">

			<h2 class="headtitle"> Character </h2>

				<img id="addlp" src="Addlp.png">

				<h3 class="head33"><img class="minipic2" src="LPNEW.png"> Lunatic Psycher </h3>
				<!--<img class="minipic2" src="LPNEW.png">-->

				<h3 class="head3"> Specialty </h3>

				<p class="contpara">With his new weapon, Plasma, Lunatic Psyker causes explosions, increases speed, conjures up tornado attacks and more. The perfected Nasod Armor allows Add to deal more threatening battle gear combos. The Hyperactive Skill spells Dooms Day for Add enemies. </p>

				<h3 class="head3"> Background </h3>

				<p class="contpara">As Psychic Tracer, Add thirst for power grows. On his search for a better way to store a large amount of El energy for his Dynamos, Add meets Adel, the chief of Altera, who informs him of the Altera Core's energy handling capacity.

"Altera Core is currently storing El-energy, Pong! Storing the enormous energy of El is not easy, Pong! It has an impressive energy handling feature, Pong!"

He visits the Core to investigate, and with his findings, he succeeds in upgrading the Dynamos, but there is one more problem. "Tch... damn it! Even if I upgrade the Dynamos, it nothing more than a piece of junk without a strong power source! I need something powerful enough to power the dynamos and perfect the Nasod Armor..."

To help Add in his search of power, Adel leads Add to Feita, where the fierce battle against the demons was taking place. There, Add found a powerful negative energy source that demons used.

"This is it! I found the missing piece to my research, khahahahaha!"

With Lento help, he succeeds in changing the demons Dark El into a Moon Stone, and he uses it to perfect his Nasod Armor. With the ultimate creation now at its perfection, the Nasod Armor has more destructive force than ever before.

This was the birth of the Merciless Destroyer annihilating anyone that crosses his path! People named the lunacy-drenched warrior Lunatic Psyker. </p>

				
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

</body>
</html>