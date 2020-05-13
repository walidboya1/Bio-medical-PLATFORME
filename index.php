<?php
  include 'required.php';
  if (!empty($_SESSION['login_user'])){
  ismedecin();
  istechnicien();
  }
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
    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="icon" href="assets/img/logo.png"> </head>

  <body id="home">
    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="index.php"> <img class="logo-default" src="assets/img/logo.png" alt="logo"> <img class="logo-inverse" src="assets/img/logo.png" alt="logo"> </a>
        </div>
        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="home">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="section-features">Caractéristiques</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-scrollto="section-contact">Contact</a></li>
          </ul>
          <div class="d-inline-flex ml-30"> <a class="btn btn-sm btn-primary mr-4" href="page-login.php">Se Connecter</a> </div>
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
            <br>
            <br>
            <br> <a class="btn btn-lg btn-round w-200 btn-primary mr-16" href="page-login.php">Se Connecter</a> </div>
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
    <section class="section" id="section-features">
      <div class="container">
        <div class="row gap-y">
          <div class="col-12 col-md-6 text-center text-md-left"> <img class="logo-default" src="assets/img/image06.png" alt="logo">
            <h6 class="text-uppercase mb-3">Plateforme</h6>
            <p class="fs-14">La mise à disposition de systèmes de téléradiologie permettant la transmission cryptée, le retraitement, l’analyse des dossiers radiologiques ainsi que la rédaction et l’archivage de seconds avis.</p>
          </div>
          <div class="col-12 col-md-6 text-center text-md-left"> <img class="logo-default" src="assets/img/image13.png" alt="logo">
            <h6 class="text-uppercase mb-3">Outils</h6>
            <p class="fs-14">La mise à disposition d’outils de formation médicale continue, accessibles en ligne, participant au développement et à l’amélioration des compétences en radiologie et en imagerie médicale dans les zones à faible démographie médicale.</p>
          </div>
          <div class="col-12 col-md-6 text-center text-md-left"> <img class="logo-default" src="assets/img/image02.png" alt="logo">
            <h6 class="text-uppercase mb-3">Expertise</h6>
            <p class="fs-14">Le développement d’un réseau d’expertise radiologique coopératif international.</p>
          </div>
          <div class="col-12 col-md-6 text-center text-md-left"> <img class="logo-default" src="assets/img/image03.png" alt="logo">
            <h6 class="text-uppercase mb-3">Formation</h6>
            <p class="fs-14">L’organisation de missions de formation en radiologie et en imagerie médicale et la mise en place, lors de ces missions, d’unités de téléradiologie assurant leur relais et leur suivi.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-inverse bg-img" id="section-contact" style="background-image: url(assets/img/Contact.jpg)" data-overlay="9">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-md-5">
            <h5>TELERADIOLOGUE</h5>
            <br>
            <p>Enset, B.P.، 6207 Avenue des Forces Armées Royales,
              <br> Rabat 10100</p>
            <p>Telephone : +212 641-074998
              <br>Email: saramaghzaz@gmail.com</p>
          </div>
          <div class="col-12 col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.9211880301536!2d-6.879510885447033!3d33.968865129568144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76cd636524c15%3A0x44e58194058c4051!2sHigher%20School%20of%20Technical%20Education%20of%20Rabat!5e0!3m2!1sen!2sma!4v1588778359082!5m2!1sen!2sma" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- END Main container -->
    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>

  </html>