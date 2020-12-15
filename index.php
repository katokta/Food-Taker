<?php
include("config/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="image/img0.jpg">
  <link rel="Stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="Stylesheet" href="css/style.css">
  <title>Mari Order Online | Bersama KAMI</title>
</head>
<body>

<button onclick="topfunction()" class="btn btn-outline-dark" id="btn-top" title="Go to top">Top</button>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top">
  <a class="navbar-brand" href="index.php">Restaurant Moo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggler" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbartoggler">
    <ul class="navbar-nav ml-auto mt-2">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item dropdown" aria-labelledby="navbarCategoryMenuLink">
          <a class="nav-link dropdown-toggle" href="#" id="navbarCategoryMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CATEGORY
          </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarCategoryMenuLink">
                  <a class="dropdown-item" href="category.php">All Items</a>
                  <a class="dropdown-item" href="#">Food</a>
                  <a class="dropdown-item" href="#">Beverages</a>
                  <a class="dropdown-item" href="#">Dessert</a>
                  <a class="dropdown-item" href="#">Discounts & Offers</a>
                  <a class="dropdown-item" href="#">Packages</a>
            </div> 
        </li>
        <li class="nav-item dropdown" aria-labelledby="navbarDropdownAboutLink">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAboutLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAboutLink">
                <a class="dropdown-item" href="aboutus.php">Vision & Mission</a>
                <a class="dropdown-item" href="aboutus.php">History</a>
                <a class="dropdown-item" href="aboutus.php">Structure</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#mustLogin" href="#">CART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">SIGN IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">REGISTER</a>
        </li>
    </ul>
  </div>
</nav>

<div class="landing-page">
<?php $query="SELECT * FROM menu";
        $querycall=mysqli_query($conn, $query);
        $menus=mysqli_fetch_all($querycall, MYSQLI_ASSOC);?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
	      <!-- Slide One - Set the background image for this slide in the line below -->
	      <div class="carousel-item active" style="background-image: url('image/img1.jpg'); opacity:0.9;">
	        <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Delicious Buffets and Packages</h2>
              <span>Photo by <a href="https://unsplash.com/@danielcgold?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Dan Gold</a> on 
                <a href="https://unsplash.com/s/photos/food?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a>
              </span>
	          <p class="lead">Explore Our Salad Bar at Our Local Outlets</p>
	        </div>
	      </div>
	      <!-- Slide Two - Set the background image for this slide in the line below -->
	      <div class="carousel-item" style="background-image: url('image/img2.jpg'); opacity:0.9">
	        <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Enjoy Takeaways</h2>
              <span>Photo by <a href="https://unsplash.com/@jamessutton_photography?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">James Sutton</a> on 
                <a href="https://unsplash.com/s/photos/food-takeaway?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a>
              </span>
	          <p class="lead">lorem ipsum</p>
	        </div>
	      </div>
	      <!-- Slide Three - Set the background image for this slide in the line below -->
	      <div class="carousel-item" style="background-image: url('image/img3.jpg'); opacity:0.9">
	        <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Delivery Deals</h2>
              <span>Photo by <a href="https://unsplash.com/@jmuniz?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Joel Muniz</a> on 
                <a href="https://unsplash.com/s/photos/food-delivery?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a>
              </span>
	          <p class="lead">We deliver and cater to your every needs</p>
	        </div>
	      </div>
	    </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
        </div>
        
    </div>
    
</div>
</div>


<div class="recommended">
<div class="rec-color">
<div class="col-lg-12 text-center">
  <br>
   <h1 class="section-heading text-uppercase" style="padding-bottom:0px">Our Recommended</h1>
    <br>
  </div>
<div class="row">
<?php foreach($menus as $menu){ ?>  
            <div class="col-sm-4">
              <div class="card">
              <img class="card-img-top" src="<?php echo htmlspecialchars($menu["Photo_Menu"]);?>"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title"><?php echo htmlspecialchars($menu["Nama_Menu"]);?></h4>
                  <p class="card-text"><?php echo htmlspecialchars($menu["Deskripsi_Menu"]);?></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mustLogin">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
            <?php 
            } 
            ?>
</div>
</div>
</div>
<footer class="page-footer font-small purple">

<!-- Modal -->
  <div class="modal fade" id="mustLogin" tabindex="-1" role="dialog" aria-labelledby="mustLoginModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered" role="document"> 
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="mustLoginLongTitle">Alert</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>You have to login, in order to do this action.</p>
          </div>
          <div class="modal-footer">
           <a role="button" class="btn btn-primary float-left d-inline-block" href="login.php">Log In</a>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
    </div>
  </div>
<!-- End Of Modal -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Mari Order Online</h5>
        <p>Ayo order dari Restoran KAMI dan dapatkan bermacam-macam promo</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Contact Us</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Instagram</a>
          </li>
          <li>
            <a href="#!">Facebook</a>
          </li>
          <li>
            <a href="#!">WhatsApp</a>
          </li>
          <li>
            <a href="#!">Email</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">Mari Order Online</a>
  </div>
  <!-- Copyright -->

</footer>
<script src="js/indexscript.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>