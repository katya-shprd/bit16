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
		echo '<th>Date_of_birth</th><th>Country</th><th>Email</th><th>Score</th></tr>';
		include('db.php'); //use the database connection
		$sql = "SELECT User_ID,Firstname,Lastname,Date_of_birth,Country,Email,Score
				FROM Users 
				WHERE Firstname LIKE '$keyword' OR 
				Lastname LIKE '$keyword'
				ORDER BY Lastname,Firstname";
		$result=$conn->query($sql);  //runs the query in database
		while($row=$result->fetch_assoc()){
			echo '<tr>';
			echo '<td>'.$row['User_ID'].'</td>';
			echo '<td>'.$row['Lastname'].'</td>';
			echo '<td>'.$row['Firstname'].'</td>';
			echo '<td>'.$row['Date_of_birth, '].'</td>';
			echo '<td>'.$row['Country'].'</td>';
			echo '<td>'.$row['Email'].'</td>';
			echo '<td>'.$row['Score'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
	</body>
</html>