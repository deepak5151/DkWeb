<?php
 
$dbhost="localhost";
$dbuser="root"; 
$dbpass="Kapoor@121";
$db="dkweb";
 
$db=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($db) );
 
 if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
    exit();
}
?>