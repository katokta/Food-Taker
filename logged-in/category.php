<?php
require_once("../config/db_connect.php");
include("../getMenu.php");
include("../eventCart.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../image/img0.jpg">
  <link rel="Stylesheet" href="../css/bootstrap.css">
  <link rel="Stylesheet" type="text/css" href="../css/util.css">
  <link rel="Stylesheet" type="text/css" href="../css/main.css">
  <link rel="Stylesheet" href="../css/style.css">
  <title>Mari Order Online | Bersama KAMI</title>
</head>
<body>
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
        <li class="nav-item dropdown" aria-labelledby="navbarDropdownCartLink">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCartLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CART</a>
            <div class="dropdown-menu dropdown-menu-right" id="shopping-cart" aria-labbeledby="navbarDropdownCartLink">
                <h5 class="mb-lg-3 mt-lg-2 text-center">Order List</h5>
                
                <?php
                if(isset($_SESSION["cart_item"])){
                $total_quantity = 0;
                $total_price = 0;
                ?>
                <div class="table-responsive container"> 
                <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody>
                    <?php		
                        foreach ($_SESSION["cart_item"] as $item){
                        $item_price = $item["quantity"]*$item["price"];
                    ?>
                    <tr>
                    <td scope="row"><img src="../<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                    <td ><?php echo $item["quantity"]; ?></td>
                    <td><?php echo "Rp".$item["price"]; ?></td>
                    <td><?php echo "Rp". number_format($item_price,2); ?></td>
                    <td>
                      <a data-toggle="modal" data-target="#DltAreYouSure" href="#" class="btnRemoveAction">
                        <img src="../image/deleteicon.png" alt="Remove Item" style="height:30px">
                      </a>
                    </td>
                    </tr>
                    <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"]*$item["quantity"]);
                    }
                    ?>
                    <tr>
                    <td scope="row" colspan="2" align="right">Total:</td>
                    <td align="right"><?php echo $total_quantity; ?></td>
                    <td align="right" colspan="2"><strong><?php echo "Rp ".number_format($total_price, 2); ?></strong></td>
                    </tr>
                </tbody>
                </table>	
                <a id="btnEmpty" class="float-left btn" data-toggle="modal" data-target="#EmptyCartAreYouSure" href="#">Empty Cart</a>
                <a class="float-right btn btn-primary" role="button" href="cart.php">Go To Cart</a>
                <?php
                } else {
                ?>
                <div class="no-records">Your Cart is Empty</div>
                <?php 
                }
                ?>
              </div>
            </div>
        </li>
        <li class="nav-item dropdown profile-pic" aria-labbeledby="profileDropdownMenuLink">
          <a class="p-0 nav-link dropdown-toggle" id="profileDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <img src="../image/avatar.png" class="rounded-circle border z-depth-0 profile-pic" style="height:35px">
          </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdownMenuLink">
           <p class="pl-sm-2"><?php echo htmlspecialchars($_SESSION["username"]);?></p>
           <a class="nav-link dropdown-item" style="color:black;"href="logout.php">Log Out</a>
           </div>
        </li>
    </ul>
  </div>
</nav>

<button onclick="topfunction()" class="btn btn-outline-dark" id="btn-top" title="Go to top">Top</button>

    <div class="container-fluid" id="product-grid">
        <h1 class="text-center">Menu </h1>
        <div id="cont-ctgr-btn">
          <button class="btn btn-dark selected mr-md-3" onclick="filterSelection('all')"> All </button>
          <button class="btn btn-dark mr-md-3" onclick="filterSelection('food')"> Food </button>
          <button class="btn btn-dark mr-md-3" onclick="filterSelection('beverages')"> Beverages </button>
          <button class="btn btn-dark mr-md-3" onclick="filterSelection('dessert')"> Dessert </button>
          <button class="btn btn-dark mr-md-3" onclick="filterSelection('discount')"> Discount & Offer </button>
          <button class="btn btn-dark mr-md-3" onclick="filterSelection('package')"> Package </button>
        </div>
      <?php
      $product_array = $db_handle->runQuery("SELECT * FROM MENU ORDER BY id ASC");
      if (!empty($product_array)) { 
        foreach($product_array as $key=>$value){
      ?>
      <div class="product-item <?php echo $product_array[$key]["category"]; ?>">
          <form method="post" action="category.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
          <div class="product-image"><img src="../<?php echo $product_array[$key]["image"]; ?>"></div>
          <div class="product-tile-footer">
          <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
          <div class="product-price"><?php echo "Rp ".$product_array[$key]["price"]; ?></div>
          <div class="cart-action"><input type="number" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
          </div>
          </form>
        </div>
      <?php
        }
      }
      ?>
    </div>
  </div>

<footer class="page-footer font-small purple pt-4">

<!-- Modal -->
  <div class="modal fade" id="DltAreYouSure" tabindex="-1" role="dialog" aria-labelledby="DltAreYouSureModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered" role="document"> 
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="DltAreYouSureLongTitle">Warning!!!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this item?</p>
          </div>
          <div class="modal-footer">
           <a role="button" class="btn btn-primary float-left d-inline-block" href="category.php?action=remove&code=<?php echo $item["code"]; ?>">Yes</a>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="EmptyCartAreYouSure" tabindex="-1" role="dialog" aria-labelledby="EmptyCartAreYouSureCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered" role="document"> 
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="EmptyCartAreYouSureLongTitle">Warning!!!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to empty the cart?</p>
          </div>
          <div class="modal-footer">
           <a role="button" class="btn btn-primary float-left d-inline-block" href="category.php?action=empty">Yes</a>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          </div>
        </div>
    </div>
  </div>
<!-- End of Modal -->

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

<script src="../js/indexscript.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/fontawesome.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/menu_cat.js"></script>
</body>
</html>