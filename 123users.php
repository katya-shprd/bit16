<?php
/*
	file:	users.php
	desc:	Lists all users in users-table
*/
if(!empty($_POST['keyword'])) $keyword=$_POST['keyword'];else $keyword='';
$keyword.='%%';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List of users</title>
	</head>
	<body>
		<h3>Users</h3>
		<form action="login.php" method="post">
			Username<input type="text" name="username" />
			Password<input type="password" name="password" />
			<input type="submit" value="Login" />
		</form>
		<h4>List of users</h4>
		<p>
			<form action="users.php" method="post">
			Search <input type="text" name="keyword" placeholder="Search" />
			<input type="submit" value="Search" />
			</form>
		</p>
		<?php
		echo '<table><tr><th>ID#</th><th>Lastname</th><th>Firstname</th>';
		echo '<th>Phone</th><th>Email</th><th>Level</th></tr>';
		include('db.php'); //use the database connection
		$sql = "SELECT userID,firstname,lastname,email,phone,level
				FROM user 
				WHERE firstname LIKE '$keyword' OR 
				lastname LIKE '$keyword'
				ORDER BY lastname,firstname";
		$result=$conn->query($sql);  //runs the query in database
		while($row=$result->fetch_assoc()){
			echo '<tr>';
			echo '<td>'.$row['userID'].'</td>';
			echo '<td>'.$row['lastname'].'</td>';
			echo '<td>'.$row['firstname'].'</td>';
			echo '<td>'.$row['email, '].'</td>';
			echo '<td>'.$row['phone'].'</td>';
			echo '<td>'.$row['level'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
	</body>
</html>