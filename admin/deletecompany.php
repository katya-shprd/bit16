<?php
/*
	file:	admin/deletecompany.php
	desc:	Reads companyID from company-list and deletes that record
			from database table company. 
*/
if(!empty($_GET['companyID'])) $companyID=$_GET['companyID'];
else header('location:index.php?page=');
include('../db.php');
$sql="DELETE FROM company WHERE companyID=$companyID";
$conn->query($sql);
header('location:index.php?page=companies');
?>