<?php

  include 'login.php';
  if (!empty($_SESSION['login_user'])){
    header("location: profile.php?user=".$_SESSION['login_user']);
    exit();
  }
  $error = $_GET['error'];
  $error = stripslashes($_GET['error']);
  $error = mysql_real_escape_string($_GET['error']);
  $error = strip_tags($_GET['error']);
  echo "<center>$error</center>";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Login</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/bg-girl.jpg);">




    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Login</h5>
      <br><br>

      <form id="form_login" name="form_login" action="login.php" method="POST">
        <div class="form-group">
          <input type="email" id="log_email" name="log_email" class="form-control" required class="input" placeholder="Email" required=""/>
        </div>

        <div class="form-group">
          <input type="password" id="log_passwd" class="form-control" name="log_passwd" required class="input" minlength="4" maxlength="32" placeholder="Mot de Passe" required=""/>
        </div>

        <div class="form-group flexbox py-10">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" checked>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Remember me</span>
          </label>

          <a class="text-muted hover-primary fs-13" href="#">Forgot password?</a>
        </div>

        <div class="form-group">
          <button class="btn btn-bold btn-block btn-primary" id="submit" value="Sign in" type="submit">Login</button>
        </div>

      </form>

      <hr class="w-30">

      <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a href="page-register.php">Sign up</a></p>
    </div>





    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>
