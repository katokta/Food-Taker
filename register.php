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
    <link rel="Stylesheet" href="css/style.css">
    <link rel="Stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<nav class="navba fixed-top">
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

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(image/img0.jpg);">
                <span class="login100-form-title-1">
						Sign Up
					</span>
				</div>
                            <form class="login100-form validate-form" action="api/register_user.php" method="post">

                            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username:</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email:</span>
						<input class="input100" type="email" name="inputEmail" placeholder="Enter your email" required autofocus>
						<span class="focus-input100"></span>
                    </div>
                    
                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password:</span>
						<input class="input100" type="password" name="pwd" id="inputPassword" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password confirm is required">
						<span class="label-input100">Password Confirm:</span>
						<input class="input100" type="password" name="cpwd" id="inputPassword" placeholder="Password confirm" required>
						<span class="focus-input100"></span>
					</div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                
                                <div>
                                    <input class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" value="Register">
                                    <hr />
                                    <h6>Already has an account? <a href="login.php">Click Here to Sign In</a></h6>
                                </div> 
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>