<?php
/*
	file:	admin/updateuser.php
	desc:	Updates users-table with given fields
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['User_ID'])) $User_ID=$_POST['User_ID'];else $error=true;
if(!empty($_POST['Lastname'])) $Lastname=$_POST['Lastname'];else $error=true;
if(!empty($_POST['Firstname'])) $Firstname=$_POST['Firstname'];else $error=true;
if(!empty($_POST['Date_of_birth'])) $Date_of_birth=$_POST['Date_of_birth'];else $error=true;
if(!empty($_POST['Country'])) $Country=$_POST['Country'];else $error=true;
if(!empty($_POST['Email'])) $Email=$_POST['Email'];else $error=true;
if(!empty($_POST['Password'])) $Password=$_POST['Password'];else $error=true;
if(!empty($_POST['Login'])) $Login=$_POST['Login'];else $error=true;
if(!empty($_POST['Score'])) $Score=$_POST['Score'];else $Score=0;
if(!$error){
	$sql="UPDATE Users SET Lastname='$Lastname',Firstname='$Firstname',
		  Date_of_birth=$Date_of_birth, Country='$Country', Email='$Email',
		  Password='$Password', Login='$Login'
		  WHERE User_ID=$User_ID";
	$conn->query($sql);
	session_start();
	$_SESSION['msg']='<h5 class="alert alert-success">Updated!</h5>';
}else $_SESSION['msg']='<h5 class="alert alert-danger">Could not update!</h5>';
$conn->close();
header("location:index.php?page=edituser&User_ID=$User_ID");
?>