<?php
/*
	file:	ourstories_example/admin/editStory.php
	desc:	Form to edit story
*/
if(!empty($_GET['storyID'])) $storyID=$_GET['storyID'];else $storyID=0;
include('../db.php');
$sql="SELECT * FROM story WHERE storyID=$storyID";
$result=$conn->query($sql);  //runs the query in database
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit story data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<div class="row"><div class="col-sm-6 well"><form action="updatestory.php" method="post">
			<input type="hidden" name="storyID" value="'.$storyID.'" />
			Story Title <input type="text" name="storyTitle" value="'.$row['storyTitle'].'" /><br />
			Story type <select name="storyType">
			<option value="'.$row['storyType'].'">'.$row['storyType'].'</option>
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

 </div>
 <div class="col-sm-6 well" >
 <h5>Link companies to selected story</h5>
	<form action="linkStoryToCompany.php" method="post">
	 <input type="hidden" name="storyID" value="<?php echo $storyID?>" />
	 <div class="form-group">
		<label for="company">Link this story to company:</label>
		<select class="form-control" id="company" name="company">
				<option value="">-Select company-</option>
				<?php
				 $sql="SELECT * FROM company 
						WHERE companyID NOT 
						IN(SELECT companyID FROM companystory WHERE storyID=$storyID)
						ORDER BY city,companyName";
				 $result=$conn->query($sql);
				 while($row=$result->fetch_assoc()){
					 echo '<option value="'.$row['companyID'].'">'.$row['companyName'].' '.$row['city'].' '.$row['street'].'</option>';
				 }
				?>
		</select>
	 </div>
	 <button type="submit" class="btn btn-default">Link to story</button>
	</form>
	<p></p>
	
	<h5>Commpanys linked to this story</h5>
	<ul class="list-group"></ul>
	<?php
	$sql="SELECT * FROM company
			INNER JOIN companystory ON company.companyID=companystory.companyID
			INNER JOIN story ON companystory.storyID=story.storyID
			WHERE companystory.storyID=$storyID";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){
		echo '<li class="list-group-item">';
		echo '<a href="unLinkStoryFromCompany.php?companyID='.$row['companyID'].'&storyID='.$storyID.'"><span class="glyphicon glyphicon-remove"></span></a> ';
		echo $row['companyName'].', '.$row['city'];
		echo '</li>';
	}
	?>

	<h5>Link community to selected story</h5>
	<form action="linkStoryToArea.php" method="post">
	 <input type="hidden" name="storyID" value="<?php echo $storyID?>" />
	 <div class="form-group">
		<label for="area">Link this story to community:</label>
		<select class="form-control" id="area" name="area">
				<option value="">-Select community-</option>
				<?php
				 $sql="SELECT * FROM community 
						WHERE communityID NOT 
						IN(SELECT communityID FROM storyarea WHERE storyID=$storyID)
						ORDER BY country,communityName";
				 $result=$conn->query($sql);
				 while($row=$result->fetch_assoc()){
					 echo '<option value="'.$row['communityID'].'">'.$row['communityName'].' '.$row['country'].'</option>';
				 }
				?>
		</select>
	 </div>
	 <button type="submit" class="btn btn-default">Link to area</button>
	</form>
	<p></p>
	<div class="well">
	<h5>Communities linked to this story</h5>
	<ul class="list-group">
	<?php
	$sql="SELECT * FROM community
			INNER JOIN storyarea
			ON community.communityID=storyarea.communityID
			WHERE storyarea.storyID=$storyID";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){
		echo '<li class="list-group-item">';
		echo '<a href="unLinkStoryFromArea.php?communityID='.$row['communityID'].'&storyID='.$storyID.'"><span class="glyphicon glyphicon-remove"></span></a> ';
		echo $row['communityName'].', '.$row['country'];
		echo '</li>';
	}
	$conn->close();
	?>
	</ul>
	</div>
	</div>