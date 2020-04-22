<?php
	include('linkdatabase.php');
	session_start();
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT * from dkweb_users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $user_email=$row['email'];
   $user_name = $row['name'];
   $created = $row['created_at'];
   $image = $row['profile_image'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
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
  <a class="navbar-brand " href="Welcome.php">
      <h2>DK <em>WEB</em></h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i style="color:#f33f3f" class=" fas fa-align-justify"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="Welcome.php">Home<span class="sr-only">(current)</span></a>
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
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbardrop" href="" data-toggle="dropdown">Hi <?php echo $user_name; ?></a>
        <div class="dropdown-menu">
        <a class="dropdown-item" disabled>My Account</a>
        <a class="dropdown-item" href="Logout.php">Logout</a>
    	</div>
		</li>
    </ul>
  </div>  
</nav>
</div>
</header>
<div class="d-flex justify-content-center marg-top">
    <h3>Welcome <?php echo $user_name; ?>
    <br><br>You Account Info is:-<br><br></h3>
</div>


<div class="container card justify-content-center" style="width:400px">
  <img src="<?php echo $image; ?>" class="card-img-top" alt="Card image">
  </div>


  <br>


<div class="container" align="center">           
  <img  src="<?php echo $image; ?>" class="img-thumbnail" width="400" height="1000" alt='DP Not Found'>
</div>



    <div class="d-flex justify-content-center signupform">
    	<h6>Email address - <?php echo $user_email; ?><br><br>
		   Name - <?php echo $user_name; ?><br><br>
    	   Account Created at - <?php echo $created; ?><br></h6>
	</div>
<div class="footer">
    <ul>
    <li><p>COPYRIGHT&copy;<?php echo date('Y') ?> KAPOOR KARYANA STORE LTD.</p></li>
    </ul>
</div>
</body>
    

</html>