<?php
	error_reporting(0);
	include 'config.php';

	if(isset($_GET['username'])){
		$query = sprintf("select * from user where email_id='%s'",$_GET['email_id']);
		$table = mysqli_query($connection, $query);
		if($table){
			$rows=mysqli_num_rows($table);
			if($rows == 1){
				echo "Email already exist.";
			}
			else{
				echo "Email Available";
			}
		}
	}
?>
