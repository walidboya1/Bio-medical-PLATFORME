<?php
require 'required.php';
ismedecin();
$IDpat = $_GET['nompat'];
$IDmedecin = $_GET['idmed'];
	$user = $_SESSION['login_user'];


$queryTT = "UPDATE  patient SET id_medecin = '$IDmedecin' where id = '$IDpat'";
$tableTT = mysqli_query($connection, $queryTT);


	header("location: medecin.php?user=".$_SESSION['login_user']);
	mysqli_close($connection); // Closing Connection
?>
