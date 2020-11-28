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
          $queryakun="SELECT * FROM akun_perkiraan";
          $akunresult=mysqli_query($conn, $queryakun);
          $akuns=mysqli_fetch_all($akunresult, MYSQLI_ASSOC);
          ?>
            <h1>Daftar Akun</h1>
            <table style="width:100%">
              <th>Akun ID</th>
              <th>Heading Akun</th>
              <th>Subheading Akun</th>
              <th>Deskripsi Akun</th>
              <th>Staff PIC</th>
              <th>Aksi</th>
              <?php foreach($akuns as $akun){?>
              <tr>
                  <td><?php echo htmlspecialchars($akun["AccountID"]);?></td>
                  <td><img src="../<?php echo htmlspecialchars($menu["Photo_Menu"]);?>"></td>
                  <td><?php echo htmlspecialchars($akun["AccountHeading"]);?></td>
                  <td><?php echo htmlspecialchars($akun["AccountSubHeading"]);?></td>
                  <td><?php echo htmlspecialchars($akun["AccountDesc"]);?></td>
                  <td><?php echo htmlspecialchars($akun["Staff_PIC"]);?></td>
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