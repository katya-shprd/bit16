<?php
/*
	file:	admin/deletestory.php
	desc:	Reads storyID from get-list and deletes that record
			from database table story. 
*/
if(!empty($_GET['storyID'])) $storyID=$_GET['storyID'];
else header('location:index.php?page=');
include('../db.php');
$sql="DELETE FROM story WHERE storyID=$storyID";
$conn->query($sql);
header('location:index.php?page=stories');
?>