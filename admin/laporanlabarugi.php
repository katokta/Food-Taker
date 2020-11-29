<?php
session_start();
include("../config/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Food-Taker | Admin</title>
    <!-- MDB icon -->
    <link rel="icon" href="#" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include('navbar.php');?>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg rgba-blue-strong1"></div>
    </div>
    <!--/. Sidebar navigation -->
    <div id="content" class="content">
      <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-lg-12 m-0 p-2 text-center text-md-left text-lg-left">
          <form method="POST" action="cetaklabarugi.php">
            <h1>Cetak Laporan Laba-Rugi</h1>
            <br>
            <h4>Pilih Jangkauan Tanggal</h4>
            <br>
            <h6>Tanggal Awal</h6>
            <input type="date" name="datestart">
            <br>
            <h6>Tanggal Akhir</h6>
            <input type="date" name="dateend">
            <br>
            <br>
            <input type="submit">
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
