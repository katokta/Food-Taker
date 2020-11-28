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
          <h1>Tambah Akun Perkiraan</h1>
          <form method="POST" action="addaccount.php" enctype="multipart/form-data">
                        <form>
                        <div class="form-label-group">
                            <div class="name">Heading Akun</div>
                            <div class="value">
                                <select name="headingakun" id="headingakun">
                                  <option disabled selected value>Pilih jenis akun</option>
                                  <option value="Aset">Aset</option>
                                  <option value="Kewajiban">Kewajiban</option>
                                  <option value="Modal">Modal</option>
                                  <option value="Pendapatan">Pendapatan</option>
                                  <option value="Beban">Beban</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Sub-Heading Akun</div>
                            <div class="value">
                            <div id="asetlist">
                              <select name="subheadingakun">
                                <option value="Bank">Bank</option>
                                <option value="Piutang usaha">Piutang usaha</option>
                                <option value="Aset lancar lain-lain">Aset lancar lain-lain</option>
                                <option value="Aset tetap">Aset tetap</option>
                                <option value="Aset lain-lain">Aset lain-lain</option>
                              </select>
                            </div>
                            <div id="kewajibanlist">
                              <select name="subheadingakun">
                                <option value="Kartu kredit">Kartu kredit</option>
                                <option value="Utang dagang">Utang dagang</option>
                                <option value="Utang lancar lain-lain">Utang lancar lain-lain</option>
                                <option value="Kewajiban jangka panjang">Kewajiban jangka panjang</option>
                                <option value="Kewajiban lain-lain">Kewajiban lain-lain</option>
                              </select>
                            </div>
                            <div id="modallist">
                              <select name="subheadingakun">
                                <option value="Modal saham">Modal saham</option>
                                <option value="Modal pemilik">Modal pemilik</option>
                              </select>
                            </div>
                            <div id="pendapatanlist">
                              <select name="subheadingakun">
                                <option value="Pendapatan usaha">Pendapatan usaha</option>
                                <option value="Pendapatan di luar usaha">Pendapatan di luar usaha</option>
                              </select>
                            </div>
                            <div id="bebanlist">
                              <select name="subheadingakun">
                              <option value="Beban usaha">Beban usaha</option>
                              <option value="Beban lain-lain">Beban lain-lain</option>
                              </select>
                            </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <div class="name">Deskripsi Akun</div>
                            <div class="value">
                            <input class="form-control" type="text" name="descakun">
                            </div>
                        </div>
                        <div class="form-label-group">
                            <div class="name">Nama Staff</div>
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
    </div>
  </body>
  <script>
  $("#headingakun").change(function () {
  $("#asetlist,#kewajibanlist,#modallist,#pendapatanlist,#bebanlist").hide();
  $("#asetlist select,#kewajibanlist select,#modallist select,#pendapatanlist select,#bebanlist select").prop('selectedIndex', 0);

  if (this.value == "Aset") {
    $("#asetlist").show();
  } 
  else if (this.value == "Modal") {
    $("#modallist").show();
  }
  else if (this.value == "Kewajiban") {
    $("#kewajibanlist").show();
  }
  else if (this.value == "Pendapatan") {
    $("#pendapatanlist").show();
  }
  else if (this.value == "Beban") {
    $("#bebanlist").show();
  }
});
  </script>
</html>