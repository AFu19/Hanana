<?php
session_start();

$username = $_SESSION['username'];
include "conn.php";
$tgl = $_GET['tgl'];
$place = $_GET['place'];
$vendors = $_GET['vendors'];
$events = $_GET['events'];
$email = $_GET['email'];


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
  <style>
    .bid{
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bid h4{
      font-size: 2em;
    }

    .bid .container{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .buttonplace button{
      margin: 10px 15px;
      width: 50px;
      height: 40px;
    }

    .savebid{
      width: 68%;
      height: 40px;
      background-color: #d742f5;
      color: white;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light napbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" id="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ms-auto icon">
            <button class="btn"><i class="fas fa-user fa-2x"></i></button>
            <button class="btn"><i class="fas fa-bell fa-2x"></i></button>
            <button class="btn rp"><i class="fas fa-dollar-sign fa-1x"></i></button>
            <button class="btn logout m-auto">Log-Out</button>
          </div>
        </div>
      </div>
    </nav>

    <section class="bid">
      <div class="container">
        <h4>Put Your Bid Here.</h4>

        <div class="row mt-4">
          <div class="col">
              <p>Date : <?= $tgl; ?></p>
              <p>Vendors : <?= $vendors; ?></p>
              <p>Events : <?= $events; ?></p>
              <p>Place : <?= $place; ?></p>
              <input type="hidden" name="email" class="email" id="email" value="<?= $email; ?>">
              <input type="hidden" name="username" class="username" id="username" value="<?= $username; ?>">

          </div>

          <div class="col">
             <input type="text" name="" disabled="true" class="ms-3" id="placebid">

                <div class="d-flex buttonplace">
                  <button  onclick="place(1)">1</button>
                  <button  onclick="place(2)">2</button>
                  <button  onclick="place(3)">3</button>
                </div>

                <div class="d-flex buttonplace">
                  <button  onclick="place(4)">4</button>
                  <button  onclick="place(5)">5</button>
                  <button  onclick="place(6)">6</button>
                </div>

                <div class="d-flex buttonplace">
                  <button  onclick="place(7)">7</button>
                  <button  onclick="place(8)">8</button>
                  <button  onclick="place(9)">9</button>
                </div>

                <div class="d-flex buttonplace">
                  <button  onclick="hapus()">X</button>
                  <button  onclick="place(0)">0</button>
                  <button></button>
                </div>

                <button class="btn savebid ms-3" onclick="lemparinput()" value="cmd" id="cmd" class="text-center">Save</button>
                  </div>
                </div>
      </div>
    </section>

    <script>
      function place(x){
        document.getElementById('placebid').value += x;
      }

      function hapus(){
        document.getElementById('placebid').value = document.getElementById('placebid').value.slice(0, -1);
      }

      function lemparinput(){
        var placebid = document.getElementById('placebid').value;
        var email = document.getElementById('email').value;
        var username = document.getElementById('username').value;

        location.href="input.php?placebid="+placebid+"&email="+email+"&cmd=placebid"+"&username="+username;
      }
    </script>
  </body>
  </html>