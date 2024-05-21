<?php 
include 'conn.php';

$cmd = $_GET['cmd'];

if ($cmd == "register") {
	$username = $_GET['username'];
	$email = $_GET['email'];
	$password = $_GET['password'];

	$sql = "INSERT INTO tbuser(status,username,email,password) values('user','$username','$email','$password')";
	$query = mysqli_query($conn,$sql)or die("error $sql");

	header("location: signin.php");
}else if($cmd == "savechanges"){
	$tanggal = $_GET['tanggal'];
	$tahun = $_GET['tahun'];
	$bulan = $_GET['bulan'];
	$email = $_GET['email'];
	
	if($bulan == 'Jan'){
		$bulan = '01';
	}else if($bulan == 'Feb'){
		$bulan = '02';
	}else if($bulan == 'Mar'){
		$bulan = '03';
	}else if($bulan == 'Apr'){
		$bulan = '04';
	}else if($bulan == 'May'){
		$bulan = '05';
	}else if($bulan == 'Jun'){
		$bulan = '06';
	}else if($bulan == 'Jul'){
		$bulan = '07';
	}else if($bulan == 'Aug'){
		$bulan = '08';
	}else if($bulan == 'Sep'){
		$bulan = '09';
	}else if($bulan == 'Okt'){
		$bulan = '10';
	}else if($bulan == 'Nov'){
		$bulan = '11';
	}else if($bulan == 'Dec'){
		$bulan = '12';
	}
	

	$tgl = $tahun."-".$bulan."-".$tanggal;
	$sql = "INSERT INTO tbevent(email, tgl, vendors, events, place, others) VALUES ('$email', '$tgl', 'a', 'a', 'a', 'a')";
	$query = mysqli_query($conn, $sql)or die("error $sql");	

	header("Location: chooseevents.php");
}else if($cmd == "changedate"){
	header("Location: chooseyear.php");
}else if($cmd == "toevents"){
	$vendors = $_GET['vendors'];
	$place = $_GET['place'];
	$events = $_GET['events'];
	$others = $_GET['others'];
	$email = $_GET['email'];

	$sql = "UPDATE tbevent SET vendors='$vendors', place='$place', events='$events', others='$others' WHERE email = '$email'";
	$query = mysqli_query($conn, $sql)or die($sql);

	header('location: notificationwait.php');	
}else if($cmd == "placebid"){
	$placebid = $_GET['placebid'];
	$email = $_GET['email'];
	$username = $_GET['username'];

	$sql = "INSERT INTO tbbid(emailpemesan, namaeo, hargabid) VALUES ('$email', '$username', '$placebid')";
	$query = mysqli_query($conn, $sql)or die($sql);

	header('location: profile-organiser.php');	 
}





?>