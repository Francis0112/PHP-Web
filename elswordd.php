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
				<img src="elswords.jpg">
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

			<h2 class="headtitle"> Patch Notes </h2>

				<h3 class="head3"> Dev Diary: Elsword Season 2 Update: The Final Chapter The Wrap Up  </h3>
				<p> <sub>March 3rd, 2016</sub></p>

				<p class="contpara"> From the Prelude to Season 2 and then subtly *cough* hinted throughout Elsword Season 2 episodic launch, KOG Games has updated many aspects of both Elsword and KOG Games as a company: Raid Boss content, complete character revamps, Skill Tree renewals, Command Skills, new EN voices, the return of the Dev Diary, Customer Support improvements, Livestreams, Tournaments Epic, limited edition prize giveaway The works! </p>

				<p class="contpara"> World renowned actors and actresses from Anime and gaming VO, TV and Movies, Singers, Songwriters and Dancers, and even Broadway musical stars have joined the Elsword cast: Cristina Vee (Bleach, Sword Art Online) Nicolas Roye (Naruto, Digimon), Brian Beacock (Hollywood and Anime fame), Brianna Knickerbocker (Anime, Stage and Dance), Dina Sherman (Anime Veteran), Dan Woren, Kyle Herbert, Jessica Gee, Peter Doyle, Palomo Rodriguez, JC Hyke and many more… Orchestrated and directed by the very talented Michael Sorich (Akira, Cowboy Bebop, Bleach, Bobobo…, Eyeshield 21, Digimon, Shinzo and more). Basically, some of the biggest names in anime and gaming voice talent have been gracious enough and truly excited to work on Elsword; helping to immerse you guys and girls and taking your Elsword experience to a whole new level. That being said… from Batman to Bleach, and Durara to Rurouni Kenshin, these amazing men and women have lent voices that are renowned throughout the anime and gaming worlds to our character lineup. </p>

				<p class="contpara"> Today we took that lineup to the next level. The famed Bryce Papenbrook (of Trigun, Naruto, Attack on Titan, Sword Art Online (Kirito), Pokemon and many more) lent his pipes to Elsword’s maniacally insane virtuoso, Add. In addition to JC Hyke lending his vocal talent to bring Ciel to life, this will be one of the most exciting updates for Elsword yet! </p>

				<p class="contpara"> We’ve stated this before, but we’ve decided to make sure that everyone understands why we haven’t gone into detail about who’s voiced Elesis, Chung, Aisha and Lu? For as much as we’d love to tell you, there are some things we cannot disclose in any way. The entertainment world, in all its marvelous glory, has its fair share of red-tape. The actors and actresses that brought you these lovely ladies would love to tell you guys and girls about how much they loved this project; they told me in person. However, there are obligations, contractual agreements and other types of legal prohibitions that won’t allow it to happen. However, if you have some theories as to who may voiced these characters… we won’t stop you; we just can’t participate, confirm nor deny, in any way. But on that note, not only will all of the voice dialogue be updated with English voices for all 10 of our characters, all of the story-based NPC and Quest elements will be getting implemented very soon as well. </p>

				<p class="contpara"> The Tracer and Demon Duo usher in the final chapter of Elsword’s Season 2 Epic with an intensity that has yet to be seen! See you next time. </p>
			
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