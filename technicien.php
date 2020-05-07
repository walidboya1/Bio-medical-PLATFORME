<?php
  require 'required.php';
  istechnicien();
  isuser($_GET['user']);
?>

<!DOCTYPE html>
<html>
<head>

      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

 <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="icon" href="assets/img/logo.png">

	<title>TELERADIO - Technicien</title>
</head>
<body>
  <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Topbar
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->

      <nav class="topbar topbar-expand-md topbar-nav-centered topbar-inverse topbar-sticky">
        <div class="container">
          
          <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="index.php">
              <img class="logo-default" src="assets/img/logo.png" alt="logo">
              <img class="logo-inverse" src="assets/img/logo.png" alt="logo">
            </a>
          </div>




          <div class="topbar-right">
            <a class="btn btn-sm btn-danger mr-4" href="logout.php">Se deconnecter</a>
          </div>

        </div>
      </nav>
      <!---- END topbar---->


    <!-- Header -->
    <header class="header header-inverse h-fullscreen">
      <div class="header-overlay opacity-90" style="background-color: #563d7c"></div>

      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h5 class="display-4">Technicien</h5>
           
          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->


<!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Feature 
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->

      <section class="section p-0">
        <div class="container-wide">
          <div class="row no-gap">
            
            <div class="col-12 col-md-6 bg-img" style="background-image: url(assets/img/fichepatient.PNG); min-height: 300px;"></div>


            <div class="offset-1 col-10 col-md-4 py-90">
              <h5>Remplir la fiche d'un patient</h5>
              <p>Vous trouverez ici, la fiche de votre patient. Veuillez la renseigner pour pouvoir l'ajouter à votre base de données.</p>
              <br>
              <a class="btn btn-round btn-primary" href="fichepat.php">VOIR fiche</a>
            </div>

          </div>

          <div class="row no-gap">

            <div class="col-12 offset-md-1 col-md-6 bg-img order-md-last" style="background-image: url(assets/img/listetechnicien.PNG); min-height: 300px;"></div>

            <div class="offset-1 col-10 col-md-4 py-90 order-md-first">
              <h5>LISTE des patients</h5>
              <p>Ici, vous pouvez voir tous les patients que vous avez ajoutés ainsi que le médecin responsable et les interprétations.</p>
              <br>
 <br><?php
		$phr=sprintf("<a class='btn btn-round btn-primary' href='patientlisttech.php?user=%d'>VOIR LISTE</a>",$_GET['user']);
              echo $phr;
             
?>
            </div>

          </div>

            
      </section>








    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>
