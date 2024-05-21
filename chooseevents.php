<?php 
session_start();
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

<input type="hidden" name="email" id="email" value="<?= $email ?>">

<section class="chooseevents">
	<div class="container">
		<h1>Hi <span>User</span>, can I know what
 kind of event you are planning on?</h1>

 	<div class="row events">
 		<div class="col box" onclick="events('Birthday')" id="box" style="cursor: pointer;">
 			<div class="events-image">
 				<img src="img/2.jpg" alt="">
 			</div>
 			<div class="details">
 				<div class="title">
 				  <h4>Birthday</h4>
 			   </div>
 			</div>
 		</div>
 		
 		<div class="col box"  onclick="events('Wedding')" id="box" style="cursor: pointer;">
 			<div class="events-image">
 				<img src="img/3.jpg" alt="">
 			</div>
 			<div class="details">
 				<div class="title">
 				  <h4>Wedding</h4>
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

 	<input type="hidden" name="" id="nameevents" style="position: absolute; ">

 	<button onclick="next()">Next</button>
		
	</div>
</section>

<script>
	function events(events){
		document.getElementById('nameevents').value = events;
		document.getElementById('otherevents').disabled = true;
		document.getElementById('otherevents').value = events;
	}

	function next(){
		var events = document.getElementById('nameevents').value;
		var others = document.getElementById('otherevents').value;

		location.href= "chooseplace.php?events="+events+"&others="+others;
	}

	function others(){
		 document.getElementById('box').disabled = true;
	}
</script>

	
</body>
</html>