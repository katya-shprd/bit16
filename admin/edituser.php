<?php
/*
	file:	admin/edituser.php
	desc:	Displays a form where user with given id can be edited
*/
if(!empty($_GET['userID'])) $userID=$_GET['userID'];else $userID=0;
include('../db.php');
$sql="SELECT * FROM user WHERE userID=$userID";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit user data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<form action="updateuser.php" method="post">
			<input type="hidden" name="userID" value="'.$userID.'" />
			Lastname <input type="text" name="lastname" value="'.$row['lastname'].'" /><br />
			Firstname <input type="text" name="firstname" value="'.$row['firstname'].'" /><br />
			Email <input type="email" name="email" value="'.$row['email'].'" /><br />
			Password <input type="text" name="password" value="'.$row['password'].'" /><br />
			Phone <input type="text" name="phone" value="'.$row['phone'].'" /><br />
			Level <select name="level">
						<option value="">-Select-</option>
					<option value="superadmin">superadmin</option>
					<option value="admin">admin</option>
					<option value="editor">editor</option>
					</select><br />
			<input type="submit" value="Update" />
		  </form>';
	echo '<h5>To remove the user from db, click here</h5>';
	echo '<p><form action="index.php?page=removeuser" method="post">';
    echo '<input type="hidden" name="userID" value="'.$userID.'" />';
	echo '<input type="submit" value="Remove user from database" />';
    echo '</form></p>';	
}else echo '<h4>No record found</h4>';
?>