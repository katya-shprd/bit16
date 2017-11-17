<?php
/*
	file:	activitiesDefault.php
	desc:	Returns the list of activities as JSON
*/
header("Access-Control-Allow-Origin: * ");
if(!empty($_GET['search'])) $search=$_GET['search'];else $search='%%';
include('db.php');
$sql="SELECT * FROM activity ";
$sql.="WHERE (activityName LIKE '%%$search%%' OR activityKeyword LIKE '%%$search%%') ";
$sql.=" ORDER BY activityName";
$result = $conn->query($sql);
$output=array();
while($row=$result->fetch_assoc()){
	$output[]=$row;
}
echo json_encode($output);
?>