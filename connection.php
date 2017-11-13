<?php
/*
	file: 	
	desc:	Web service returning the list of all wines, red wines or white wines in database
			Result is returned as XML
			Web service is available for all the users -> header
*/
//access control
header("Access-Control-Allow-Origin: * ");  //anybody, anywhere can access

//read the GET-field(s) from web service call
if(!empty($_GET['city'])) $city=$_GET['city']; else $city='all';


//database connection
include('db.php');

//character set changed to display all the characters
$conn->set_charset("utf8");

//sql-query
if($city=='all') $sql="select * from company order by companyName";
else $sql="select * from company where city='$city' order by companyName";
$result=$conn->query($sql);

$output=array();
while($row=$result->fetch_assoc()) {
	$output[]=$row;
}
echo json_encode($output);
/*create xml as a string
$companyXML='<?xml version="1.0" encoding="utf-8"?>';
$companyXML.='<companylist>';
if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		$companyXML.='<company>';
		$companyXML.='<companyID>'.$row['companyID'].'</companyID>';
		$companyXML.='<companyName>'.$row['companyName'].'</companyName>';
		$companyXML.='<street>'.$row['street'].'</street>';
		$companyXML.='<postnr>'.$row['postnr'].'</postnr>';
		$companyXML.='<city>'.$row['city'].'</city>';
		$companyXML.='<description>'.$row['description'].'</description>';
		$companyXML.='<website>'.$row['website'].'</website>';
		$companyXML.='<facebook>'.$row['facebook'].'</facebook>';
		$companyXML.='</company>';
	}
}
//return XML string
$companyXML.='</companylist>';
echo $companyXML;*/
$conn->close();
?>
