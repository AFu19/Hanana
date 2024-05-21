<?php
session_start();
$thn = $_GET['tahun'];
$bln = $_GET['bulan'];
$tgl = $_GET['tgl'];
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

<section class="confirmdate">
	
	<div class="container">
		<form action="input.php" method="GET">
			<h1>Hi <span>User</span>, are you sure about the date?</h1>

			<input type="hidden" name="tahun" value="<?= $thn ?>" id="tahun">
			<input type="hidden" name="bulan" value="<?= $bln ?>" id="bulan">
			<input type="hidden" name="tanggal" value="<?= $tgl ?>" id="tanggal">
			<input type="hidden" name="email" id="email" value="<?= $email ?>">
			
			<h4><?= $thn ?> - <?= $bln ?> - <?= $tgl  ?></h4>

			<button id="changedate" onclick="change()" name="cmd" value="changedate">Change</button>
			<button id="changesave" onclick="safe()" value="savechanges" name="cmd">Save</button>
		</form>
		<!-- <input type="date" value="" name="tglcoba" id="tglcoba"> -->
	</div>
</section>

<script>
	function safe(){
		var tahun = document.getElementById('tahun').value;
		var bulan = document.getElementById('bulan').value;
		var tanggal = document.getElementById('tanggal').value;
		var email = document.getElementById('email').value;

		var cmd = document.getElementById('changesave').value;

		location.href= "input.php?tahun="+tahun+"&bulan="+bulan+"&tanggal="+tanggal+"&email="+email+"&cmd="+cmd;
	}

	function change(){
		location.href = "input.php";
	}
</script>
	
</body>
</html>