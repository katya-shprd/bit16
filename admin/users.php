<?php
/*
	file:	admin/users.php
	desc:	Displays the list of users in user-table
			Link to a form for adding a new user
			Edit and Delete -links
*/
if(!empty($_GET['mode'])) $mode=$_GET['mode'];else $mode='';
//variables used in pager: $start and $nr_of_records defined here
if(!empty($_GET['start'])) $start=$_GET['start'];else $start=0;
$nr_of_records=5;  //display 5 records at list on every page
//checkin, if on the firs page, start is always zero - even in previous
if($start==0) $prev=$start;else $prev=$start-$nr_of_records;
include('../db.php'); //use the database connection from parent folder
//check the number of records from database table person
$sql="SELECT count(*) as NrOfRecords FROM user";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$TotalRecords=$row['NrOfRecords'];
?>
<h4>Users</h4>
<a href="index.php?page=users&mode=add">Add new user</a>
<p>* - required fields</p>

<?php
echo '<table class="table table-striped"><tr><th>ID#</th><th>Email *</th><th>Password *</th>';
echo '<th>Firstname *</th><th>Lastname *</th><th>Phone *</th><th>Level *</th><th></th></tr>';
//if mode in url is add, display a form as first line in table
if($mode=='add'){
	echo '<form action="insertuser.php" method="post">
		  <tr>
			<td></td>
			<td><input type="email" name="email" /></td>
			<td><input type="text" name="password" /></td>
			<td><input type="text" name="firstname" /></td>
			<td><input type="text" name="lastname" /></td>
			<td><input type="text" name="phone" /></td>
			<td><select name="level">
					<option value="">-Select-</option>
					<option value="superadmin">superadmin</option>
					<option value="admin">admin</option>
					<option value="editor">editor</option>
					</select>
			</td>
			<td><input type="submit" value="Add" /></td>
		  </tr>
		  </form>';
}

$sql = "SELECT *
		FROM user 
		ORDER BY lastname,firstname
		LIMIT $start,$nr_of_records";
		
$result=$conn->query($sql);  //runs the query in database
while($row=$result->fetch_assoc()){
	echo '<tr>';
	echo '<td>'.$row['userID'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['password'].'</td>';
	echo '<td>'.$row['firstname'].'</td>';
	echo '<td>'.$row['lastname'].'</td>';
	echo '<td>'.$row['phone'].'</td>';
	echo '<td>'.$row['level'].'</td>';
	echo '<td><a href="index.php?page=edituser&userID='.$row['userID'].'">Edit</a></td>';
	echo '</tr>';
}
echo '</table>';
$conn->close(); //close the connection - removed from server memory

?>
<ul class="pager">
<?php
	//check if in the first page
	if($start==0){
		echo '<li>Previous </li>';
	}else{
?>
  <li><a href="index.php?page=users&start=<?php echo $prev?>">Previous</a></li>
<?php
	}
	//check if already in the last page
	$lastrecordnow=$start+$nr_of_records;
	if($lastrecordnow<$TotalRecords){
?>
  <li><a href="index.php?page=users&start=<?php echo $start+$nr_of_records?>">Next</a></li>
<?php
	}else echo '<li> Next</li>';
?></ul>
