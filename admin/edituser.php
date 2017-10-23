<?php
/*
	file:	admin/edituser.php
	desc:	Displays a form where user with given id can be edited
*/
if(!empty($_GET['User_ID'])) $User_ID=$_GET['User_ID'];else $User_ID=0;
include('../db.php');
$sql="SELECT User_ID FROM Users WHERE User_ID=$User_ID";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	echo '<h4>Edit user data</h3>';
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		$_SESSION['msg']='';
	}
	echo '<form action="updateuser.php" method="post">
			<input type="hidden" name="User_ID" value="'.$User_ID.'" />
			Lastname <input type="text" name="lastname" value="'.$row['lastname'].'" /><br />
			Firstname <input type="text" name="firstname" value="'.$row['firstname'].'" /><br />
			Email <input type="Email" name="Email" value="'.$row['Email'].'" /><br />
			Password <input type="text" name="password" value="'.$row['password'].'" /><br />
			Login <input type="text" name="Login" value="'.$row['Login'].'" /><br />
			Date_of_birth <input type="text" name="Date_of_birth" value="'.$row['Date_of_birth'].'" /><br />
			Score <input type="number" name="Score" value="'.$row['Score'].'" /><br />
			Country <select name="Country">
						<option value="">-Select-</option>';
					$sql="SELECT User_ID,Country FROM Users
						  ORDER BY Country";
					$result=$conn->query($sql);
					while($row1=$result->fetch_assoc()){
						echo '<option value="'.$row1['User_ID'].'"';
						if($row1['User_ID']==$row['User_ID']) echo ' selected ';
						echo '>'.$row1['Country'].'</option>';
					}
	echo '				</select><br />
			<input type="submit" value="Update" />
		  </form>';
	echo '<h5>To remove the user from db, click here</h5>';
	echo '<p><form action="index.php?page=removeuser" method="post">';
    echo '<input type="hidden" name="User_ID" value="'.$User_ID.'" />';
	echo '<input type="submit" value="Remove user from database" />';
    echo '</form></p>';	
}else echo '<h4>No record found</h4>';
?>