<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cinema App</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,400'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Khula'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'><link rel="stylesheet" href="./style.css">
<?php
include 'connect.php';
$username = $_GET['id'];
?>
</head>
<body>
<!-- laman book start -->
<div class="wrapper"> 
	<div class="side">
		<div class="bg"></div>
		<div>
			<h3>Cinema App</h3>
		</div>
		<input type="text" class="search" placeholder="Search" />
		<ul class="menu">
			<li title="" class="selected"><i class="zmdi zmdi-label-alt"></i> Now Playing</li>
			<a href="menu.php?id=<?php echo $username; ?>"><li title="" class="selected"><i class="zmdi zmdi-label-alt"></i> Account</li></a>
		</ul>
	</div>
	<div class="main-wrap">
		<div class="main">
			<div class="list">
				<div class="scroll">
					<button class="scrollTop"><i class="zmdi zmdi-arrow-left"></i></button>
					<button class="scrollDown"><i class="zmdi zmdi-arrow-right"></i></button>
				</div>
				<header>
					<ul class="filter">
						<li data-gid="," class="selected">All</li>
						<li data-gid="28">Action</li>
						<li data-gid="12">Adventures</li>
						<li data-gid="35">Comedy</li>
						<li data-gid="18">Drama</li>
					</ul>
				</header>
				<div class="content">
					<ul class="covers"></ul>
				</div>
			</div>
			<div class="checkout">
				<div class="sinopsis">
					<button class="back">
						<i class="zmdi zmdi-arrow-left"></i>
					</button>						
					<img class="cover" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//gfJGlDaHuWimErCr5Ql0I8x9QSy.jpg)">
					<h3>Wonder Woman</h3>
					<p>An Amazon princess comes to the world of Man to become the greatest of the female superheroes.</p>
					<span>Wed, 28 Jun </span>
					<small>16:00 (2h 15m)</small>
				</div>
				<section>
					<ul class="legend">
						<li>available</li>
						<li>taken</li>
					</ul>
					<span>Select your seats</span>
					<div class="seats"></div>
					<div class="screen">screen</div>
				</section>
				<div class="total">
					<small>Total </small><span>$0</span>
					<button>CHECKOUT</button>
					<div class="loader"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- laman book end -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./script.js"></script>
</body>
</html>