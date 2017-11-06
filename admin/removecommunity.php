<?php
/*
	file:	admin/removecommunity.php
	desc:	Reads the communityID coming with post. Retrieves communityID
			from community table and shows data. Asks for confirmation
			to remove the data from db
*/
if(!empty($_POST['communityID'])){
	$communityID=$_POST['communityID'];
	include('../db.php');
	$sql="SELECT * FROM community WHERE communityID=$communityID";
	$result=$conn->query($sql);  //runs the query in database
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		echo '<h3>Confirm the removal of this record</h3>';
		echo '<p>Do your really want to remove this community from db:</p>';
		echo '<p>'.$row['communityName'].' '.$row['country'].'</p>';
		echo '<p><a href="deletecommunity.php?communityID='.$communityID.'">Yes, I am sure!</a> / <a href="index.php?page=editcommunity&communityID='.$communityID.'">No. Go back to edit</a>';
	}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
?>