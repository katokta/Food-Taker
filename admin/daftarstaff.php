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
  <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark nosd">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <div class="nav-btn text-right w-100">
          <button class="snavbarx float-left" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <button class="navbar-toggler snavbar float-left" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <?php $query="SELECT * FROM customer WHERE access='admin'";
        $querycall=mysqli_query($conn, $query);
        $account=mysqli_fetch_all($querycall, MYSQLI_ASSOC);?>  
        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item avatar dropdown">
              <a class="p-0 nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <?php if (isset($account["Customer_profpic"])){?>  
              <img src="<?php echo htmlspecialchars($account["Customer_profpic"]);?>" class="rounded-circle border z-depth-0">
              <?php } else{ ?>
                <img src="../image/avatar.png" class="rounded-circle border z-depth-0">
              <?php } ?>
            </a>
            <?php
           $user=$_SESSION["user"];
           $query = "SELECT Customer_Name FROM customer WHERE Customer_Email='".$user."'";
           $result = mysqli_query($conn, $query);
           $name = mysqli_fetch_array($result);
           ?>
              <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item waves-effect waves-light" href="#"><?php echo htmlspecialchars($name[0]);?></a>  
              <a class="dropdown-item waves-effect waves-light" href="#">Profile</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  <!-- Sidebar navigation -->
  <div class="side-nav nosd bg-white">
      <ul class="custom-scrollbar">
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li class="mainmenu actives"><a class="robotor actives" href="#"><i class="fab fa-dashcube"></i> Dashboard</a>
            </li>
            <li class="mainmenu">
              <a class="robotor collapsible-header waves-effect arrow-r">
                <i class="fab fa-buffer"></i> Aksi <i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a class href="menu.php">Tambah Menu</a>
                  </li>
                  <li>
                    <a class href="staff.php">Tambah Staff</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mainmenu">
              <a class="robotor collapsible-header waves-effect arrow-r">
                <i class="fab fa-buffer"></i> Laporan <i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a class href="#">Daftar Pelanggan</a>
                  </li>
                  <li>
                    <a class href="#">Daftar Menu</a>
                  </li>
                  <li>
                    <a class href="#">Menu Favorit</a>
                  </li>
                  <li>
                    <a class href="#">Laporan Penjualan</a>
                  </li>
                  <li>
                    <a class href="#">Laporan Keuangan/a>
                  </li>
                  <li>
                    <a class href="#">Laporan Akhir Tahun</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mainmenu">
            <a class="btn-primary" href="logout.php" role="button">Logout</a>
            </li>   
          </ul>
        </li>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg rgba-blue-strong1"></div>
    </div>
    <!--/. Sidebar navigation -->
    <div id="content" class="content">
      <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
          <div class="col-lg-12 m-0 p-2 text-center text-md-left text-lg-left">
            <h1>Daftar Staff</h1>
            
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