<?php
   session_start();
   
   session_destroy();
?>

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
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand " href="index.php">
      <h2>DK <em>WEB</em></h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i style="color:#f33f3f" class=" fas fa-align-justify"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Products</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Your Cart <input id="cartvalue" class="cart-value" type="number" value="0" min="0" max="20" disabled></a>
      </li>
         </li>
         <li class="nav-item">
        <a class="nav-link hove" style="margin-left:-25px;color:grey">Login/Sign Up</a>
      </li>

    </ul>
  </div>  
</nav>
</div>
</header>
<div class="d-flex justify-content-center signupform" style="margin-top: 150px;">
    <h3>You were successfully logged out!!<br><br><p>&emsp;&emsp;&emsp;Click this link to <a href="index.php">Go back to homepage</a></p></h>
</div>
<div class="footer">
    <ul>
    <li><p>COPYRIGHT&copy;<?php echo date('Y') ?> KAPOOR KARYANA STORE LTD.</p></li>
    </ul>
</div></body>
    

</html>