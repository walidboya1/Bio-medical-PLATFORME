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

		$query = "INSERT INTO user(email_id,password,prof) VALUES('$email_id','".md5($password)."','0')";
   		$table = mysqli_query($connection,$query);
if($table){
 $query2 = "SELECT id FROM  user  where email_id = '$email_id' LIMIT 1";
$table2 = mysqli_query($connection,$query2);

if($table2){
				$rows=mysqli_num_rows($table2);
				if($rows == 1){
					$row = mysqli_fetch_assoc($table2);
        $query1 = "INSERT INTO medecin(nom,prenom,contact,id_med,id_user,site) values('$nom','$prenom','$telephone','$idmed', '".$row['id']."' ,'$site')";
       	$table1 = mysqli_query($connection,$query1);

		if($table1){
			$_SESSION['login_user']= $row['id']; 
			$_SESSION['email_id'] = $row['email_id'];
			$_SESSION['admin'] = $row['prof'];
			header("location: medecin.php?user=".$_SESSION['login_user']);
			exit();
		}
	}}}
	}	mysqli_close($connection); // Closing Connection
	
?>
