<?php
	include 'required.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (strcmp($_POST['radio1'],"medecin")==0){
		$prenom = $_POST['reg_prenom'];
		$nom = $_POST['reg_nom'];
		$email_id = $_POST['reg_email'];
		$password = $_POST['reg_passwd'];
		$telephone = $_POST['reg_phone'];
		$cin = $_POST['reg_CIN'];
		$idmed= $_POST['reg_med'];
		$site=$_POST['reg_site'];
		clearStoredResults();
		$query = sprintf("SELECT * from user where email_id='%s'",$email_id);
		echo $query;
		if (!$testr = mysqli_query($connection,$query)){
			echo "Error: <br>" . mysqli_error($connection);
		}
		$numr=mysqli_num_rows($testr);
		if ($numr!=0){
			exit();
		}
		clearStoredResults();
		$query = sprintf("INSERT INTO user(email_id,password,prof) VALUES('%s','%s','0')",$email_id,md5($password));
   		$table = mysqli_query($connection,$query);
		if($table){
			clearStoredResults();
			$query2 = sprintf("SELECT id FROM  user  where email_id = '%s' LIMIT 1",$email_id);
			$table2 = mysqli_query($connection,$query2);

			if($table2){
				$rows=mysqli_num_rows($table2);
				if($rows == 1){
					$row = mysqli_fetch_assoc($table2);
					$query1 = sprintf("INSERT INTO medecin(nom,prenom,contact,id_user,site,id_med) values('%s','%s','%s','%d','%s','%s')",$nom,$prenom,$telephone,$row['id'],$site,$idmed);
					echo $query1;
					clearStoredResults();
					$table1 = mysqli_query($connection,$query1);

					if($table1){
						header("location: page-login.php");
						exit();
					}
					else{
						echo "Error: <br>" . mysqli_error($connection);
					}
				}
			}
		}
}
		if (strcmp($_POST['radio1'],"technicien")==0){
		$prenom = $_POST['reg_prenom'];
		$nom = $_POST['reg_nom'];
		$email_id = $_POST['reg_email'];
		$password = $_POST['reg_passwd'];
		$cin = $_POST['reg_CIN'];
		$centre=$_POST['reg_centre'];
		clearStoredResults();
		$query = sprintf("SELECT * from user where email_id='%s'",$email_id);
		if (!$testr = mysqli_query($connection,$query)){
			echo "Error: <br>" . mysqli_error($connection);
		}
		$numr=mysqli_num_rows($testr);
		if ($numr!=0){
			exit();
		}
		clearStoredResults();
		$query = sprintf("INSERT INTO user(email_id,password,prof) VALUES('%s','%s','1')",$email_id,md5($password));
   		$table = mysqli_query($connection,$query);
		if($table){
			clearStoredResults();
			$query2 = sprintf("SELECT id FROM  user  where email_id = '%s' LIMIT 1",$email_id);
			$table2 = mysqli_query($connection,$query2);

			if($table2){
				$rows=mysqli_num_rows($table2);
				if($rows == 1){
					$row = mysqli_fetch_assoc($table2);
					//$query1 = sprintf("INSERT INTO technicien(nom,prenom,id_user,cin) values('%s','%s','%d','%s')",$nom,$prenom,$row['id'],$cin);
					$query1 = sprintf("INSERT INTO technicien(nom,prenom,id_user,cin,centre) values('%s','%s','%d','%s','%d')",$nom,$prenom,$row['id'],$cin,$centre);
					clearStoredResults();
					$table1 = mysqli_query($connection,$query1);

					if($table1){
						header("location: page-login.php");
						exit();
					}
			else {
				echo "Error: <br>" . mysqli_error($connection);
			}
	}}}
}
	}









		mysqli_close($connection); // Closing Connection
	
?>
