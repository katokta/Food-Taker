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