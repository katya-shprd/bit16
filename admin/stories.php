<?php
/*
	file:	admin/stories.php
	desc:	Displays the list of stories in story-table
			Link to a form for adding a new story
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
$sql="SELECT count(*) as NrOfRecords FROM story";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$TotalRecords=$row['NrOfRecords'];
?>
<h4>Stories</h4>
<a href="index.php?page=stories&mode=add">Add new story</a>
<p>* - required fields</p>

<?php
echo '<table class="table table-striped"><tr><th>ID#</th><th>Story title *</th><th>Type *</th>';
echo '<th>Link *</th><th>Keywords *</th><th>Description</th><th></th></tr>';
//if mode in url is add, display a form as first line in table
if($mode=='add'){
	echo '<form action="insertstory.php" method="post">
    <tr>
      <td></td>
      <td><input type="text" name="storyTitle" /></td>
      <td><select name="storyType">
	  <option value="">-Select-</option>
	  <option value="written">written</option>
	  <option value="audio">audio</option>
	  <option value="video">video</option>
	  </select></td>
      <td><input type="text" name="storyLink" /></td>
      <td><input type="text" name="storyKeywords" /></td>
	  <td><input type="text" name="storyDescription" /></td>
	  <td><input type="submit" value="Add" /></td>
    </tr>
    </form>';
}

$sql = "SELECT *
		FROM story 
		ORDER BY storyTitle
		LIMIT $start,$nr_of_records";
		
$result=$conn->query($sql);  //runs the query in database
while($row=$result->fetch_assoc()){
	echo '<tr>';
	echo '<td>'.$row['storyID'].'</td>';
	echo '<td>'.$row['storyTitle'].'</td>';
	echo '<td>'.$row['storyType'].'</td>';
	echo '<td>'.$row['storyLink'].'</td>';
    echo '<td>'.$row['storyKeywords'].'</td>';
	echo '<td>'.$row['storyDescription'].'</td>';
	echo '<td><a href="index.php?page=editstory&storyID='.$row['storyID'].'">Edit</a></td>';
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
  <li><a href="index.php?page=stories&start=<?php echo $prev?>">Previous</a></li>
<?php
	}
	//check if already in the last page
	$lastrecordnow=$start+$nr_of_records;
	if($lastrecordnow<$TotalRecords){
?>
  <li><a href="index.php?page=stories&start=<?php echo $start+$nr_of_records?>">Next</a></li>
<?php
	}else echo '<li> Next</li>';
?></ul>