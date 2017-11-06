<?php
/*
	file:	admin/updatecommunity.php
	desc:	Updates communitys-table with given fields
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['communityID'])) $communityID=$_POST['communityID'];else $error=true;
if(!empty($_POST['communityName'])) $communityName=$_POST['communityName'];else $error=true;
if(!empty($_POST['country'])) $country=$_POST['country'];else $error=true;
if(!empty($_POST['description'])) $description=$_POST['description'];else $description=NULL;
if(!$error){
	$sql="UPDATE community SET communityName='$communityName',country='$country',
		  description='$description'
		  WHERE communityID=$communityID";
	$conn->query($sql);
	session_start();
	$_SESSION['msg']='<h5 class="alert alert-success">Updated!</h5>';
}else $_SESSION['msg']='<h5 class="alert alert-danger">Could not update!</h5>';
$conn->close();
header("location:index.php?page=editcommunity&communityID=$communityID");
?>