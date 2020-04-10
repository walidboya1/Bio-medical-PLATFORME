<?php
	include 'config.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$prenom = $_POST['reg_prenom'];
		$nom = $_POST['reg_nom'];
		$email_id = $_POST['reg_email'];
		$password = $_POST['reg_passwd'];
		$telephone = $_POST['reg_phone'];
		$cin = $_POST['reg_CIN'];
		$idmed = $_POST['reg_med'];
		$site = $_POST['reg_site'];

		echo $query = "INSERT INTO user(email_id,password) VALUES('$email_id','".md5($password)."')";
   		echo $table = mysqli_query($connection,$query);

 $query2 = "CALL updateuser('$email_id')";
$table2 = mysqli_query($connection,$query2);

if($table2){
				$rows=mysqli_num_rows($table2);
				if($rows == 1){
					$row = mysqli_fetch_assoc($table1);
					$email = $row['id'];
        echo $query1 = "INSERT INTO medecin(Nom,prenom,contact,id_med,id_user,site) values('$nom','$prenom','$telephone','$idmed', '$email' ,'$site')";
       	echo $table1 = mysqli_query($connection,$query1);
}}
		mysqli_close($connection); // Closing Connection
	}
?>
