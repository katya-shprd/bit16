<?php
/*
	file:	admin/insertstory.php
	desc:	Reads form fields coming storyTitle, storyType, storyLink,
			storyKeywords and storyDescription. Inserts them into table story in db
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['storyTitle'])) $storyTitle=$_POST['storyTitle'];else $error=true;
if(!empty($_POST['storyType'])) $storyType=$_POST['storyType'];else $error=true;
if(!empty($_POST['storyLink'])) $storyLink=$_POST['storyLink'];else $error=true;
if(!empty($_POST['storyKeywords'])) $storyKeywords=$_POST['storyKeywords'];else $error=true;
if(!empty($_POST['storyDescription'])) $storyDescription=$_POST['storyDescription'];else $storyDescription=NULL;
if(!$error){
	//here i could check that same values do not exist
	$sql="SELECT * FROM story WHERE storyTitle='$storyTitle' AND storyLink='$storyLink'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//already in database, do not insert!
		header('location:index.php?page=stories');
	}else{
	 //insert into database
	 $sql="INSERT INTO story(storyTitle,storyType,storyLink,storyKeywords,storyDescription)
		 VALUES('$storyTitle','$storyType','$storyLink','$storyKeywords','$storyDescription')";
	 $conn->query($sql);
	 //get the id of inserted record from auto-increment
	 $last_id=$conn->insert_id;
	}
}
$conn->close();
header('location:index.php?page=stories');
?>