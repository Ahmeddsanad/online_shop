<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, $_POST['password']);
   $cpass = mysqli_real_escape_string($con, $_POST['cpassword']);
   $message="";

   $select = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email' ") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message = 'user already exist!';
   }else{
      mysqli_query($con, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      header('location:login_admin.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/register.css">
</head>
<body>
      <div class="main">
   <form action="" method="post" >
      <h3>Create New Account</h3>
      <input type="text" name="name" required placeholder="User Name" class="name">
      <input type="email" name="email" required placeholder="Email " class="email">
      <input type="password" name="password" required placeholder="Password" class="password">
      <input type="password" name="cpassword" required placeholder="Confirm Password" class="password">
      <label id='messagelabel' ><?php
         if (isset($message)) {
               echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
         } ?></label>
      <input type="submit" name="submit" class="btn" value="Create account">
      <p class="login ">Do you already Have Account? <a href="login_admin.php"> Login</a></p>
   </form>
         </div>
</body>
</html>