<?php
/*
	file:	admin/removecompany.php
	desc:	Reads the companyID coming with post. Retrieves companyID
			from company table and shows data. Asks for confirmation
			to remove the data from db
*/
if(!empty($_POST['companyID'])){
	$companyID=$_POST['companyID'];
	include('../db.php');
	$sql="SELECT * FROM company WHERE companyID=$companyID";
	$result=$conn->query($sql);  //runs the query in database
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		echo '<h3>Confirm the removal of this record</h3>';
		echo '<p>Do your really want to remove this company from db:</p>';
		echo '<p>'.$row['companyName'].' in '.$row['city'].'</p>';
		echo '<p><a href="deletecompany.php?companyID='.$companyID.'">Yes, I am sure!</a> / <a href="index.php?page=editcompany&companyID='.$companyID.'">No. Go back to edit</a>';
	}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
}else echo '<h3 class="alert alert-danger">Could not find the record from db</h3>';
?>