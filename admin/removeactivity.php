<?php
/*
	file:	admin/removeactivity.php
	desc:	Reads the activityID coming with post. Retrieves activityID
			from activity table and shows data. Asks for confirmation
			to remove the data from db
*/
if(!empty($_POST['activityID'])){
	$activityID=$_POST['activityID'];
	include('../db.php');
	$sql="SELECT * FROM activity WHERE activityID=$activityID";
	$result=$conn->query($sql);  //runs the query in database
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		echo '<h3>Confirm the removal of this record</h3>';
		echo '<p>Do your really want to remove this activity from db:</p>';
		echo '<p>'.$row['activityName'].'</p>';
		echo '<p><a href="deleteactivity.php?activityID='.$activityID.'">Yes, I am sure!</a> / <a href="index.php?page=editactivity&activityID='.$activityID.'">No. Go back to edit</a>';
	}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
?>