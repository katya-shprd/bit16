<?php
/*
	file:	admin/editactivity.php
	desc:	Displays a form where activity with given id can be edited
*/
if(!empty($_GET['activityID'])) $activityID=$_GET['activityID'];else $activityID=0;
include('../db.php');
$sql="SELECT * FROM activity WHERE activityID=$activityID";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit activity data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<form action="updateactivity.php" method="post">
			<input type="hidden" name="activityID" value="'.$activityID.'" />
			Activity name <input type="text" name="activityName" value="'.$row['activityName'].'" /><br />
			Description <input type="text" name="activityDescription" value="'.$row['activityDescription'].'" /><br />
			Keyword <input type="text" name="activityKeyword" value="'.$row['activityKeyword'].'" /><br />
			<input type="submit" value="Update" />
		  </form>';
	echo '<h5>To remove the activity from db, click here</h5>';
	echo '<p><form action="index.php?page=removeactivity" method="post">';
    echo '<input type="hidden" name="activityID" value="'.$activityID.'" />';
	echo '<input type="submit" value="Remove activity from database" />';
    echo '</form></p>';	
}else echo '<h4>No record found</h4>';
?>