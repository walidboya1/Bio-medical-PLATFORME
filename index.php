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

    <title>TELERADIOLOGUE</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body id="home">


    <!-- Topbar -->

    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
        <div class="container">
          
          <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="index.html">
              <img class="logo-default" src="assets/img/logo.png" alt="logo">
              <img class="logo-inverse" src="assets/img/logo.png" alt="logo">
            </a>
          </div>


          <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="home">Acceuil</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="section-features">Caractéristiques</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="section-review">Reviews</a></li>
          </ul>


            <div class="d-inline-flex ml-30">
              <a class="btn btn-sm btn-primary mr-4" href="page-login.php">Se Connecter</a>
              <a class="btn btn-sm btn-outline btn-primary hidden-sm-down" href="page-register.php">S'Inscrire</a>
            </div>
          </div>

        </div>
      </nav>

    <!-- END Topbar -->



    <!-- Header -->
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(assets/img/download.jpg);" data-overlay="8">
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="display-4 hidden-sm-down">TELERADIOLOGUE</h1>
            <h1 class="hidden-md-up">TELERADIOLOGIE</h1>
            <br>
            <p class="lead text-white fs-20 hidden-sm-down"><span class="fw-400">Le Radiologue le plus proche de vous.</span> </p>

            <br><br><br>

            <a class="btn btn-lg btn-round w-200 btn-primary mr-16" href="page-login.php">Se Connecter</a>
            <a class="btn btn-lg btn-round w-200 btn-outline btn-primary hidden-sm-down" href="page-register.php">S'Inscrire</a>

          </div>

        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
 <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | How it work steps
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section" id = "section-features">
        <div class="container">

          <div class="row gap-y align-items-center mb-90">
            <div class="col-12 col-md-6 text-center hidden-sm-down">
              <img src="assets/img/demo/slack/tools.png" alt="...">
            </div>

            <div class="col-12 col-md-5 offset-md-1 text-center text-md-left">
              <p class="fs-60 fw-900 opacity-10">01</p>
              <h3 class="fw-300">Choose your product</h3>
              <p>Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing. Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing.</p>
            </div>
          </div>


          <div class="row gap-y align-items-center mb-90">
            <div class="col-12 col-md-5 text-center text-md-left">
              <p class="fs-60 fw-900 opacity-10">02</p>
              <h3 class="fw-300">Add your design</h3>
              <p>Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing. Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing.</p>
            </div>

            <div class="col-12 col-md-6 offset-md-1 text-center hidden-sm-down">
              <img src="assets/img/demo/slack/drag.png" alt="...">
            </div>
          </div>


          <div class="row gap-y align-items-center mb-90">
            <div class="col-12 col-md-6 text-center hidden-sm-down">
              <img src="assets/img/demo/slack/everywhere.png" alt="...">
            </div>

            <div class="col-12 col-md-5 offset-md-1 text-center text-md-left">
              <p class="fs-60 fw-900 opacity-10">03</p>
              <h3 class="fw-300">We ship the product</h3>
              <p>Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing. Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing.</p>
            </div>
          </div>


          <div class="row gap-y align-items-center">
            <div class="col-12 col-md-5 text-center text-md-left">
              <p class="fs-60 fw-900 opacity-10">04</p>
              <h3 class="fw-300">Customer support begins</h3>
              <p>Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing. Monotonectally leverage existing standards compliant ideas with distributed data. Efficiently simplify cross-unit systems whereas adaptive testing.</p>
            </div>

            <div class="col-12 col-md-6 offset-md-1 text-center hidden-sm-down">
              <img src="assets/img/demo/slack/cta.png" alt="...">
            </div>
          </div>


        </div>
      </section>

    <!-- END Main container -->






    <!-- Footer -->
   
    <!-- END Footer -->



    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>