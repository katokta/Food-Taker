<?php
include("config/db_connect.php");
include("getMenu.php");
include("eventCart.php");
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
  <title>Food Ordering Online Service</title>
</head>
<body>

<button onclick="topfunction()" class="btn btn-outline-dark" id="btn-top" title="Go to top">Top</button>

<nav class="navbar navbar-dark navbar-expand-lg sticky-top">
  <a class="navbar-brand" href="index.php">Restaurant Moo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggler" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbartoggler">
    <ul class="navbar-nav ml-auto mt-2">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item dropdown" data-toggle="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarCategoryMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CATEGORY
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarCategoryMenuLink">
                  <a class="dropdown-item" href="category.php">All Items</a>
                  <a class="dropdown-item" href="#">Food</a>
                  <a class="dropdown-item" href="#">Beverages</a>
                  <a class="dropdown-item" href="#">Dessert</a>
                  <a class="dropdown-item" href="#">Discounts & Offers</a>
                  <a class="dropdown-item" href="#">Packages</a>
            </div> 
        </li>
        <li class="nav-item dropdown" data-toggle="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAboutLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownAboutLink">
                <a class="dropdown-item" href="#">Vision & Mission</a>
                <a class="dropdown-item" href="#">History</a>
                <a class="dropdown-item" href="#">Structure</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">CART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">SIGN IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">CATEGORY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">ABOUT US</a>
        </li>
    </ul>
  </div>
</nav>
  <div class="container-fluid menu" id="shopping-cart">
    <div class="txt-heading">Order List</div>
    <a id="btnEmpty" href="category.php?action=empty">Empty Cart</a>
        
    <?php
    if(isset($_SESSION["cart_item"])){
      $total_quantity = 0;
      $total_price = 0;
    ?>
    <div class = "container-fluid">
     <table class="tbl-cart" cellpadding="10" cellspacing="1">
      <tbody class="container">
      <tr>
        <th style="text-align:left;">Name</th>
        <th style="text-align:left;">Code</th>
        <th style="text-align:right;" width="5%">Quantity</th>
        <th style="text-align:right;" width="10%">Unit Price</th>
        <th style="text-align:right;" width="10%">Price</th>
        <th style="text-align:center;" width="5%">Remove</th>
      </tr>	
         <?php		
             foreach ($_SESSION["cart_item"] as $item){
               $item_price = $item["quantity"]*$item["price"];
         ?>
          <tr>
          <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
          <td><?php echo $item["code"]; ?></td>
          <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
          <td  style="text-align:right;"><?php echo "Rp ".$item["price"]; ?></td>
          <td  style="text-align:right;"><?php echo "Rp ". number_format($item_price,2); ?></td>
          <td style="text-align:center;"><a href="category.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
          </tr>
          <?php
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"]*$item["quantity"]);
          }
          ?>
          <tr>
          <td colspan="2" align="right">Total:</td>
          <td align="right"><?php echo $total_quantity; ?></td>
          <td align="right" colspan="2"><strong><?php echo "Rp ".number_format($total_price, 2); ?></strong></td>
          <td></td>
          </tr>
          </tbody>
      </table>	
    </div>
    <a class="btn btn-primary buybtn" role="button" href="cart.php">Buy</a>
      <?php
    } else {
    ?>
    <div class="no-records">Your Cart is Empty</div>
    <?php 
    }
    ?>
    </div>
   
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
          <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
          <div class="product-tile-footer">
          <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
          <div class="product-price"><?php echo "Rp ".$product_array[$key]["price"]; ?></div>
          <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
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


<script src="js/indexscript.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.min.js"></script> 
<script src="js/menu_cat.js"></script>
</body>
</html>
