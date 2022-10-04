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
				<img src="OT.png">
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

			<h2 class="headtitle"> Event </h2>

				<h3 class="head3"> Get Ready for Elsword Anniversary! </h3>
				<p><sub> April 12th, 2017 </sub></p>
				<img class="contimg" src="eventpic.jpg">

				<h3 class="head3"> Transcendence Class Change Ticket </h3>
				<p><sub> March 22nd, 2017 </sub></p>

				<p class="contpara"> To celebrate the release of Ain last Transcendence, there will be a timer event to receive a Transcendence Class Change Exchange Ticket for everyone whos already Transcended. Choose a character you want to use to receive the item and dont miss this event. Join now! </p>
				<p class="contpara1"> Transcendence Class Change Ticket </p>
				<p class="contpara"><sub> 03/22/2017-03/28/2017 (Ends 11:59 PM PDT)</sub> </p>

				<h3 class="head3"> Ain 3rd Transcendence Event </h3>
				<p><sub> March 15th, 2017 </sub></p>

				<p class="contpara"> Ain is the master of his own fate now as he is no longer bound to the Goddess and his mission. Consumed by the Power of Henir, he becomes the Ruler of the Abyss. Turn this ruler into an allpowerful being and watch his enemies fall! Unlock Apostasias true potential when you transcend him and get awesome accessories during this event. Dont miss it!  </p>

				<p class="contpara1"> Symbol of Transcendence Reward </p>
				<p><sub>03/15/2017  03/28/2017 (Ends 11:59 PM PDT)</sub></p>

				<p class="contpara1"> Ain Transcendence Achievement Reward </p>
				<p class="contpara"><sub> 03/15/2017  03/28/2017 (Ends 11:59 PM PDT) </sub></p>

				<img class="contimg1" src="ain.jpg">





				
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