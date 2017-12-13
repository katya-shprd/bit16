<?php
/*
		file: 	ourstories_example/admin/users.php
		desc:	Displays the list of users in db
*/
if(!empty($_GET['start'])) $start=$_GET['start'];else $start=0;
$nr_of_records=3;
if($start==0) $prev=$start;else $prev=$start-$nr_of_records;
include('../db.php');
$sql="SELECT count(*) as NrOfRecords FROM user";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$TotalRecords=$row['NrOfRecords'];
$sql="SELECT level FROM user WHERE userID=".$_SESSION['userID'];
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	if($row['level']=='admin') $admin=true;else $admin=false;
}
?>
<h4>Users</h4>
<p>Here are the users. Every user can edit their own data. Admins can edit everyones data.</p>
<p><a href="index.php?page=userFrm">Add user <span class="glyphicon glyphicon-plus"></span></a></p>
<table class="table table-striped">
	<thead>
		<tr>
			<th>UserID</th><th>Email</th><th>Firstname</th><th>Lastname</th><th>Phone</th><th>Level</th><th>Image</th><th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			$sql="SELECT * FROM user ORDER BY lastname, firstname LIMIT $start,$nr_of_records";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){
				echo '<tr>';
				echo '<td>'.$row['userID'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['firstname'].'</td>';
				echo '<td>'.$row['lastname'].'</td>';
				echo '<td>'.$row['phone'].'</td>';
				echo '<td>'.$row['level'].'</td>';
				echo '<td><img src="./images/'.$row['image'].'"  class="media-object" style="width:50px" /></td>';
				if($admin OR(!$admin AND $_SESSION['userID']==$row['userID'] )){
					echo '<td><a href="index.php?page=editUser&userID='.$row['userID'].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
				}				
				echo '</tr>';
			}
			$conn->close();
		?>
	</tbody>
</table>
<ul class="pager">
<?php
	if($start==0){
		echo '<li>Previous </li>';
	}else{
?>
  <li><a href="index.php?page=users&start=<?php echo $prev?>">Previous</a></li>
<?php
	}
	$lastrecordnow=$start+$nr_of_records;
	if($lastrecordnow<$TotalRecords){
?>
  <li><a href="index.php?page=users&start=<?php echo $start+$nr_of_records?>">Next</a></li>
<?php
	}else echo '<li> Next</li>';
?></ul>