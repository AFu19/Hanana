<?php 

include 'conn.php';

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
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<style type="text/css">
  .notif-end{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 571px;
    width: 100%;
    color: var(--main-color);
  }

  .notif-end h1{
    font-size: 3em;
    font-weight: bold;
  }
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light napbar">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" id="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-4">
        <input class="form-control me-2" type="search" placeholder="Search Vendors / Place / Events" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z"></path></svg></button>
      </form>
      <div class="d-flex ms-auto icon">
      	<button class="btn "><i class="fas fa-user fa-2x"></i></button>
      	<button class="btn"><i class="fas fa-store fa-2x"></i></button>
      	<button class="btn"><i class="fas fa-bell fa-2x"></i></button>
      	<button class="btn rp"><i class="fas fa-dollar-sign fa-1x"></i></button>
      	<button class="btn logout m-auto">Log-Out</button>
      </div>
    </div>
  </div>
</nav>  



<div onclick="f_lnjt()" style="width: 100%; height: 550px; z-index: 0">
<div class="container notif-end">
  <h1>Rent Succesfull</h1>
</div>
</div>
<script>
  function f_lnjt(){
    location.href = "index.php";
  }
</script>
</body>
</html>