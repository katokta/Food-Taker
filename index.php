<?php
include("config/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="Stylesheet" href="css/bootstrap.css">
  <link rel="Stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="image/img0.jpg">
  <title>Mari Order Online | Bersama KAMI</title>
</head>
<body>
<nav class="navba">
      <ul class="navbar-top">
        <li class="navbar-text"><a class="link-nav" href="index.php">HOME</a></li>
        <li class="navbar-text nav-item dropdown" data-toggle="dropdown"><a class="link-nav nav-link dropdown-toggle" href="category.html">CATEGORY</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Food</a></li>
                <li><a class="dropdown-item" href="#">Beverages</a></li>
                <li><a class="dropdown-item" href="#">Dessert</a></li>
                <li><a class="dropdown-item" href="#">Discounts & Offers</a></li>
                <li><a class="dropdown-item" href="#">Packages</a></li>
            </ul>
        </li>
        <li class="navbar-text nav-item dropdown" data-toggle="dropdown"><a class="link-nav nav-link dropdown-toggle" href="aboutus.html">ABOUT US</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Vision & Mission</a></li>
                <li><a class="dropdown-item" href="#">History</a></li>
                <li><a class="dropdown-item" href="#">Structure</a></li>
            </ul>
        </li>
        <li class="navbar-text"><a class="link-nav" href="cart.html">CART</a></li>
        <li class="navbar-text"><a class="link-nav" href="login.php">SIGN IN</a></li>
    </ul>
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
                  <a class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </div>
            <?php } ?>
</div>

<footer class="page-footer font-small purple pt-4">

  <!-- Footer Links -->
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>