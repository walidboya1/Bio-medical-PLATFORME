<?php
	error_reporting(0);
	include 'config.php';
	function valid_user($profi){
		$user_id=$_SESSION['User_Id'];
		$user_id=stripslashes($user_id);
		$user_id=mysql_real_escape_string($user_id);
		$query="select prof from user where session='$user_id'";
		$table = mysqli_query($connection,$query);
		$row = mysql_fetch_assoc($table);
		if (empty($_SESSION['User_Id']) || !$table){
			header("location: index.php");
			exit();
        	}
		if ($row['prof']==$profi){
			return true;
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
                if (!valid_user(0)){
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
		$sessionu=$_SESSION['User_Id'];
		$userid=stripslashes($userid);
		$userid=mysql_real_escape_string($userid);
		$sessionu=stripslashes($sessionu);
		$sessionu=mysql_real_escape_string($sessionu);
		$query="select prof from user where session='$sessionu' and id=$userid";
		$table = mysqli_query($connection,$query);
		if(!table){
			header("location: index.php");
			exit();
		}
	}
	session_start();
?>
