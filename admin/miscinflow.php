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
          <div class="col-lg-12 m-0 p-2 text-center text-md-left text-lg-left"></div>
          <h1>Tambahkan Transaksi Inflow Lain-Lain</h1>
            <form method="POST" action="addstaff.php" enctype="multipart/form-data">
                        <form>
                        <div class="form-label-group">
                            <div class="name">Nama Transaksi Inflow Lain-Lain</div>
                            <div class="value">
                                <input class="form-control" type="text" name="namamiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Tanggal Transaksi Inflow Lain-Lain</div>
                            <div class="value">
                                <input class="form-control" type="text" name="tanggalmiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Waktu Transaksi Inflow Lain-Lain</div>
                            <div class="value">
                                <input class="form-control" type="text" name="waktumiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Deskripsi Transaksi Inflow Lain-Lain</div>
                            <div class="value">
                            <input class="form-control" type="text" name="descmiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Akun Kredit</div>
                            <div class="value">
                            <input class="form-control" type="text" name="akunkreditmiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Kredit</div>
                            <div class="value">
                            <input class="form-control" type="text" name="creditmiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Akun Debit</div>
                            <div class="value">
                            <input class="form-control" type="text" name="akundebitmiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Debit</div>
                            <div class="value">
                            <input class="form-control" type="text" name="debitmiscinflow">
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Nama Staff Senior</div>
                            <div class="value">
                                <input class="form-control" type="text" name="staffname" readonly value=<?php echo htmlspecialchars($name[0]);?>>
                            </div>
                        </div>
                        <br>
                        <div class="card-footer" style="text-align: center;">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Tambah</button>
                        </div>
                     </form>
        </div>
      </div>
    </div>
  </body>
</html>
