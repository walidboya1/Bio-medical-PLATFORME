<?php
	include 'config.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user_name = $_POST['reg_uname'];
		$email_id = $_POST['reg_email'];
		$password = $_POST['reg_passwd'];
		$telephone = $_POST['reg_phone'];
		$cin = $_POST['reg_CIN'];

		echo $query = "INSERT INTO user(user_name,email_id,password, cin,contact_no) VALUES('$user_name','$email_id','$password','$cin', '$telephone')";
   		echo $table = mysqli_query($connection,$query);
    
		if($table){
			$_SESSION['login_user']= $_POST['reg_uname']; 
			header("location: profile.php"); // Redirecting To Other Page
			exit();
		}
		mysqli_close($connection); // Closing Connection
	}
?>