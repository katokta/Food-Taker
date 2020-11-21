<?php
include("config/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Ordering Online Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" href="css/style.css">
  <link rel="Stylesheet" href="css/bootstrap.css">
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

    <div class="container-fluid h-100 login-form">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                            <form class="form-signin" action="api/register_user.php" method="post">

                                <div class="form-label-group">
                                    <input type="text" name="name" id="inputName" class="form-control" placeholder="Input your Username" required autofocus>
                                    <label for="inputUname">Username</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="cpwd" id="inputPassword" class="form-control" placeholder="Confirmed Password" required>
                                    <label for="confirmedPassword">Confirmed Password </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <input class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" value="Register">
                                <hr class="my-4">
                                <h6>Already has an account? <a href="login.php">Click Here to Sign In</a></h6>
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
