<?php
/*
	file:	admin/insertcompany.php
	desc:	Reads form fields coming company name, street, postnr, city,
			description, website and facebook. Inserts them into table company in db
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['companyName'])) $companyName=$_POST['companyName'];else $error=true;
if(!empty($_POST['street'])) $street=$_POST['street'];else $error=true;
if(!empty($_POST['postnr'])) $postnr=$_POST['postnr'];else $error=true;
if(!empty($_POST['city'])) $city=$_POST['city'];else $error=true;
if(!empty($_POST['description'])) $description=$_POST['description'];else $description=NULL;
if(!empty($_POST['website'])) $website=$_POST['website'];else $website=NULL;
if(!empty($_POST['facebook'])) $facebook=$_POST['facebook'];else $facebook=NULL;
if(!$error){
	//here i could check that same values do not exist
	$sql="SELECT * FROM company WHERE companyName='$companyName' AND street='$street' AND city='$city'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//already in database, do not insert!
		header('location:index.php?page=companies');
	}else{
	 //insert into database
	 $sql="INSERT INTO company(companyName,street,postnr,city,description,website,facebook)
		 VALUES('$companyName','$street','$postnr','$city','$description','$website','$facebook')";
	 $conn->query($sql);
	 //get the id of inserted record from auto-increment
	 $last_id=$conn->insert_id;
	}
}
$conn->close();
header('location:index.php?page=companies');
?>