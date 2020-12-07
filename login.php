<?php
include("config/db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Ordering Online Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    
    <link rel="Stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="Stylesheet" href="css/style.css">
<!--===============================================================================================-->
</head>
<body>
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

<div class="limiter">
  <div class="container-login100">
  	<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(image/img0.jpg);">
				<span class="login100-form-title-1">
					Sign In
				</span>
      </div>
               
				<form class="login100-form validate-form" action="api/login_user.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email:</span>
						<input class="input100" type="email" name="email" id="inputEmail" placeholder="Enter your email" required autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password:</span>
						<input class="input100" type="password" name="pwd" id="inputPassword" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="customCheck1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="customCheck1">
								Remember me
							</label>
						</div>
					</div>

                        <div>
                            <input class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" value="Sign In">
                            <hr />
                            <h6>No Account? <a href="register.php">Click Here to Register</a></h6>
                        </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/indexscript.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>
