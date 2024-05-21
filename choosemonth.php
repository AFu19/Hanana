<?php
session_start();
$email = $_SESSION['email'];
$thn = $_GET['tahun'];

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

<section class="choosemonth">
	<div class="container">
		<h1>Hi <span>User</span>, please choose the 
date of the event</h1>
		<input type="hidden" name="" value="<?= $thn ?>" id="tahun"> 
		<div class="row choosemonth-month">
			<span id="1" onclick="mth('Jan')">Jan</span>
			<span id="2" onclick="mth('Feb')">Feb</span>
			<span id="3" onclick="mth('Mar')">Mar</span>
			<span id="4" onclick="mth('Apr')">Apr</span>
		</div>
		<div class="row choosemonth-month-2">
			<span id="5" onclick="mth('May')">May</span>
			<span id="6" onclick="mth('Jun')">Jun</span>
			<span id="7" onclick="mth('Jul')">Jul</span>
			<span id="8" onclick="mth('Aug')">Aug</span>
		</div>
		<div class="row choosemonth-month-3">
			<span id="9" onclick="mth('Sep')">Sep</span>
			<span id="10" onclick="mth('Okt')">Okt</span>
			<span id="11" onclick="mth('Nov')">Nov</span>
			<span id="12" onclick="mth('Dec')">Dec</span>
		</div>
		<div class="row choosemonth-month-4">
			<input type="text" id="month" disabled>
			<button class="btn" class="nextchm" style="
			 width: 460px;
		     height: 40px;
		     background-color: var(--main-color);
		     margin-top: 20px;
		     color: var(--white);" onclick="f_next()">Next</button>
		</div>
	</div>
</section>

<script>
	function mth(mnth){
		document.getElementById('month').value = mnth;
	}

	function f_next(){
		var tahun = document.getElementById('tahun').value;
		var bulan = document.getElementById('month').value;

		if(bulan === "Jan"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Feb"){
			location.href = "choosedate-3.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Mar"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Apr"){
			location.href = "choosedate-2.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "May"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Jun"){
			location.href = "choosedate-2.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Jul"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Aug"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Sep"){
			location.href = "choosedate-2.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Okt"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Nov"){
			location.href = "choosedate-2.php?tahun="+tahun+"&bulan="+bulan;
		}else if(bulan === "Dec"){
			location.href = "choosedate.php?tahun="+tahun+"&bulan="+bulan;
		}
	}
</script>

	
</body>
</html>