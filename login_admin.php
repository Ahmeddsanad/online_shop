<html>

<head>
    <link rel="stylesheet" href="css/admin_upload.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign in</title>
</head>
<?php

include 'config.php';
session_start();
if (isset($_GET['submit'])) {
   $email = mysqli_real_escape_string($con, $_GET['email']);
   $pass = mysqli_real_escape_string($con, $_GET['password']);
   if (empty($email) or empty($pass)) {
      echo "";
   } else {
      $select = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

      if (mysqli_num_rows($select) > 0) {
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         header('location:shop.php');
      } else {
         $message[] = 'incorrect password or email!';
      }
   }
}
?>

<body>
    <div class="main">
        <p class="sign">Sign in</p>
        <form class="form1" method="get">
            <input required title="Enter Your Email" class="un" type="text" placeholder="Email" name="email">
            <input required title="Enter Your Password" class="pass" type="password" placeholder="Password"
                name="password">
            <label> <?php
                  if (isset($message)) {
                     foreach ($message as $message) {
                        echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
                     }
                  }
                  ?></label>
            <button class="submit" name="submit" type="submit">Log In</button>
            <p class="signup">Don't have an account? <a href="register.php">Sign up</p>
        </form>
    </div>

</body>

</html>