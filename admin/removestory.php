<?php
/*
	file:	admin/removestory.php
	desc:	Reads the storyID coming with post. Retrieves storyID
			from story table and shows data. Asks for confirmation
			to remove the data from db
*/
if(!empty($_POST['storyID'])){
	$storyID=$_POST['storyID'];
	include('../db.php');
	$sql="SELECT * FROM story WHERE storyID=$storyID";
	$result=$conn->query($sql);  //runs the query in database
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		echo '<h3>Confirm the removal of this record</h3>';
		echo '<p>Do your really want to remove this story from db:</p>';
		echo '<p>'.$row['storyTitle'].' '.$row['storyType'].'</p>';
		echo '<p><a href="deletestory.php?storyID='.$storyID.'">Yes, I am sure!</a> / <a href="index.php?page=editstory&storyID='.$storyID.'">No. Go back to edit</a>';
	}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
?>