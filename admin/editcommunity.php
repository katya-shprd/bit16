<?php
/*
	file:	admin/editcommunity.php
	desc:	Displays a form where community with given id can be edited
*/
if(!empty($_GET['communityID'])) $communityID=$_GET['communityID'];else $communityID=0;
include('../db.php');
$sql="SELECT * FROM community WHERE communityID=$communityID";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit community data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<form action="updatecommunity.php" method="post">
	        <input type="hidden" name="communityID" value="'.$communityID.'" />
	        Community name <input type="text" name="communityName" value="'.$row['communityName'].'" /><br />	
			Country <select name="country">
			<option value="'.$row['country'].'">'.$row['country'].'</option>
		<option value="Finland">Finland</option>
		<option value="Norway">Norway</option>
		<option value="Sweden">Sweden</option>
		</select><br />
			Description <input type="text" name="description" value="'.$row['description'].'" /><br />
			<input type="submit" value="Update" />
		  </form>';
	echo '<h5>To remove the community from db, click here</h5>';
	echo '<p><form action="index.php?page=removecommunity" method="post">';
    echo '<input type="hidden" name="communityID" value="'.$communityID.'" />';
	echo '<input type="submit" value="Remove community from database" />';
    echo '</form></p>';	
}else echo '<h4>No record found</h4>';
?>