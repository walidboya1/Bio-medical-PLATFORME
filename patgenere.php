<?php
	require 'required.php';
	ismedecin();
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

	<title>TELERADIO - Medecin</title>
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

            <h5 class="display-4">DOSSIER PATIENT</h5>
           
          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Fiche
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->



<section class="section bg-gray">
        <div class="container">
          <header class="section-header">
            <h2>DOSSIER PATIENT</h2>
            <hr>
            <p class="lead">ici vous trouverez les informations de vos patients</p>
          </header>


          <p class="text-center">
          	<form id="form-edu" action="update-pat.php"><?php
							$query = "SELECT * FROM image join patient on image.Id_patient = patient.ID where patient.id_medecin IS NULL LIMIT 1";
							$table = mysqli_query($connection,$query);
							if($table){
								$rows=mysqli_num_rows($table);
								if($rows == 1){
						?><div class="section-dialog"><?php
				    					$row = mysqli_fetch_assoc($table);
				    					if ($row){
												
												$deg_query = "select id from patient where id_medecin IS NULL";
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<input type='hidden' name = 'nompat' id='nompat' value ='" .$deg_column['id']."' readonly>";
												}



												$inst_query = "select nom from image join patient on image.Id_patient = patient.ID where patient.id_medecin IS NULL LIMIT 1";
												$inst_table = mysqli_query($connection, $inst_query);
												if ($inst_table){
													$inst_column = mysqli_fetch_assoc($inst_table);
													echo "<p   style='padding-bottom: 10px; font-size:18px; font-weight:bold'> NOM COMPLET : ".$inst_column['nom']."</p>";
												
												}

												$deg_query = "select sexe from patient where id_medecin IS NULL";
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<p  style='padding-bottom: 10px; font-size:18px; font-weight:bold'>  SEXE :  ".$deg_column['sexe']." </p>";
												}
						
												$deg_query = "select age from patient where id_medecin IS NULL";
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<p  style='padding-bottom: 10px; font-size:18px; font-weight:bold'>  AGE :  ".$deg_column['age']." </p>";
												}

												$deg_query = "select tele from patient where id_medecin IS NULL";
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<p  style='padding-bottom: 10px; font-size:18px; font-weight:bold'>  NUMÉRO DE TÉLÉPHONE :  ".$deg_column['tele']." </p>";
												}

												
												
										}
							
      $deg_query = "SELECT id from medecin where id_user ='".$_SESSION['login_user']."'";
$deg_table = mysqli_query($connection,$deg_query);
if($deg_table){
								$deg_column=mysqli_num_rows($deg_table);
								if($deg_column == 1){
				    					$deg_column = mysqli_fetch_assoc($deg_table);
				    					echo "<input type='hidden' name='idmed' id='idmed' value ='".$deg_column['id']."' readonly>";

				    					
}
} ?>

					<input class='btn btn-primary btn-block' type='submit' name='submit' id='submit' value = 'AJOUTER CE PATIENT'></input>
</div>

						   <?php
						    }
						    else {
						    	?>
						    	<div class="container text-center">
						    	<span class='b-2 border-danger d-inline-block text-center p-1 w-600 '><h1 class="text-danger display-4">Il n'y a pas de patient</h1></span>
						    </div>
						   <?php }

								}
						?>
</form>
						</p>
					        </div>
      </section>

   



    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>
