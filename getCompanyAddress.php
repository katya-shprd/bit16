<?php
/*
	file:	getCompanyAddress.php
	desc:	Gets the company address from db
*/
if(!empty($_GET['area'])) $area=$_GET['area'].'%%';else $area='%%';
include('db.php');
$sql="SELECT Company_name,Company_address,Municipality,Company_website FROM Companies WHERE Municipality LIKE '$area'";
$result = $conn->query($sql);
$JSONstring='{"companies":[';

$x=0;
while($row = $result->fetch_assoc()) {
	$JSONstring.='{';
	$JSONstring.='"Companyname":';
	$JSONstring.='"'.$row['Company_name'].'",';
	$JSONstring.='"Address":';
	$JSONstring.='"'.$row['Company_address'].'",';
	$JSONstring.='"City":';
	$JSONstring.='"'.$row['Municipality'].'",';
	$JSONstring.='"Web":';
	$JSONstring.='"'.$row['Company_website'].'"';
	$x++;
	if($result->num_rows>$x) $JSONstring.='},';else $JSONstring.='}';
}
$conn->close();  

$JSONstring.=']}';
//return JSON
echo $JSONstring;
?>