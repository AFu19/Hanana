<?php 

include "conn.php";

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
<body style="
background: rgba(0,0,0,0.5) url(img/1.jpg);
background-blend-mode: darken;
background-size: cover;
overflow: hidden;
"> 
<section class="signin">
	<div class="container">
		<div class="row position-relative">
			<div class="col">
			<div class="kiri position-absolute">
				<img src="img/logo.png" alt="">
				<h1>Easier Event</h1>
			</div>
			</div>

			<div class="circle-1"></div>
			<div class="circle-2"></div>

			<div class="col">
				<div class="box-cover position-absolute">
					<img src="img/logo.png" alt="">
					<form action="inputlogin.php" method="POST">
					<input type="email" name="email" id="email" placeholder="Email">
					<br>
					<input type="password" name="password" id="password" placeholder="Password">
					<br>
					<button name="submit" id="submit" onclick="f_login()">Login</button>
					<div class="link-signup">
						<h4>Don't have account <a href="signup.php">Sign Up</a></h4>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>