<?php 
session_start();
include "conn.php";

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM tbuser WHERE email= '$email' AND password='$password'";
$query = mysqli_query($conn, $sql)or die($sql);

$result = mysqli_fetch_array($query);
$username = $result['username'];
$email = $result['email'];
$password = $result['password'];
$status = $result['status'];
if($status == 'user'){
$_SESSION['email'] = $email;
$_SESSION['username'] = $username;

header("location:chooseyear.php");
		
exit;
}else if($status == 'eo'){
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $username;

	header("Location: profile-organiser.php");

	exit;
}else{
	?>
 	<script type="text/javascript">
 		alert("Maaf password anda salah atau email tidak terdaftar");
 		location.href="signin.php";
 	</script>

 <?php 
 
 }

?>