<?php $foo = ’bar’; ?>
<html>
	<head>
		<title>My Photo Album</title>
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="container">
				<h1>My Photo Album</h1>
				<h2>By Derek Ince</h2>
			</div>
		</header>
		<div class="container">
			<main id="photos">
				<img src="Images/mountain.JPG" alt="Mount Greys" />
				<div id="more-photos">
					<img src="Images/derek.JPG" alt="derek" />
					<img src="Images/hikers.JPG" alt="a group of hikers" />
				</div>
				<a href="#" id="show-more">Show more</a>
				<a href="#" id="show-less">Show less</a>
			</main>
			<aside>
				<h3>Photo Album Details</h3>
				<h4>Location</h4>
				<p class="location">Grey's Peak, CO</p>
				
				<hr>

				<h4>Date Added</h4>
				<p> Tuesday, October 4, 2016</p>
				
				<hr>
				
				<h4>Description</h4>
				<p>These are some photos from my first 14'er!! Gnarly!</p>
			</aside>
		</div>
		<footer>
			<h4>Deloitte Digital</h4>
			<p>&copy; 2016 <a href="http://www.deloittedigital.com/us/">Deloitte Digital</a>. All Rights Reserved.</p>
		</footer>

		<!-- Javascript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script>
		<script src="js/main.js"></script>

	</body>
</html>