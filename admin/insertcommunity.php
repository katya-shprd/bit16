<?php
/*
	file:	admin/insertcommunity.php
	desc:	Reads form fields coming community name, country 
	        and description. Inserts them into table community in db
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['communityName'])) $communityName=$_POST['communityName'];else $error=true;
if(!empty($_POST['country'])) $country=$_POST['country'];else $error=true;
if(!empty($_POST['description'])) $description=$_POST['description'];else $description=NULL;
if(!$error){
	//here i could check that same values do not exist
	$sql="SELECT * FROM community WHERE communityName='$communityName' AND country='$country'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//already in database, do not insert!
		header('location:index.php?page=communities');
	}else{
	 //insert into database
	 $sql="INSERT INTO community(communityName,country,description)
		 VALUES('$communityName','$country','$description')";
	 $conn->query($sql);
	 //get the id of inserted record from auto-increment
	 $last_id=$conn->insert_id;
	}
}
$conn->close();
header('location:index.php?page=communities');
?>