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
    <!--/. Sidebar navigation -->
    <div id="content" class="content">
      <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-lg-12 m-0 p-2 text-center text-md-left text-lg-left">
          <?php
          $querymenu="SELECT * FROM menu";
          $menuresult=mysqli_query($conn, $querymenu);
          $menus=mysqli_fetch_all($menuresult, MYSQLI_ASSOC);
          ?>
            <h1>Daftar Menu</h1>
            <table style="width:100%">
              <th>Menu ID</th>
              <th>Foto Menu</th>
              <th>Nama Menu</th>
              <th>Kategori Menu</th>
              <th>Harga Menu</th>
              <th>Kuantitas Menu</th>
              <th>Deskripsi Menu</th>
              <th>Nama PIC</th>
              <th>Aksi</th>
              <?php foreach($menus as $menu){?>
              <tr>
                  <td><?php echo htmlspecialchars($menu["MenuID"]);?></td>
                  <td><img src="../<?php echo htmlspecialchars($menu["Photo_Menu"]);?>"></td>
                  <td><?php echo htmlspecialchars($menu["Nama_Menu"]);?></td>
                  <td><?php echo htmlspecialchars($menu["Kategori_Menu"]);?></td>
                  <td><?php echo htmlspecialchars($menu["Harga_Menu"]);?></td>
                  <td><?php echo htmlspecialchars($menu["Kuantitas_Tersedia"]);?></td>
                  <td><?php echo htmlspecialchars($menu["Deskripsi_Menu"]);?></td>
                  <td><?php echo htmlspecialchars($menu["staff_name"]);?></td>
              </tr>
              <?php }?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>



    <script type="text/javascript">
      $('.snavbar').on('click', function() {
        $('.side-nav').toggleClass('ssbar');
      })

      $('.snavbarx').on('click', function() {
        $('.side-nav').toggleClass('ssbarx');
        $('.content').toggleClass('contentx');
        $('.footerxxx').toggleClass('foot');
      })

      $('.mainmenu').on('click', function() {
        var x = $(this);
        x.find('.collapsible-body').toggleClass('showsbxxx');
        x.toggleClass('actives');
      })
    </script>
</body>
</html>
