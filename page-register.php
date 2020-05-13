<?php
include 'required.php';
isadmin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>TELERADIO - Inscription </title>
	<!-- Styles -->
	<link href="assets/css/core.min.css" rel="stylesheet">
	<link href="assets/css/thesaas.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="assets/img/logo.png">
	<link rel="icon" href="assets/img/logo.png"> </head>

<body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/bg-girl.jpg);">
	<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Topbar
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
	<nav class="topbar topbar-expand-md topbar-nav-centered topbar-inverse topbar-sticky">
		<div class="container">
			<div class="topbar-left">
				<button class="topbar-toggler">&#9776; </button>
				<a class="topbar-brand" href="index.php"> <img class="logo-default" src="assets/img/logo.png" alt="logo"> <img class="logo-inverse" src="assets/img/logo.png" alt="logo"> </a>
			</div>
			<div class="topbar-right"> <a class="btn btn-sm btn-danger mr-4" href="logout.php">Se deconnecter
					</a> </div>
		</div>
	</nav>
	<!---- END topbar---->
	<div class="card card-shadowed p-50 w-500 mb-0" style="max-width: 100%">
		<h5 class="text-uppercase text-center">Ajouter INFORMATION UTILISATEUR
			</h5>
		<br>
		<br>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
		</script>
		<div id="backgroundLogin">
			<form name="login" method="post" action="signup.php" class="technicien-form">
				<fieldset>
					<div class="form-group">
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="medecin" value="medecin" disabled="">
							<a class="show-medecin-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-medecin-form"> <span class="custom-control-description">Medecin
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="technicien" value="technicien" checked=""> <span class="custom-control-indicator">
								</span> <span class="custom-control-description">Technicien
								</span> </label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Centre" value="Centre" disabled="">
							<a class="show-Centre-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-Centre-form"> <span class="custom-control-description">Centre
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Admin" value="Admin" disabled="">
							<a class="show-admin-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-admin-form"> <span class="custom-control-description">Admin
									</span> </a>
						</label>
					</div>
					<div class="form-group">
						<input type="text" id="reg_nom" name="reg_nom" pattern="^[a-zA-Z ]+$" placeholder="Nom" class="form-control" placeholder="Nom"> </div>
					<div class="form-group">
						<input type="text" id="reg_prenom" name="reg_prenom" pattern="^[a-zA-Z ]+$" placeholder="Prenom" class="form-control" placeholder="Prenom"> </div>
					<div class="form-group">
						<input type="email" id="reg_email" name="reg_email" class="form-control" onchange="check_email()" placeholder="Adresse mail"> </div>
					<div class="form-group">
						<input type="phone" id="reg_phone" name="reg_phone" class="form-control" placeholder="N° de télephone"> </div>
					<div class="form-group">
						<input type="text" id="reg_CIN" name="reg_CIN" class="form-control" placeholder="Identité National"> </div>
					<div class="form-group">
						<select class="form-control" type="Centr" name="Centr" id="Centr">
							<option>Centre </option>
							<?php
							$query = "SELECT nom from centre";
							$table = mysqli_query($connection, $query);
							if ($table)
							{
									$rows = mysqli_num_rows($table);
									if ($rows > 0)
									{
											for ($i = 0;$i < $rows;$i++)
											{
													$row = mysqli_fetch_assoc($table);
													if ($row)
													{
															$inst_query = sprintf("select nom from centre LIMIT 1 OFFSET %d", $i);
															clearStoredResults();
															$inst_table = mysqli_query($connection, $inst_query);
															if ($inst_table)
															{
																	$inst_column = mysqli_fetch_assoc($inst_table);
																	echo "<option>" . $inst_column['nom'] . "</option>";
															}
													}
											}
									}
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<input type="password" id="reg_passwd" name="reg_passwd" class="form-control" placeholder="Mot de Passe"> </div>
					<div class="form-group">
						<input type="password" id="c_password" name="c_password" class="form-control" placeholder="Confirmer le Mot de Passe"> </div>
					<br>
					<button class="btn btn-bold btn-block btn-primary" type="submit" id="signup-btn" value="Sign up">Ajouter </button>
				</fieldset>
			</form>
			<!--------------------------------------------------------------------------------------------------------------------------------------->
			<form action="signup.php" method="POST" class="medecin-form" style="display:none;">
				<div class="form-group">
					<fieldset>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="medecin" value="medecin" checked=""> <span class="custom-control-indicator">
								</span> <span class="custom-control-description">Medecin
								</span> </label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="technicien" value="technicien" disabled="">
							<a class="show-technicien-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-technicien-form"> <span class="custom-control-description">Technicien
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Centre" value="Centre" disabled="">
							<a class="show-Centre-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-Centre-form"> <span class="custom-control-description">Centre
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Admin" value="Admin" disabled="">
							<a class="show-admin-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-admin-form"> <span class="custom-control-description">Admin
									</span> </a>
						</label>
				</div>
				<div class="form-group">
					<input type="text" id="reg_nom" name="reg_nom" pattern="^[a-zA-Z ]+$" placeholder="Nom" class="form-control" placeholder="Nom"> </div>
				<div class="form-group">
					<input type="text" id="reg_prenom" name="reg_prenom" pattern="^[a-zA-Z ]+$" placeholder="Prenom" class="form-control" placeholder="Prenom"> </div>
				<div class="form-group">
					<input type="email" id="reg_email" name="reg_email" class="form-control" onchange="check_email()" placeholder="Adresse mail"> </div>
				<div class="form-group">
					<input type="phone" id="reg_phone" name="reg_phone" class="form-control" placeholder="N° de télephone"> </div>
				<div class="form-group">
					<input type="text" id="reg_CIN" name="reg_CIN" class="form-control" placeholder="Identité National"> </div>
				<div class="form-group">
					<input type="text" id="reg_med" name="reg_med" class="form-control" placeholder="Identité Medecin"> </div>
				<div class="form-group">
					<input type="text" id="reg_site" name="reg_site" class="form-control" placeholder="Adresse"> </div>
				<div class="form-group">
					<input type="password" id="reg_passwd" name="reg_passwd" class="form-control" placeholder="Mot de Passe"> </div>
				<div class="form-group">
					<input type="password" id="c_password" name="c_password" class="form-control" placeholder="Confirmer le Mot de Passe"> </div>
				<br>
				<button class="btn btn-bold btn-block btn-primary" type="submit" id="signup-btn" value="Sign up">Ajouter </button>
				</fieldset>
			</form>
			<!------------------------------------------------------------------------------------------------------------------------------------------>
			<form action="signup.php" method="Post" class="Centre-form" style="display:none;">
				<fieldset>
					<div class="form-group">
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="medecin" value="medecin" disabled="">
							<a class="show-medecin-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-medecin-form"> <span class="custom-control-description">Medecin
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="technicien" value="technicien" disabled="">
							<a class="show-technicien-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-technicien-form"> <span class="custom-control-description">Technicien
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Centre" value="Centre" checked=""> <span class="custom-control-indicator">
								</span> <span class="custom-control-description">Centre
								</span> </label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Admin" value="Admin" disabled="">
							<a class="show-admin-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-admin-form"> <span class="custom-control-description">Admin
									</span> </a>
						</label>
					</div>
					<div class="form-group">
						<input type="text" id="reg_nom" name="reg_nom" pattern="^[a-zA-Z ]+$" placeholder="Nom" class="form-control"> </div>
					<div class="form-group">
						<input type="text" id="reg_respo" name="reg_nom" pattern="^[a-zA-Z ]+$" placeholder="Nom du responsable" class="form-control"> </div>
					<div class="form-group">
						<input type="phone" id="reg_phone" name="reg_phone" class="form-control" placeholder="N° de télephone"> </div>
					<div class="form-group">
						<input type="text" id="reg_site" name="reg_site" class="form-control" placeholder="Adresse"> </div>
					<br>
					<button class="btn btn-bold btn-block btn-primary" type="submit" id="signup-btn" value="Sign up">Ajouter </button>
				</fieldset>
			</form>
			<!--------------------------------------------------------------------------------------------------------------------------------------->
			<form name="login" method="post" action="signup.php" class="admin-form" style="display:none;">
				<fieldset>
					<div class="form-group">
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="medecin" value="medecin" disabled="">
							<a class="show-medecin-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-medecin-form"> <span class="custom-control-description">Medecin
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="technicien" value="technicien" disabled="">
							<a class="show-technicien-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-technicien-form"> <span class="custom-control-description">Technicien
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Centre" value="Centre" disabled="">
							<a class="show-Centre-form"> <span class="custom-control-indicator">
									</span> </a>
							<a class="show-Centre-form"> <span class="custom-control-description">Centre
									</span> </a>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="radio1" id="Admin" value="Admin" checked=""> <span class="custom-control-indicator">
								</span> <span class="custom-control-description">Admin
								</span> </label>
					</div>
					<div class="form-group">
						<input type="email" id="reg_email" name="reg_email" class="form-control" onchange="check_email()" placeholder="Adresse mail"> </div>
					<div class="form-group">
						<input type="password" id="reg_passwd" name="reg_passwd" class="form-control" placeholder="Mot de Passe"> </div>
					<div class="form-group">
						<input type="password" id="c_password" name="c_password" class="form-control" placeholder="Confirmer le Mot de Passe"> </div>
					<br>
					<button class="btn btn-bold btn-block btn-primary" type="submit" id="signup-btn" value="Sign up">Ajouter </button>
				</fieldset>
			</form>
			<script type="text/javascript">
			function check_email() {
				var uname = $("#reg_email").val();
				$.ajax({
					url: "check_email.php?email=" + uname,
					success: function(data) {
						$(".msg-alert p").html(data);
						if(data == "Email Available") {
							<?php echo "kayn" ?>
						} else {
							<?php echo "makaynch" ?>
						}
					}
				});
			}
			</script>
			<script type="text/javascript">
			//---------------------------------
			$('.technicien-form a.show-medecin-form').click(function() {
				$('.technicien-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').hide();
				$('.medecin-form').show();
			});
			$('.technicien-form a.show-Centre-form').click(function() {
				$('.medecin-form').hide();
				$('.technicien-form').hide();
				$('.admin-form').hide();
				$('.Centre-form').show();
			});
			$('.technicien-form a.show-admin-form').click(function() {
				$('.medecin-form').hide();
				$('.technicien-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').show();
			});
			//---------------------------------
			//---------------------------------
			$('.medecin-form a.show-technicien-form').click(function() {
				$('.medecin-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').hide();
				$('.technicien-form').show();
			});
			$('.medecin-form a.show-Centre-form').click(function() {
				$('.medecin-form').hide();
				$('.technicien-form').hide();
				$('.admin-form').hide();
				$('.Centre-form').show();
			});
			$('.medecin-form a.show-admin-form').click(function() {
				$('.medecin-form').hide();
				$('.technicien-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').show();
			});
			//---------------------------------
			//---------------------------------
			$('.Centre-form a.show-technicien-form').click(function() {
				$('.medecin-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').hide();
				$('.technicien-form').show();
			});
			$('.Centre-form a.show-medecin-form').click(function() {
				$('.Centre-form').hide();
				$('.technicien-form').hide();
				$('.admin-form').hide();
				$('.medecin-form').show();
			});
			$('.Centre-form a.show-admin-form').click(function() {
				$('.medecin-form').hide();
				$('.technicien-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').show();
			});
			//---------------------------------
			//---------------------------------
			$('.admin-form a.show-technicien-form').click(function() {
				$('.medecin-form').hide();
				$('.Centre-form').hide();
				$('.admin-form').hide();
				$('.technicien-form').show();
			});
			$('.admin-form a.show-medecin-form').click(function() {
				$('.Centre-form').hide();
				$('.technicien-form').hide();
				$('.admin-form').hide();
				$('.medecin-form').show();
			});
			$('.admin-form a.show-Centre-form').click(function() {
				$('.medecin-form').hide();
				$('.technicien-form').hide();
				$('.admin-form').hide();
				$('.Centre-form').show();
			});
			//---------------------------------
			</script>
		</div>
	</div>
	<!-- Scripts -->
<script src="assets/js/core.min.js"></script>
<script src="assets/js/thesaas.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>