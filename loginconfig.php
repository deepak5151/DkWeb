<?php
include("linkdatabase.php");
   session_start();

if( isset($_POST['email']) and isset($_POST['psw']) ) {
    $email=$_POST['email'];
    $pass=$_POST['psw'];
 
    $ret=mysqli_query( $db, "SELECT * FROM dkweb_users WHERE email='$email' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($db));
    $count = mysqli_num_rows($ret);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         $_SESSION['login_user'] = $email;
         
         header("location: welcome.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
}
?>