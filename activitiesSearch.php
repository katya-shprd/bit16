<?php
/*
	file:	activitiesSearch.php
	desc:	Returns the list of activities as JSON
*/
header("Access-Control-Allow-Origin: * "); //all the UIs can access
if(!empty($_GET['search'])) $search=$_GET['search'].'%%';else $search='';
include('db.php');
$sql="SELECT DISTINCT * FROM activity
	RIGHT JOIN area_activity
	ON activity.activityID=area_activity.activityID
	JOIN community
	ON area_activity.communityID=community.communityID
	WHERE community.communityName LIKE '$search' OR activity.activityKeyword LIKE '$search'";
$result = $conn->query($sql);
$output=array();
while($row=$result->fetch_assoc()){
	$output[]=$row;
}
if(!empty($search)) echo json_encode($output);
?>