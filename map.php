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
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script src="js/myRoute.js"></script>

				<style>
					#map {height: 800px; width: 900px; }
				</style>
	</head>


	<body>

			<?php include ("nav.html") ?>

<section>
            <div class="header">
                <div class="pic-header" id="map-header">
                    <h1>MAP</h1>
                </div>
            </div>


    </section>

	<div class="col-6 centered">
			<span class="heading-1">Please, select area</span>
	</div>

			<form id="search">
				<select id="area">

						<option value=''>-Select-</option>
						<option value='Tornio'>Tornio</option>
						<option value='Haparanda'>Haparanda</option>
						<option value='Ylitornio'>Ylitornio</option>
						<option value='Övertorneå'>Övertorneå</option>
						<option value='Pello'>Pello</option>
						<option value='Kolari'>Kolari</option>
						<option value='Pajala'>Pajala</option>
						<option value='Kiruna'>Kiruna</option>
						<option value='Muonio'>Muonio</option>
						<option value='Enontekiö'>Enontekiö</option>
						<option value='Storfjord'>Storfjord</option>
						<option value='Kautokeino'>Kautokeino</option>
						<option value='Kåfjord'>Kåfjord</option>
						<option value='Nordreisa'>Nordreisa</option>
						<option value='Tromsø'>Tromsø</option>

				</select>
				<input type="submit" id="map-button" value="Show" />
			</form>
        </div>

        <div class="embedContainer">
            <div class="googleMap">
				<div id="map"></div>
			</div>
        </div>



	  </div>

	  <?php include ("footer.html")?>

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

	</body>
</html>
