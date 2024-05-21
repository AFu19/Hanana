<?php
session_start();
$events = $_GET['events'];
$others = $_GET['others'];
$email = $_SESSION['email'];
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
</head>
<body>

<section class="chooseevents">
	<div class="container">
		<h1>Hi <span>User</span>, can I know what
 kind of event you are planning on?</h1>
 <input type="hidden" name="" value="<?= $events ?>" id="events">
<input type="hidden" name="" value="<?= $others ?>" id="others">
<input type="hidden" name="email" id="email" value="<?= $email ?>">

 	<div class="row events">
 		<div class="col box" onclick="place('Indoor')">
 			<div class="events-image">
 				<img src="img/4.jpg" alt="">
 			</div>
 			<div class="details">
 				<div class="title" id="indoor">
 				  <h4 style="letter-spacing: 0.12em;">Indoor</h4>
 			   </div>
 			</div>
 		</div>
 		
 		<div class="col box" onclick="place('Outdoor')">
 			<div class="events-image">
 				<img src="img/5.jpg" alt="">
 			</div>
 			<div class="details">
 				<div class="title" id="outdoor">
 				  <h4 style="letter-spacing: 0.12em;">Outdoor</h4>
 			   </div>
 			</div>
 		</div>
 	</div>

 	<input type="text" name="otherevents" id="otherevents"  oninput="others()" disabled style="
 	position: absolute;
 	left: 585px;
 	top: 525px;
 	text-align: center;
 	">

 	<input type="hidden" name="place" id="place">

 	<button onclick="next()">Next</button>
		
	</div>
</section>

<script>
	function place(place){
		document.getElementById('place').value = place;
		document.getElementById('otherevents').value = place 
	}

	function next(){
		var place = document.getElementById('place').value;
		var events = document.getElementById('events').value;
		var others = document.getElementById('others').value;

		location.href= "choosevendor.php?events="+events+"&others="+others+"&place="+place;
	}
</script>

	
</body>
</html>