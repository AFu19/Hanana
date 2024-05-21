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
<body style="overflow: hidden;">

	<input type="hidden" name="email" id="email" value="<?= $email ?>">

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

<section class="chooseyear">
	<div class="container">
		<h1>Hi <span>User</span>, please choose the 
date of the event</h1>

		<div class="row chooseyear-year">

			<?php 
			$thn = date('Y');
			
			for($x = 1; $x <= 4; $x++){
		

			?>

			<span id="<?php echo $x ?>" onclick="f_tahun(<?php echo $x ?>)" value="<?= $thn; ?>" >
					<?= $thn; ?>
				</span>

				

			<?php  $thn++; } ?>

			<br>

			<input type="text" id="hasiltahun" class="hasilpilihtahun" style="
			width: 560px;
		    height: 40px;
		  	border-radius: 6px;
		  	border: 1px solid #CACACA;
		  	font-size: 30px;
		  	text-align: center;
		  	" disabled>
			<!-- <span>2021</span>
			<span>2022</span>
			<span>2023</span>
			<span>2024</span> -->

			<button style="
			width: 560px;
		    height: 40px;
		  	border-radius: 6px;
		  	border: 1px solid #D742F5;
		  	background-color: #D742F5;
		  	color: #FFF;
		  	" 
		  	class="btn" id="chooseyearnext" onclick="f_next()">Next</button>

		</div>

	</div>
</section>
	
<script>
	function f_tahun(x){
		var mentah = document.getElementById(x).innerHTML;
		document.getElementById("hasiltahun").value = mentah;
	}

	function f_next(){
		var tahun = document.getElementById('hasiltahun').value;
		location.href = "choosemonth.php?tahun="+tahun;
	}
</script>

	
</body>
</html>