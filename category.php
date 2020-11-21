<?php
include("config/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="Stylesheet" href="css/style.css">
    <link rel="Stylesheet" href="css/bootstrap.css">
    <title>Food Ordering Online Service</title>
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
<div class="vision-mission">
    
</div>

<div class="history">

</div>

<div class="structure">

</div>

<footer>
    <div class="container">
        <div class="w3-row">
            <div class="w3-col m3 l1 justify-content-center" style="padding-bottom: 10px">	
                <!--<a href="#page-top"><img src="img/elegance.png" width=50%></a>-->
            </div>
            <div class="w3-col m3 l3" style="padding-bottom: 10px">
                  <p class="head">Main Studio</p>
                  <hr style="border: 1px solid white;" width=100%>
                  <p style="padding-top: 12px">Jl. Imam Bonjol no. 1001</p>
                  <p>Jakarta Selatan-DKI Jakarta</p>
                  <p>12345</p>
            </div>
            <div class="w3-col m3 l3" style="padding-bottom: 10px">
                  <p class="head">Contact Us</p>
                  <hr style="border: 1px solid white;" width=100%>
                  <p style="padding-top: 12px"><a href="tel:12345678910">(123)-45678910</a></p>
                  <p><a href="tel:080012345678912">080012345678912</a></p>
                  <p><a href="mailto:info@elegance.com">info@elegance.com</a></p>
            </div>
            <div class="w3-col m3 l3" style="padding-bottom: 10px">
                <p class="head">Location</p>
                <hr style="border: 1px solid white;" width=100%>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510642.23291432054!2d103.7729184837082!3d0.837155940803044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9bce8c054ce05%3A0x3039d80b220cbb0!2sBatam%2C%20Kota%20Batam%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1573018171772!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0; z-index: -1; overflow: hidden; padding-top: 12px;"></iframe>
            </div>
        </div>
    </div>
</footer>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>