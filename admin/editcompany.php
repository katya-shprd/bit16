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
	echo '<form action="updatecompany.php" method="post">
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