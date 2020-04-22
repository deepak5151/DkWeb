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
        <a class="nav-link hove" style="color:grey;margin-right: -10px;"  title="Login to Buy any Products">Your Cart <input id="cartvalue" class="cart-value" type="number" value="" min="0" max="20" disabled></a>
      </li>
         <li class="nav-item">
        <a class="nav-link hove" style="margin-left:-25px;color:grey">Login/Sign Up</a>
      </li>
    </ul>
  </div>  
</nav>
</div>
</header>
<div class="d-flex justify-content-center marg-top">
    <h3>Welcome to<h2>&nbsp;DK <em>WEB</em></h2></h3>
    </div>
    <div class="d-flex justify-content-center">
<form name="login" action="loginconfig.php" class="signupform" method="post">
  <div class="container ">
    <p>Please Login to Continue...</p>
    <hr>
      <br>
      
    <label for="email"><b>&emsp;&emsp;&nbsp;Email&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;</b></label>
    <input type="text"  placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>&emsp;&emsp;Password&emsp;&nbsp;&emsp;&nbsp;</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

    <div class="submitform">
      <button type="submit"  id="submit" class="signupbtn" name="login">Login</button>
      <button type="button" class="cancelbtn" id="cancel">Cancel</button>
    </div>
    <p style="padding-left:20px; margin-top: 100px;">Don't have an account?<a href="SignUp.php" style="color:dodgerblue">Sign Up to continue</a>.</p>
  </div>
</form>
</div>
<div class="footer">
    <ul>
    <li><p>COPYRIGHT&copy;<?php echo date('Y') ?> KAPOOR KARYANA STORE LTD.</p></li>
    </ul>
</div>
</body>
    

</html>


<script type="text/javascript">
    document.getElementById("cancel").onclick = function () {
        location.href = "index.php";
    };

</script>