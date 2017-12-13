<?php
/*
	file:	admin/editcompany.php
	desc:	Displays a form where company with given id can be edited
*/
if(!empty($_GET['companyID'])) $companyID=$_GET['companyID'];else $companyID=0;
include('../db.php');
$sql="SELECT * FROM company WHERE companyID=$companyID";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit company data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<h4>Edit Company</h4><div class="row"><div class="col-sm-6 well"><form action="updatecompany.php" method="post">
			<input type="hidden" name="companyID" value="'.$companyID.'" />
			Company name <input type="text" name="companyName" value="'.$row['companyName'].'" /><br />
			Street <input type="text" name="street" value="'.$row['street'].'" /><br />
			Post number <input type="text" name="postnr" value="'.$row['postnr'].'" /><br />
			City <input type="text" name="city" value="'.$row['city'].'" /><br />
			Description <input type="text" name="description" value="'.$row['description'].'" /><br />
			Website <input type="text" name="website" value="'.$row['website'].'" /><br />
			Facebook <input type="text" name="facebook" value="'.$row['facebook'].'" /><br />
			<input type="submit" value="Update" />
		  </form>';
	echo '<h5>To remove the company from db, click here</h5>';
	echo '<p><form action="index.php?page=removecompany" method="post">';
    echo '<input type="hidden" name="companyID" value="'.$companyID.'" />';
	echo '<input type="submit" value="Remove company from database" />';
    echo '</form></p>';	
}else echo '<h4>No record found</h4>';
?>
	<h5>Edit company information</h5>
  </div>
  <div class="col-sm-6 well">
	<h5>Connect company to different communities in the area</h5>
	<form action="linkCompanyToArea.php" method="post">
	 <input type="hidden" name="companyID" value="<?php echo $companyID?>" />
	 <div class="form-group">
		<label for="area">Connect this company to community:</label>
		<select class="form-control" id="area" name="area">
				<option value="">-Select community-</option>
				<?php
				 $sql="SELECT * FROM community 
						WHERE communityID NOT 
						IN(SELECT communityID FROM companyarea WHERE companyID=$companyID)
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
	<h5>Communities linked to this company</h5>
	<ul class="list-group">
	<?php
	$sql="SELECT * FROM community
			INNER JOIN companyarea
			ON community.communityID=companyarea.communityID
			WHERE companyarea.companyID=$companyID";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){
		echo '<li class="list-group-item">';
		echo '<a href="unLinkCompanyFromArea.php?communityID='.$row['communityID'].'&companyID='.$companyID.'"><span class="glyphicon glyphicon-remove"></span></a> ';
		echo $row['communityName'].', '.$row['country'];
		echo '</li>';
	}
	$conn->close();
	?>
	</ul>
	</div>
  </div>
</div>
