<?php
/*
	file:	login.php
	desc:	Checks the email and password from db table user.
			If they are ok, saves session-information and redirects
			to go to admin-folder
*/
if(empty($_POST)) header('location:index.php');
$error=false;
if(!empty($_POST['Email'])) $email=$_POST['Email'];else $error=true;
if(!empty($_POST['Password'])) $password=$_POST['Password'];else $error=true;
if(!$error){
	include('db.php');
	$email=$conn->real_escape_string($email);
	$password=$conn->real_escape_string($password);
	$sql = "SELECT Email,Password,User_ID,Firstname,Lastname FROM Users
			WHERE Email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		if(password_verify($password,$row['Password'])){
			session_start();
			$_SESSION['User_ID']=$row['User_ID'];
			$_SESSION['name']=$row['Firstname'].' '.$row['Lastname'];
			echo '{"Status":"OK"}';
		} else echo '{"Status":"Password did not match"}';
	} else echo '{"Status":"Email not found"}';
} else echo '{"Status":"Something went wrong"}';
?>