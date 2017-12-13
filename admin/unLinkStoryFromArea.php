<?php
$error=false;
if(!empty($_GET['storyID'])) $storyID=$_GET['storyID'];else $error=true;
if(!empty($_GET['communityID'])) $communityID=$_GET['communityID'];else $error=true;
if(!$error){
	include('../db.php');	
	$sql="DELETE FROM storyarea 
			WHERE storyID=$storyID AND communityID=$communityID";
	$conn->query($sql);
}	
header("location:index.php?page=editStory&storyID=$storyID");
?>