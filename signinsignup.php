<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="images/nile.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="CSS/sliderstyle.css" />
    <title>Sign in or Join us</title>
  </head>
  <body>
    <?php
    include 'connection.php';

$my_query = "select * from user";
$result = mysqli_query($dbcon,$my_query);

 if(isset($_POST['login_button']))
 {
  $username = mysqli_real_escape_string($dbcon, $_POST['username']);
  $password = mysqli_real_escape_string($dbcon, $_POST['password']);
  $user_check = "select * from user where username = '$username' and password = '$password'";
  $run = mysqli_query($dbcon , $user_check);
  if(mysqli_num_rows($run))
  {
    $_SESSION['user'] = $username;
    header('location:main.php');

  }
  else
  {
    echo "'Inavlid username or password!";
  }
 }
 if(isset($_POST['signup']))
 {
  $n_username = mysqli_real_escape_string($dbcon, $_POST['new_user']);
  $n_password = mysqli_real_escape_string($dbcon, $_POST['new_pass']);
  $n_email = mysqli_real_escape_string($dbcon, $_POST['email']);
  $n_number = mysqli_real_escape_string($dbcon, $_POST['number']);
  $n_user_check = "select * from user where username = '$n_username' and password = '$n_password' ";
  $n_run = mysqli_query($dbcon , $n_user_check);
  if(mysqli_num_rows($n_run))
  {
   echo "username or password are already used!";

  }
  else
  {
    $new_query = "insert into user (username,password,email,phone) values (?,?,?,?) ";
    $insert = mysqli_prepare($dbcon,$new_query);
    mysqli_stmt_bind_param($insert,"ssss",$nu,$np,$ne,$n_n);
    $nu=$n_username;
    $np=$n_password;
    $ne=$n_email;
    $n_n= $n_number;
    $in = mysqli_stmt_execute($insert);

  }
}
echo'<div class="container">';
  echo'<div class="forms-container">';
   echo' <div class="signin-signup">';
      echo'<form action="#" method="post" class="sign-in-form">';
       echo '<h2 class="title">Sign in</h2>';
       echo' <div class="input-field">';
         echo' <i class="fas fa-user"></i>';
          echo'<input type="text" name="username" placeholder="Username"  required/>';
        echo '</div>';
        echo'<div class="input-field">';
          echo'<i class="fas fa-lock"></i>';
         echo '<input type="password" name="password" placeholder="Password"  required/>';
        echo'</div>';
        echo'<div class="forgot">';
          echo'<a href="forgotpassword.php">Forgot password / Username</a>';
        echo'</div>';
        echo'<input type="submit" name="login_button" value="Login" class="btn solid" />';
        echo'<p class="social-text">Or Sign in with social platforms</p>';
        echo'<div class="social-media">';
          echo'<a href="#" class="social-icon">';
           echo '<i class="fab fa-facebook-f"></i>';
          echo'</a>';
          echo'<a href="#" class="social-icon">';
            echo'<i class="fab fa-twitter"></i>';
          echo'</a>';
          echo'<a href="#" class="social-icon">';
            echo'<i class="fab fa-google"></i>';
          echo'</a>';
          echo'<a href="#" class="social-icon">';
            echo'<i class="fab fa-linkedin-in"></i>';
          echo'</a>';
        echo'</div>';
      echo'</form>';
      echo'<form action="#" method="post" class="sign-up-form">';
        echo'<h2 class="title">Sign up</h2>';
        echo'<div class="input-field">';
          echo'<i class="fas fa-user"></i>';
          echo'<input type="text" name="new_user" placeholder="Username"  required/>';
        echo'</div>';
        echo'<div class="input-field">';
          echo'<i class="fas fa-envelope"></i>';
          echo'<input type="email" name="email" placeholder="Email"  required/>';
        echo'</div>';
        echo'<div class="input-field">';
          echo'<i class="fas fa-phone"></i>';
          echo'<input type="tel" name="number" placeholder="Phone number"  required/>';
        echo'</div>';
        echo'<div class="input-field">';
          echo'<i class="fa fa-calendar" aria-hidden="true"></i>';
          echo'<input type="date" name="date" placeholder="Date of birth" />';
       echo'</div>';
        echo'<div class="input-field">';
          echo'<i class="fas fa-lock"></i>';
          echo'<input type="password" name="new_pass" placeholder="Password"  required/>';
        echo'</div>';
        echo'<input type="submit" name="signup" class="btn" value="Sign up" />';
        echo'<p class="social-text">Or Sign up with social platforms</p>';
        echo'<div class="social-media">';
        echo'<a href="#" class="social-icon">';
        echo'<i class="fab fa-facebook-f"></i>';
        echo'</a>';
          echo'<a href="#" class="social-icon">';
          echo'<i class="fab fa-twitter"></i>';
          echo'</a>';
          echo'<a href="#" class="social-icon">';
          echo'<i class="fab fa-google"></i>';
          echo'</a>';
          echo'<a href="#" class="social-icon">';
          echo'<i class="fab fa-linkedin-in"></i>';
          echo'</a>';
          echo'</div>';
          echo'</form>';
          echo'</div>';
  echo'</div>';

  echo'<div class="panels-container">';
    echo'<div class="panel left-panel">';
      echo'<div class="content">';
        echo'<div class="loghome">';
          echo'<a href="main.php"> <i class="fas fa-house fa-beat" style="color: white; font-size: 50px;"></i></a>';
        echo'</div>';
        echo'<h3>New here ?</h3>';
        echo'<p>You are one step away for an forgotable vacationand memorizable moments !</p>';
        echo'<button class="btn transparent" id="sign-up-btn">';
          echo'Sign up';
        echo'</button>';
      echo'</div>';
      echo'<img src="images/login.png" class="image" alt="" />';
    echo'</div>';
    echo'<div class="panel right-panel">';
      echo'<div class="content">';
        echo'<div class="reghome">';
          echo'<a href="main.php"> <i class="fas fa-house fa-beat" style="color: white; font-size: 50px;"></i></a>';
        echo'</div>';
        echo'<h3>One of us ?</h3>';
        echo'<p>Enter your credintials and start your vacation with us...........A Seamless Escape</p>';
        echo'<button class="btn transparent" id="sign-in-btn">';
          echo'Sign in';
        echo'</button>';
      echo'</div>';
      echo'<img src="images/regitser.png" class="image" alt="" />';
    echo'</div>';
  echo'</div>';
echo'</div>';
?>

    <script src="JS/slider.js"></script>
  </body>
</html>
