<?php
/*
	file:	logout.php
	desc:	Destroys session variables, and heads to index.php
*/
session_start();
session_destroy();
header('location:../index.php');
?>