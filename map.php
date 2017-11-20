<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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