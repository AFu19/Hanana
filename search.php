<?php

  include 'conn.php';
  $inputsearch = $_GET['inputsearch'];


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
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light napbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" id="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-4">
        <input class="form-control me-2" type="search" placeholder="Search Vendors / Place / Events" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z"></path></svg></button>
      </form>
      <div class="d-flex ms-auto icon">
      	<button class="btn "><i class="fas fa-user fa-2x"></i></button>
      	<button class="btn"><i class="fas fa-store fa-2x"></i></button>
      	<button class="btn"><i class="fas fa-bell fa-2x"></i></button>
      	<button class="btn rp"><i class="fas fa-dollar-sign fa-1x"></i></button>
      	<button class="btn logout m-auto">Log-Out</button>
      </div>
    </div>
  </div>
</nav>

<section class="search">
    <div class="container mt-4">
        <h2>Search Result</h2>
        <hr>
        <div class="row">
            <div class="col mt-4 hanana-post">
			<div class="image-s">
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
</section>



</body>
</html>