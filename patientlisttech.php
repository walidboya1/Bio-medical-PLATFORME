<?php
	require 'required.php';
	istechnicien();
	$usern=$_GET['user'];
	isuser($usern);
	if (is_numeric($usern)){
		$query = "select name,email_id,contact_no,img_url,user_type from user where id=".$_GET['user'];
	}
	else{
		$usern=stripslashes($usern);
		$usern=mysql_real_escape_string($usern);
		$query = "select name,email_id,contact_no,img_url,user_type from user where name='".$usern."'";
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

            <h5 class="display-4">PATIENT FILE</h5>
           
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
        <div class="container ">
          <header class="section-header">
            <h2>PATIENT FILE</h2>
            <hr>
            <p class="lead">here you have your patient informations</p>
          </header>


          <p class="text-center">
          	<form id="form-edu" action="update-pat.php"><?php


							$query = "SELECT * FROM patient join technitien on patient.id_technicien = technitien.ID where technitien.id_user = '".$_SESSION['login_user']."'";
							$table = mysqli_query($connection,$query);
							if($table){
								$rows=mysqli_num_rows($table);
								if($rows > 0){
										for($x = 0; $x < $rows; $x++) { 
											echo"<div class='divider'>Patient N° ".($x + 1)." </div>";?>
						<div class='section-dialog'>
											<?php
				    					$row = mysqli_fetch_assoc($table);
				    					if ($row) {
											

												$inst_query = "select patient.nom from patient join technitien on patient.id_technicien = technitien.ID where patient.id_technicien = '".$row['id_technicien']."' LIMIT 1 OFFSET ".$x;
												$inst_table = mysqli_query($connection, $inst_query);
												if ($inst_table){
													$inst_column = mysqli_fetch_assoc($inst_table);
													echo "<p   style='padding-bottom: 10px; font-size:18px; font-weight:bold'> FULL NAME : ".$inst_column['nom']."</p>";
												
												}

												$inst_query2 = "select medecin.nom from patient join medecin on patient.id_medecin = medecin.ID where patient.id_technicien = '".$row['id_technicien']."'  LIMIT 1 OFFSET ".$x;
												$inst_table2 = mysqli_query($connection, $inst_query2);
												if ($inst_table2){
													$inst_column2 = mysqli_fetch_assoc($inst_table2);
													if (!empty($inst_column2['nom'])){
													echo "<p   style='padding-bottom: 10px; font-size:18px; font-weight:bold'> DOCTOR NAME : ".$inst_column2['nom']."</p>";
												}else{
													echo "<p   style='padding-bottom: 10px; font-size:18px; font-weight:bold'>No doctor has taken the patient yet</p>";
												}
												}


												$deg_query = "select sexe from patient where id_technicien = '".$row['id_technicien']."' LIMIT 1 OFFSET ".$x;
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<p  style='padding-bottom: 10px; font-size:18px; font-weight:bold'>  SEXE :  ".$deg_column['sexe']." </p>";
												}
						
												$deg_query = "select age from patient where id_technicien = '".$row['id_technicien']."' LIMIT 1 OFFSET ".$x;
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<p  style='padding-bottom: 10px; font-size:18px; font-weight:bold'>  AGE :  ".$deg_column['age']." </p>";
												}

												$deg_query = "select tele from patient where id_technicien = '".$row['id_technicien']."' LIMIT 1 OFFSET ".$x;
												$deg_table = mysqli_query($connection, $deg_query);
												if ($deg_table){
													$deg_column = mysqli_fetch_assoc($deg_table);
													echo "<p  style='padding-bottom: 10px; font-size:18px; font-weight:bold'>  PHONE NUMBER :  ".$deg_column['tele']." </p>";
												}

												
												
										}
							
      $deg_query = "SELECT id from medecin where id_user = '32'";
$deg_table = mysqli_query($connection,$deg_query);
if($deg_table){
								$deg_column=mysqli_num_rows($deg_table);
								if($deg_column == 1){
				    					$deg_column = mysqli_fetch_assoc($deg_table);
				    					echo "<input type='hidden' name='idmed' id='idmed' value ='".$deg_column['id']."' readonly>";

				    					
}
} ?>

						<button id="item-submit-edu" class="edit-button " >Save</button>
</div>

						   <?php

						    }}
						    else {
						    	?>
						    	<div class="container text-center">
						    	<span class='b-2 border-danger d-inline-block text-center p-1 w-600 '><h1 class="text-danger display-4">You have no patients</h1></span>
						    </div>
						   <?php 
						
					}

								}
						?>
</div></form>
						</p>
					





        </div>



      </section>

   



    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>
