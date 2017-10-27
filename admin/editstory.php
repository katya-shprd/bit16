<?php
/*
	file:	audio/editstory.php
	desc:	Displays a form where story with given id can be edited
*/
if(!empty($_GET['storyID'])) $storyID=$_GET['storyID'];else $storyID=0;
include('../db.php');
$sql="SELECT * FROM story WHERE storyID=$storyID";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit story data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<form action="updatestory.php" method="post">
			<input type="hidden" name="storyID" value="'.$storyID.'" />
			Story title <input type="text" name="storyTitle" value="'.$row['storyTitle'].'" /><br />
			Type <select name="type">
			<option value="">-Select-</option>
		<option value="written">written</option>
		<option value="audio">audio</option>
		<option value="video">video</option>
		</select><br />
			Link <input type="text" name="storyLink" value="'.$row['storyLink'].'" /><br />
			Keywords <input type="text" name="storyKeywords" value="'.$row['storyKeywords'].'" /><br />
			Description <input type="text" name="storyDescription" value="'.$row['storyDescription'].'" /><br />
			<input type="submit" value="Update" />
		  </form>';
	echo '<h5>To remove the story from db, click here</h5>';
	echo '<p><form action="index.php?page=removestory" method="post">';
    echo '<input type="hidden" name="storyID" value="'.$storyID.'" />';
	echo '<input type="submit" value="Remove story from database" />';
    echo '</form></p>';	
}else echo '<h4>No record found</h4>';
?>