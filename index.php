<?php

include 'conn.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hanana</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light napbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" id="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-4">
        <input class="form-control me-2" type="search" placeholder="Search Vendors / Place / Events" aria-label="Search" id="inputsearch">
        <button class="btn btn-outline-light" type="submit" onclick="search()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z"></path></svg></button>
      </form>
      <div class="d-flex ms-auto icon">
      	<button class="btn "><i class="fas fa-user fa-2x"></i></button>
      	<button class="btn"><i class="fas fa-store fa-2x"></i></button>
      	<button class="btn"><i class="fas fa-bell fa-2x"></i></button>
      	<button class="btn rp" onclick="hasilbid()"><i class="fas fa-dollar-sign fa-1x"></i></button>
      	<button class="btn logout m-auto" onclick="logout()">Log-Out</button>
      </div>
    </div>
  </div>
</nav>

<div class="jumbotron">
	<div class="image-heroes">
		<img src="img/15.jpg" alt="">
	</div>
	<div class="detail-image-heroes">
		<div class="detail-image-heroes-text">
			<h1>Easier Events</h1>
		</div>
	</div>
</div>

<div class="container mt-5 mb-5 detail-posts-index">
	<div class="events-container">
		<h1>Events Organiser</h1>
		<hr>
	</div>
	<div class="row">
		<div class="col mt-4 hanana-post">
			<div class="image-post">
				<img src="img/16.jpg" alt="">
			</div>
			<div class="text-post mt-2">
				<h2>Chinese Traditional Events</h2>
				<hr>
				<h3>Xinjia Organizer</h3>
				<p>Since 2015 we are the organizer of traditional Chinese weddings, and we are one of the organizers of the largest chinese wedding ceremony in Indonesia.</p>
			</div>
		</div>

		<div class="col mt-4 hanana-post">
			<div class="image-post">
				<img src="img/16.jpg" alt="">
			</div>
			<div class="text-post mt-2">
				<h2>Chinese Traditional Events</h2>
				<hr>
				<h3>Xinjia Organizer</h3>
				<p>Since 2015 we are the organizer of traditional Chinese weddings, and we are one of the organizers of the largest chinese wedding ceremony in Indonesia.</p>
			</div>
		</div>

		<div class="col mt-4 hanana-post">
			<div class="image-post">
				<img src="img/16.jpg" alt="">
			</div>
			<div class="text-post mt-2">
				<h2>Chinese Traditional Events</h2>
				<hr>
				<h3>Xinjia Organizer</h3>
				<p>Since 2015 we are the organizer of traditional Chinese weddings, and we are one of the organizers of the largest chinese wedding ceremony in Indonesia.</p>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5 mb-5 detail-posts-index">
	<div class="events-container">
		<h1>Venue</h1>
		<hr>
	</div>
	<div class="row">
		<div class="col mt-4 hanana-post">
			<div class="image-post">
				<img src="img/16.jpg" alt="">
			</div>
			<div class="text-post mt-2">
				<h2>Chinese Traditional Events</h2>
				<hr>
				<h3>Xinjia Organizer</h3>
				<p>Since 2015 we are the organizer of traditional Chinese weddings, and we are one of the organizers of the largest chinese wedding ceremony in Indonesia.</p>
			</div>
		</div>

		<div class="col mt-4 hanana-post">
			<div class="image-post">
				<img src="img/16.jpg" alt="">
			</div>
			<div class="text-post mt-2">
				<h2>Chinese Traditional Events</h2>
				<hr>
				<h3>Xinjia Organizer</h3>
				<p>Since 2015 we are the organizer of traditional Chinese weddings, and we are one of the organizers of the largest chinese wedding ceremony in Indonesia.</p>
			</div>
		</div>

		<div class="col mt-4 hanana-post">
			<div class="image-post">
				<img src="img/16.jpg" alt="">
			</div>
			<div class="text-post mt-2">
				<h2>Chinese Traditional Events</h2>
				<hr>
				<h3>Xinjia Organizer</h3>
				<p>Since 2015 we are the organizer of traditional Chinese weddings, and we are one of the organizers of the largest chinese wedding ceremony in Indonesia.</p>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5 mb-5 detail-posts-index">
	<div class="events-container">
		<h1>Trending</h1>
		<hr>
	</div>
	<div class="row">
<div class="col">
		<div class="image-row-trending">
		  <div class="image-trending">
			<img src="img/6.jpg" alt="">
		</div>
		<div class="image-row-trending-box">
			<div class="image-row-trending-box-text text-center">
				<h2>Music</h2>
			</div>
		</div>
	</div>
</div>

<div class="col">
		<div class="image-row-trending">
		  <div class="image-trending">
			<img src="img/6.jpg" alt="">
		</div>
		<div class="image-row-trending-box">
			<div class="image-row-trending-box-text text-center">
				<h2>Music</h2>
			</div>
		</div>
	</div>
</div>

<div class="col">
		<div class="image-row-trending">
		  <div class="image-trending">
			<img src="img/6.jpg" alt="">
		</div>
		<div class="image-row-trending-box">
			<div class="image-row-trending-box-text text-center">
				<h2>Music</h2>
			</div>
		</div>
	</div>
</div>

<div class="col">
		<div class="image-row-trending">
		  <div class="image-trending">
			<img src="img/6.jpg" alt="">
		</div>
		<div class="image-row-trending-box">
			<div class="image-row-trending-box-text text-center">
				<h2>Music</h2>
			</div>
		</div>
	</div>
</div>
<div class="col">
		<div class="image-row-trending">
		  <div class="image-trending">
			<img src="img/6.jpg" alt="">
		</div>
		<div class="image-row-trending-box">
			<div class="image-row-trending-box-text text-center">
				<h2>Music</h2>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<section class="footer mt-5">
	<div class="container container-footer">
		<div class="row">
			<div class="col">
				<h1>Hanana</h1>
				<a href="#" id="about">About Us</a>
			</div>

			<div class="col">
				<h1>Follow Us At</h1>
				<a href="#" id="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" id="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" id="twitter"><i class="bi bi-twitter"></i></a>
			</div>

			<div class="col">
				<h1>Help and Conditions</h1>
				<a href="#" id="about">Terms and Conditions</a>
			</div>

			<div class="col">
				<img src="img/logo.png" alt="">
				<p class="text-center tagline">Easier Events</p>
				<p class="text-center copyright">© 2021 - PT. Hanana</p>
			</div>
		</div>
	</div>
</section>

<script>
	function logout(){
		location.href="logout.php";
	}

	function search(){
		var inputsearch = document.getElementById('inputsearch').value;
		location.href = "search.php?inputsearch="+inputsearch;
	}

	function hasilbid(){
		location.href="rent.php";
	}
</script>

</body>
</html>