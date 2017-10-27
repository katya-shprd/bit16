<?php
/*
	file:	admin/removeuser.php
	desc:	Reads the userID coming with post. Retrieves userID
			from user table and shows data. Asks for confirmation
			to remove the data from db
*/
if(!empty($_POST['userID'])){
	$userID=$_POST['userID'];
	include('../db.php');
	$sql="SELECT * FROM user WHERE userID=$userID";
	$result=$conn->query($sql);  //runs the query in database
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		echo '<h3>Confirm the removal of this record</h3>';
		echo '<p>Do your really want to remove this user from db:</p>';
		echo '<p>'.$row['firstname'].' '.$row['lastname'].', '.$row['email'].'</p>';
		echo '<p><a href="deleteuser.php?userID='.$userID.'">Yes, I am sure!</a> / <a href="index.php?page=edituser&userID='.$userID.'">No. Go back to edit</a>';
	}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
?>