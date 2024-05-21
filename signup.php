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

	<div class="circle-1-signup"></div>
	<div class="circle-2-signup"></div>
	<div class="circle-3-signup"></div>
	<div class="circle-4-signup"></div>
	<div class="circle-5-signup"></div>
	<div class="circle-6-signup"></div>
	<div class="circle-7-signup"></div>
	<div class="circle-8-signup"></div>
	<div class="circle-9-signup"></div>
	<div class="circle-10-signup"></div>
	<div class="circle-11-signup"></div>
	<div class="circle-12-signup"></div>
	<div class="circle-13-signup"></div>

<section class="signup">
	<div class="container">
		<img src="img/logo.png" alt="">
		<h1>Sign - Up to rent a talents and venue
from any organizer</h1>
<form action="input.php" method="GET">
		<input type="text" name="username" id="username-signup" placeholder="Username">
		<input type="email" name="email" id="email-signup" placeholder="Email">
		<input type="password" name="password" id="password-signup" placeholder="Password">
		
		<button name="back" id="back">Back</button>
		<button name="cmd" id="submit-signup" value="register" onclick="f_daftar()">Submit</button>
		</form>
	</div>
	
</section>

<script>
	function f_daftar(){
		var username = document.getElementById('username-signup').value;
		var email = document.getElementById('email-signup').value;
		var password = document.getElementById('password-signup').value;
		var cmd = document.getElementById('submit-signup').value;

		location.href="input.php?username="+username+"&email="+email+"password="+password+"cmd="+cmd;
		
	}
</script>

	
</body>
</html>