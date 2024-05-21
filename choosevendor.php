<?php
session_start();
$events = $_GET['events'];
$others = $_GET['others'];
$place = $_GET['place'];
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
<body style="height: 1000px">

<section class="choosevendor">
	<div class="container">
		<h1>Hi <span>User</span>, please choose 
what you need</h1>

<input type="hidden" name="" value="<?= $events ?>" id="events">
<input type="hidden" name="" value="<?= $others ?>" id="others">
<input type="hidden" name="" value="<?= $place ?>" id="place">
<input type="hidden" name="email" id="email" value="<?= $email ?>">

 	<div class="row vendor">
 		<div class="col vendors" onclick="vendors('Music')">
 			<div class="vendor-image">
 				<img src="img/6.jpg" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4>Music</h4>
 				</div>
 			</div>
 		</div>

 		<div class="col vendors" onclick="vendors('Events')">
 			<div class="vendor-image">
 				<img src="img/7.jpg" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4>Events</h4>
 				</div>
 			</div>
 		</div>

 		<div class="col vendors" onclick="vendors('Clothing')">
 			<div class="vendor-image">
 				<img src="img/8.jpg" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="clothing">Clothing</h4>
 				</div>
 			</div>
 		</div>
 	</div>

 	 <div class="row vendor">
 		<div class="col vendors" onclick="vendors('Invitation')">
 			<div class="vendor-image">
 				<img src="img/9.png" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="invitation">Invitation</h4>
 				</div>
 			</div>
 		</div>

 		<div class="col vendors" onclick="vendors('Cameramen')">
 			<div class="vendor-image">
 				<img src="img/10.jpg" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="cameramen">Cameramen</h4>
 				</div>
 			</div>
 		</div>

 		<div class="col vendors" onclick="vendors('Photobooth')">
 			<div class="vendor-image">
 				<img src="img/11.jfif" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="photobooth">Photobooth</h4>
 				</div>
 			</div>
 		</div>
 	</div>


 	<div class="row vendor">
 		<div class="col vendors" onclick="vendors('MC')">
 			<div class="vendor-image">
 				<img src="img/12.jfif" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="mc">MC</h4>
 				</div>
 			</div>
 		</div>

 		<div class="col vendors" onclick="vendors('MakeUp')">
 			<div class="vendor-image">
 				<img src="img/13.jfif" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="makeup">MakeUp</h4>
 				</div>
 			</div>
 		</div>

 		<div class="col vendors" onclick="vendors('Food')">
 			<div class="vendor-image">
 				<img src="img/14.jfif" alt="">
 			</div>
 			<div class="detail-vendor">
 				<div class="vendors-name">
 					<h4 id="food">Food</h4>
 				</div>
 			</div>
 		</div>
 	</div>

 	<input type="text" name="vendors" id="vendors" style="
 	position: absolute;
 	top: 820px;
 	left: 500px;
 	width: 360px;
 	border-radius: 4px;
 	border:1px solid #1B1B1B;
 	">


 	<button style="position: absolute;
  top: 880px;
  left: 600px;
  width: 180px;
  height: 60px;
  margin-bottom: 60px;
  background: var(--main-color);
  color: #fff;
  border: 1px solid var(--main-color);
  border-radius: 4px;
  font-size: 24px;" onclick="next()" name="cmd" id="cmd" value="toevents">Submit</button>
		
	</div>
</section>

<section class="kosong">
	
</section>


<script>
	function vendors(vendors){
		document.getElementById('vendors').value += vendors+",";
	}

	function next(){
		var vendors = document.getElementById('vendors').value;
		var place = document.getElementById('place').value;
		var events = document.getElementById('events').value;
		var others = document.getElementById('others').value;
		var cmd = document.getElementById('cmd').value;
		var email = document.getElementById('email').value;

		location.href= "input.php?events="+events+"&others="+others+"&place="+place+"&vendors="+vendors+"&email="+email+"&cmd="+cmd;
	}
</script>
	
</body>
</html>