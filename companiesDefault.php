<?php
/*
	file:	companiesDefault.php
	desc:	Returns the list of companies as JSON
*/
header("Access-Control-Allow-Origin: * "); //all the UIs can access
if(!empty($_GET['search'])) $search=$_GET['search'];else $search='%%';
include('db.php');
$sql="SELECT * FROM company ";
$sql.="WHERE (companyName LIKE '%%$search%%' OR city LIKE '%%$search%%') ";
$sql.=" ORDER BY companyName";
$result = $conn->query($sql);
$output=array();
while($row=$result->fetch_assoc()){
	$output[]=$row;
}
echo json_encode($output);
?>