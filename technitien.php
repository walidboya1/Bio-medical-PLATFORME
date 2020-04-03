<?php
  error_reporting(0);
  include 'config.php';
  session_start();
  if (empty($_SESSION['login_user'])){
    header("location: index.php");
    exit();
  }
  
  if (is_numeric($_GET['user'])){
    $query = "select name,email_id,contact_no,img_url,user_type from user where id=".$_GET['user'];
  }
  else{
    $query = "select name,email_id,contact_no,img_url,user_type from user where name='".$_GET['user']."'";
  }

  $table = mysqli_query($connection,$query);
    if($table){
      $rows=mysqli_num_rows($table);
      if($rows == 1){
          $row = mysqli_fetch_assoc($table);
          $dp = $row['img_url'];
          $fullname = $row['name'];
          $email = $row['email_id'];
          $contact = $row['contact_no'];
        }
    } 
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
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">

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
            
            <div class="col-12 col-md-6 bg-img" style="background-image: url(image/fichep.png); min-height: 300px;"></div>


            <div class="offset-1 col-10 col-md-4 py-90">
              <h5>Remplir la fiche d'un patient</h5>
              <p>Ici vous trouverez le formulaire concernant la fiche de vôtre patient, veillez la remplire pour l'ajouter à vôtre base de donné.</p>
              <br>
              <a class="btn btn-round btn-primary" href="fichepat.php">voire fiche</a>
            </div>

          </div>

          <div class="row no-gap">

            <div class="col-12 offset-md-1 col-md-6 bg-img order-md-last" style="background-image: url(assets/img/bg-girl.jpg); min-height: 300px;"></div>

            <div class="offset-1 col-10 col-md-4 py-90 order-md-first">
              <h5>Medecin Responsable et consultaion des résultats</h5>
              <p>Interactively productize worldwide potentialities before long-term high-impact initiatives. Completely disintermediate excellent leadership skills with client-centric content.</p>
              <br>
                            <input class="form-control" type="text" name="name" placeholder="Nom">
 <br>
              <a class="btn btn-round btn-primary" href="#">Chercher</a>
             
            </div>

          </div>

             <div class="row no-gap">
            
            <div class="col-12 col-md-6 bg-img" style="background-image: url(assets/img/bg-man.jpg); min-height: 300px;"></div>


            <div class="offset-1 col-10 col-md-4 py-90">
              <h5>Visionner la liste des patient</h5>
              <p>Interactively productize worldwide potentialities before long-term high-impact initiatives. Completely disintermediate excellent leadership skills with client-centric content.</p>
              <br>
              <a class="btn btn-round btn-primary" href="#">Read More</a>
            </div>

          </div>
        </div>
      </section>








    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>