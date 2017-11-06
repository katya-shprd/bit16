<?php
/*
	file:	admin/insertuser.php
	desc:	Reads form fields coming lastname, firstname, email
			phine and level. Inserts them into table user in db
*/
if(empty($_POST)) header('location:index.php');
include('../db.php');
$error=false;
if(!empty($_POST['firstname'])) $firstname=$_POST['firstname'];else $error=true;
if(!empty($_POST['lastname'])) $lastname=$_POST['lastname'];else $error=true;
if(!empty($_POST['phone'])) $phone=$_POST['phone'];else $error=true;
if(!empty($_POST['email'])) $email=$_POST['email'];else $error=true;
if(!empty($_POST['password'])) $password=$_POST['password'];else $error=true;
if(!empty($_POST['level'])) $level=$_POST['level'];else $level=0;
if(!$error){
	//here i could check that same values do not exist
	$sql="SELECT * FROM user WHERE firstname='$firstname' AND lastname='$lastname' AND email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		//already in database, do not insert!
		header('location:index.php?page=users');
	}else{
	 //insert into database
	 $sql="INSERT INTO user(firstname,lastname,phone,email,password,level)
		 VALUES('$firstname','$lastname','$phone','$email','$password','$level')";
	 $conn->query($sql);
	 //get the id of inserted record from auto-increment
	 $last_id=$conn->insert_id;
	}
}
$conn->close();
header('location:index.php?page=users');
?>