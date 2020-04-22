<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootsrap.css">
  <script src="bootstrap/bootsrapjquery.css"></script>
  <script src="bootstrap/popper.css"></script>
  <script src="bootstrap/bootstrapv4.4.1.css"></script>
  <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
  <link rel="stylesheet" href="DK.css">
</head>
<body>
<header id="top">
<div class="container">
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand " href="index.php">
      <h2>DK <em>WEB</em></h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i style="color:#f33f3f" class=" fas fa-align-justify"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Products</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link hove" style="color:grey!important;margin-right: -10px;"  title="Login to Buy any Products">Your Cart <input id="cartvalue" class="cart-value" type="number" value="" min="0" max="20" disabled></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="Login.php" target="_blank">Login/Sign Up</a>
      </li>
    </ul>
  </div>  
</nav>
</div>
</header>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="DKImages/slide_01.jpg" alt="Los Angeles" class="slide">
      <div class="carousel-caption textcenter">
        <p>BEST OFFERS</p>
        <h1>Great time in LA!</h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="DKImages/slide_02.jpg" alt="Chicago" class="slide">
      <div class="carousel-caption textcenter">
        <p>CHICHAGO</p>
        <h1>Thank you, Chicago!</h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="DKImages/slide_03.jpg" alt="New York" class="slide">
      <div class="carousel-caption textcenter">
        <p>NEW YORK</p>
        <h1>We love the Big Apple!</h1>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container">
    <div class="label">
        <h2>Latest Products
        <a href="#">View all products <i class="fa fa-angle-right"></i></a></h2>
    </div>
    <hr>
<br>
<br>
<div class="row">
<div class="col-md-4">
    <div class="items">
    <img src="DKImages/product_01.jpg" alt="Image1">
    <div class="content-down">
        <a href="#"><h4>Title goes here</h4></a>
                <span><h6>$25.75</h6></span>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
    </div>
    <div class="star">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><p>Reviews(10)</p></li>
        </ul>
    </div> 
        <div class="Add-Cart">
        <button class="disabledcart" title="Login to Add this product to your cart" onclick="alertlogin()">Add to Cart <i class="fas fa-cart-plus"></i></button>
        </div>
</div>
</div>
    
    <div class="col-md-4">
    <div class="items">
    <img src="DKImages/product_01.jpg" alt="Image1">
    <div class="content-down">
        <a href="#"><h4>Title goes here</h4></a>
                <span><h6>$25.75</h6></span>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
    </div>
    <div class="star">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><p>Reviews(10)</p></li>
        </ul>
    </div> 
        <div class="Add-Cart">
        <button class="disabledcart" title="Login to Add this product to your cart" onclick="alertlogin()">Add to Cart <i class="fas fa-cart-plus"></i></button>
        </div>
</div>
</div>
    
    <div class="col-md-4">
    <div class="items">
    <img src="DKImages/product_01.jpg" alt="Image1">
    <div class="content-down">
        <a href="#"><h4>Title goes here</h4></a>
                <span><h6>$25.75</h6></span>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
    </div>
    <div class="star">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><p>Reviews(10)</p></li>
        </ul>
    </div> 
        <div class="Add-Cart">
        <button class="disabledcart" title="Login to Add this product to your cart" onclick="alertlogin()">Add to Cart <i class="fas fa-cart-plus"></i></button>
        </div>
</div>
</div>
<div class="container">
    <div class="row">
    <div class="col-md-4">
    <div class="items">
    <img src="DKImages/product_01.jpg" alt="Image1">
    <div class="content-down">
        <a href="#"><h4>Title goes here</h4></a>
                <span><h6>$25.75</h6></span>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
    </div>
    <div class="star">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><p>Reviews(10)</p></li>
        </ul>
    </div>
        <div class="Add-Cart">
        <button class="disabledcart" title="Login to Add this product to your cart" onclick="alertlogin()">Add to Cart <i class="fas fa-cart-plus"></i></button>
        </div>
</div>
</div>
    <div class="col-md-4">
    <div class="items">
    <img src="DKImages/product_01.jpg" alt="Image1">
    <div class="content-down">
        <a href="#"><h4>Title goes here</h4></a>
                <span><h6>$25.75</h6></span>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
    </div>
    <div class="star">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><p>Reviews(10)</p></li>
        </ul>
    </div> 
        <div class="Add-Cart">
        <button class="disabledcart" title="Login to Add this product to your cart" onclick="alertlogin()">Add to Cart <i class="fas fa-cart-plus"></i></button>
        </div>
</div>
</div>
    <div class="col-md-4">
    <div class="items">
    <img src="DKImages/product_01.jpg" alt="Image1">
    <div class="content-down">
        <a href="#"><h4>Title goes here</h4></a>
                <span><h6>$25.75</h6></span>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
    </div>
    <div class="star">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><p>Reviews(10)</p></li>
        </ul>
    </div> 
        <div class="Add-Cart">
        <button class="disabledcart" title="Login to Add this product to your cart" onclick="alertlogin()">Add to Cart <i class="fas fa-cart-plus"></i></button>
        </div>
</div>
</div>
</div>
</div>
    </div>
</div>
    
<div class="container">
    <div class="labelDK">
        <h2>About DK Web</h2>
    </div>
    <hr>
<br>
<br>
<div class="row">
<div class="col-md-6 margin-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p>This template is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a href="#">Contact us</a> for more info.</p>
              <ul class="my-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="#top" class="Read-Button">Read More</a>
            </div>
</div>
<div class="col-md-6">
              <img src="DKImages/feature-image.jpg" alt="Image" style="width:100%;overflow: hidden;">
            </div>
</div>
<hr>
<div class="box mx-auto">
<div class="row">
<div class="col-md-8">
    <h4>Creative and Unique Products</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
    </div>
<div class="col-md-4">
    <a class="Purchase" href="#top">Purchase Now</a>
    </div>
</div>
</div>
<hr>
<div class="footer">
    <ul>
    <li><p>COPYRIGHT&copy;<?php echo date('Y') ?> KAPOOR KARYANA STORE LTD.</p></li>
    <li style="float:right"><a><i id="scroll" class="fas fa-angle-up"></i></a></li>
    </ul>
</div>
</div>
</body>
    
<script>
    $(document).ready(function(){
    var top=document.getElementById("scroll");
    $(top).click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
    
    $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          var box = $('.carousel').height();
          var header = $('header').height();

          if (scroll >= box - header) {
            $("header").addClass("background-header");
          } else {
            $("header").removeClass("background-header");
          }
        });
    
    function add() {
  document.getElementById("cartvalue").stepUp(1);
}
    function alertlogin() {
  alert('Please Login first to Add this product to your cart')
}
    </script>

</html>