<?php
session_start();
$email = $_SESSION['email'];
$thn = $_GET['tahun'];
$bln = $_GET['bulan'];


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

<section class="choosedate">
	<div class="container">
		<h1>Hi <span>User</span>, please choose the 
date of the event</h1>
<input type="hidden" name="" value="<?= $thn ?>" id="tahun">
<input type="hidden" name="" value="<?= $bln ?>" id="bulan">
		<div class="row choosedate-date">
			<table style="text-align: center;">
				<tr>
					<td>
						<span  onclick="tgl(1)">1</span>
					</td>
					<td>
						<span  onclick="tgl(2)">2</span>
					</td>
					<td>
						<span  onclick="tgl(3)">3</span>
					</td>
					<td>
						<span  onclick="tgl(4)">4</span>
					</td>
					<td>
						<span  onclick="tgl(5)">5</span>
					</td>
					<td>
						<span  onclick="tgl(6)">6</span>
					</td>
					<td>
						<span  onclick="tgl(7)">7</span>
					</td>
				</tr>
				<tr>
					<td>
						<span  onclick="tgl(8)">8</span>
					</td>
					<td>
						<span  onclick="tgl(9)">9</span>
					</td>
					<td>
						<span  onclick="tgl(10)">10</span>
					</td>
					<td>
						<span  onclick="tgl(11)">11</span>
					</td>
					<td>
						<span  onclick="tgl(12)">12</span>
					</td>
					<td>
						<span  onclick="tgl(13)">13</span>
					</td>
					<td>
						<span  onclick="tgl(14)">14</span>
					</td>
				</tr>
				<tr>
					<td>
						<span  onclick="tgl(15)">15</span>
					</td>
					<td>
						<span  onclick="tgl(16)">16</span>
					</td>
					<td>
						<span  onclick="tgl(17)">17</span>
					</td>
					<td>
						<span  onclick="tgl(18)">18</span>
					</td>
					<td>
						<span  onclick="tgl(19)">19</span>
					</td>
					<td>
						<span  onclick="tgl(20)">20</span>
					</td>
					<td>
						<span  onclick="tgl(21)">21</span>
					</td>
				</tr>
				<tr>
					<td>
						<span  onclick="tgl(22)">22</span>
					</td>
					<td>
						<span  onclick="tgl(23)">23</span>
					</td>
					<td>
						<span  onclick="tgl(24)">24</span>
					</td>
					<td>
						<span  onclick="tgl(25)">25</span>
					</td>
					<td>
						<span  onclick="tgl(26)">26</span>
					</td>
					<td>
						<span  onclick="tgl(27)">27</span>
					</td>
					<td>
						<span  onclick="tgl(28)">28</span>
					</td>
				</tr>
				<tr>
					<td>
						<span  onclick="tgl(29)">29</span>
					</td>
					<td>
						<span  onclick="tgl(30)">30</span>
					</td>
					<td>
						<span  onclick="tgl(31)">31</span>
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
			</table>
		</div>

		<input type="text" disabled id="showdate">

		<button onclick="next()">Next</button>
	</div>
</section>

<script>
	function tgl(tgl){
		document.getElementById('showdate').value = tgl;
	}

	function next(){
		var tgl = document.getElementById('showdate').value;
		var bulan = document.getElementById('bulan').value;
		var tahun = document.getElementById('tahun').value;

		location.href="confirmdate.php?tgl="+tgl+"&bulan="+bulan+"&tahun="+tahun;
	}

</script>

	
</body>
</html>