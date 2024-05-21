<?php 
session_start();

$username = $_SESSION['username'];

include 'conn.php';

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
            <button class="btn logout m-auto">Log-Out</button>
          </div>
        </div>
      </div>
    </nav>

    <section class="notification-organiser mt-4">
      <div class="container border rounded-3 border-dark">
        <div class="row mt-4 ms-4">
          <?php 

          $sql = "SELECT * FROM tbevent";
          $query = mysqli_query($conn, $sql) or die($sql);
          while($res = mysqli_fetch_array($query) ){
            $email = $res['email'];
            $place = $res['place'];
            $events = $res['events'];
            $vendors = $res['vendors'];
            $tgl = $res['tgl'];
          ?>
          <div class="col-2">
            <img src="img/profpict.jpg" alt="" class="rounded-circle" />
          </div>
          <div class="col-10 mt-4">
            <h4><?= $email; ?></h4>
            <p>Hi, I am Order to make a <span><?= $place ?> </span>to celebrate My <span><?= $events; ?></span> and I want you to organise <span><?= $vendors ?></span> at <span><?= $tgl; ?></span></p>
            <button class="btn button-bid mt-2" onclick="lemparkebid(<?php echo "'$email', '$place', '$events', '$vendors', '$tgl'"; ?>)">Bid</button>
          </div>
        <?php } ?>

        </div>
      </div>
    </section>


    <script>
      function payment(){
        location.href="payment-organiser.php";
      }

      function lemparkebid(email, place, events, vendors, tgl){
          location.href = "bid.php?email="+email+"&place="+place+"&events="+events+"&vendors="+vendors+"&tgl="+tgl;
      }
    </script>
  </body>
</html>
