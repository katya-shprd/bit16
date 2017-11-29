<!DOCTYPE html>
<?php
/*
	file:	map.php
	desc:	map
*/
if(!empty($_GET['page'])) $page=$_GET['page'];else $page='';
?>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="keywords" content="footer, address, phone, icons" />
	<link href="css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/hall.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    

		<title>Map</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<link href="css/mapstyle.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJyMRA0og8zyH1WiqCVTOjC6CBVfDrEak"></script>
		<script src="js/jquery.googlemap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/myapp.js"></script>

				<style>
					#map {height: 800px; width: 600px; }
				</style>
	</head>
	
	
	<body>

			<?php include ("nav.html") ?> 

			<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

	 <div class="pageContainer">
        <div class="addressContainer">
            <h1>OurStories</h1>
			<h2>Select area</h3>
			<form id="search">
				<select id="area">
					<option value=''>-Select-</option>
					<option value='TORNIO'>TORNIO</option>
					<option value='YLITORNIO'>YLITORNIO</option>
					<option value='PELLO'>PELLO</option>
					<option value='Tromsø'>Tromsø</option>
				</select>
				<input type="submit" value="Show" />
			</form>
        </div>
    
        <div class="embedContainer">
            <div class="googleMap">
				<h2>Map</h2>
				<div id="map"></div>
			</div>
        </div>
		
		
		
	  </div>
	  <?php include ("footer.html")?>
	</body>
</html>