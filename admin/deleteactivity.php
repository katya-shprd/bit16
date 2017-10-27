<?php
/*
	file:	admin/deleteactivity.php
	desc:	Reads activityID from get-list and deletes that record
			from database table activity. 
*/
if(!empty($_GET['activityID'])) $activityID=$_GET['activityID'];
else header('location:index.php?page=');
include('../db.php');
$sql="DELETE FROM activity WHERE activityID=$activityID";
$conn->query($sql);
header('location:index.php?page=activities');
?>