<?php
 include('linkdatabase.php');
   if (isset($_POST['submit']))
   { 
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['psw'];
       $folderName = "profilepictures/";

       $profile_image = $folderName. time().'.'.$_FILES['img_name']['name'];
       $data=mysqli_query( $db, "SELECT * FROM dkweb_users WHERE email='$email' ") or die("Could not execute query: " .mysqli_error($db));
       
        $count = mysqli_num_rows($data);
      
        if($count==0)
        {
       $sql = $db->prepare("INSERT INTO dkweb_users (name,email,password,profile_image) VALUES (?,?,?,?)");
       if($sql)
       {
       $sql->bind_param('ssss', $name, $email, $password,$profile_image);


      if($sql->execute() and move_uploaded_file($_FILES['img_name']['tmp_name'], $profile_image)) {
            header("location:Login.php");
          } 
        }
      else{
            echo "Error: " . $sql . "<br>" . $db->error;
          }
        exit;
      }
      else{
        echo('Email Address already exists');
      }
   }
?>