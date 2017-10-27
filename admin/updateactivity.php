<?php
/*
	file:	admin/updateactivity.php
	desc:	Updates activitys-table with given fields
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['activityID'])) $activityID=$_POST['activityID'];else $error=true;
if(!empty($_POST['activityName'])) $activityName=$_POST['activityName'];else $error=true;
if(!empty($_POST['activityDescription'])) $activityDescription=$_POST['activityDescription'];else $error=true;
if(!empty($_POST['activityKeyword'])) $activityKeyword=$_POST['activityKeyword'];else $error=true;
if(!$error){
	$sql="UPDATE activity SET activityName='$activityName',activityDescription='$activityDescription',
		  activityKeyword='$activityKeyword'
		  WHERE activityID=$activityID";
	$conn->query($sql);
	session_start();
	$_SESSION['msg']='<h5 class="alert alert-success">Updated!</h5>';
}else $_SESSION['msg']='<h5 class="alert alert-danger">Could not update!</h5>';
$conn->close();
header("location:index.php?page=editactivity&activityID=$activityID");
?>