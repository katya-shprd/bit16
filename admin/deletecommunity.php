<?php
/*
	file:	admin/deletecommunity.php
	desc:	Reads communityID from get-list and deletes that record
			from database table community
*/
if(!empty($_GET['communityID'])) $communityID=$_GET['communityID'];
else header('location:index.php?page=');
include('../db.php');
$sql="DELETE FROM community WHERE communityID=$communityID";
$conn->query($sql);
header('location:index.php?page=communities');
?>