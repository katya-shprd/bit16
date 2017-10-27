<?php
/*
	file:	admin/updateuser.php
	desc:	Updates users-table with given fields
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['userID'])) $userID=$_POST['userID'];else $error=true;
if(!empty($_POST['firstname'])) $firstname=$_POST['firstname'];else $error=true;
if(!empty($_POST['lastname'])) $lastname=$_POST['lastname'];else $error=true;
if(!empty($_POST['phone'])) $phone=$_POST['phone'];else $error=true;
if(!empty($_POST['email'])) $email=$_POST['email'];else $error=true;
if(!empty($_POST['password'])) $password=$_POST['password'];else $error=true;
if(!empty($_POST['level'])) $level=$_POST['level'];else $level=0;
if(!$error){
	$sql="UPDATE user SET firstname='$firstname',lastname='$lastname',
		  phone=$phone, email='$email',
		  password='$password', level='$level'
		  WHERE userID=$userID";
	$conn->query($sql);
	session_start();
	$_SESSION['msg']='<h5 class="alert alert-success">Updated!</h5>';
}else $_SESSION['msg']='<h5 class="alert alert-danger">Could not update!</h5>';
$conn->close();
header("location:index.php?page=edituser&userID=$userID");
?>