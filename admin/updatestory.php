<?php
/*
	file:	admin/updatestory.php
	desc:	Updates storys-table with given fields
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['storyID'])) $storyID=$_POST['storyID'];else $error=true;
if(!empty($_POST['storyTitle'])) $storyTitle=$_POST['storyTitle'];else $error=true;
if(!empty($_POST['storyType'])) $storyType=$_POST['storyType'];else $error=true;
if(!empty($_POST['storyLink'])) $storyLink=$_POST['storyLink'];else $error=true;
if(!empty($_POST['storyKeywords'])) $storyKeywords=$_POST['storyKeywords'];else $error=true;
if(!empty($_POST['storyDescription'])) $storyDescription=$_POST['storyDescription'];else $storyDescription=NULL;
if(!$error){
	$sql="UPDATE story SET storyTitle='$storyTitle',storyType='$storyType',
		  storyLink='$storyLink',storyKeywords='$storyKeywords',storyDescription='$storyDescription'
		  WHERE storyID=$storyID";
	$conn->query($sql);
	session_start();
	$_SESSION['msg']='<h5 class="alert alert-success">Updated!</h5>';
}else $_SESSION['msg']='<h5 class="alert alert-danger">Could not update!</h5>';
$conn->close();
header("location:index.php?page=stories");

/* storyID
storyTitle
storyType
written /audio /video
storyLink
storyKeywords
storyDescription
*/

?>
