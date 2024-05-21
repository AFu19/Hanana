<?php 
session_start();

$username = $_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hanana</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light napbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" id="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h1>Partner Of Hanana</h1>
          <div class="d-flex ms-auto icon">
            <button class="btn"><i class="fas fa-user fa-2x"></i></button>
            <button class="btn"><i class="fas fa-bell fa-2x"></i></button>
            <button class="btn rp" onclick="payment()"><i class="fas fa-dollar-sign fa-1x"></i></button>
            <button class="btn logout m-auto" onclick="logout()">Log-Out</button>
          </div>
        </div>
      </div>
    </nav>

    <section class="profile mt-5">
      <div class="container">
        <div class="d-flex">
          <div class="photo-profile">
            <img src="img/profpict.jpg" alt="avatar" />
          </div>
          <div class="change-photo-profile">
            <button class="btn rounded-circle changebtn">+</button>
          </div>
          <div class="profle-text ms-4 mt-2">
            <h2><?= $username; ?></h2>
            <button class="btn editp mt-3">Edit Profile</button>
          </div>
        </div>

        <hr class="mt-4" />

        <div class="row justify-content-center text-center mt-4">
          <div class="col">
            <div class="main-icon-1">
              <div class="main-icon-pict">
                <button class="btn"><i class="fas fa-money-check text-center"></i></button>
              </div>
              <div class="main-icon-text mt-2">
                <p>Waiting Payment</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="main-icon-1">
              <div class="main-icon-pict">
                <button class="btn"><i class="fas fa-clock"></i></button>
              </div>
              <div class="main-icon-text mt-2">
                <p>Countdown</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="main-icon-1">
              <div class="main-icon-pict">
                <button class="btn"><span class="material-icons"> celebration </span></button>
              </div>
              <div class="main-icon-text mt-2">
                <p>Party</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="main-icon-1">
              <div class="main-icon-pict">
                <button class="btn"><span class="material-icons"> nightlight </span></button>
              </div>
              <div class="main-icon-text mt-2">
                <p>After Party</p>
              </div>
            </div>
          </div>
        </div>

        <hr class="mt-4" />
      </div>
    </section>

    <script>
      function logout(){
        location.href="logout.php";
       }
      function payment(){
        location.href="payment-organiser.php";
      }
    </script>
  </body>
</html>
