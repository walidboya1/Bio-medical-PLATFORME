<?php
	include 'config.php';
	function valid_user($profi){
		global $connection;
		$user_id=$_SESSION['User_Id'];
		$user_id=stripslashes($user_id);
		$query=sprintf("select prof from user where session='%s'",$_SESSION['User_Id']);
		clearStoredResults();
		$result=mysqli_query($connection,$query);
		$numr=mysqli_num_rows($result);
		if (empty($_SESSION['User_Id']) || $numr==0){
			header("location: index.php");
			exit();
        	}
		else {
			$row = mysqli_fetch_assoc($result);
			if ($row['prof']==$profi){
			return true;
			}
		}
	}
	function ismedecin(){
		if (valid_user(1)){
                        header("location: technicien.php?user=".$_SESSION['login_user']);
                        exit();
                }
		if (valid_user(2)){
                        header("location: page-register.php?user=".$_SESSION['login_user']);
                        exit();
                }
	}
	function istechnicien(){
                if (valid_user(0)){
			echo "medecin";
                        header("location: medecin.php?user=".$_SESSION['login_user']);
                        exit();
                }
                if (valid_user(2)){
                        header("location: page-register.php?user=".$_SESSION['login_user']);
                        exit();
                }

	}
	function isadmin(){
                if (valid_user(0)){
                        header("location: medecin.php?user=".$_SESSION['login_user']);
                        exit();
                }
                if (valid_user(1)){
                        header("location: technicien.php?user=".$_SESSION['login_user']);
                        exit();
                }
	}
	function isuser($userid){
		global $connection;
		$sessionu=$_SESSION['User_Id'];
		$userid=stripslashes($userid);
		$sessionu=stripslashes($sessionu);
		clearStoredResults();
		$query=sprintf("select prof from user where session='%s' and id=%d",$sessionu,$userid);
		$result=mysqli_query($connection,$query);
		$numr=mysqli_num_rows($result);
		if($numr==0){
			header("location: index.php");
			exit();
		}
	}
	session_start();
?>
