<?php
/*
	file:	companies.php
	desc:	Our Stories page
*/
if(!empty($_GET['page'])) $page=$_GET['page'];else $page='' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <!-- блок бутстрапов для таблицы -->
    <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 
  <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/hall.css">
      <link rel="stylesheet" href="css/stories.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/myscript.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



</head>

<body>

<?php include ("nav.html") ?> 

    <section>
            <div class="header">
                <div class="pic-header" id="stories-header">
                    <h1>COMPANIES<br>ACTIVITIES</h1>
                </div>
            </div>
    </section>
    

<section>
<div class="row">
  <div class="col-sm-4">
	<h5>Companies</h5>
	
	<p>
	Some examples of displaying results from database in html-page. PHP-scripts result JSON-data that is available for any
	user interface - like this HTML-page with jQuery. When the page is loaded, there will be the default listing of results
	on the right side here.
	</p>
	
	<p>
	Same listing in a <button id="cmpTable" type="button" class="btn btn-default">table format</button>.
	</p>
	<p>
	Search companies by communityname to see which companies operate
	on that area.
		<input type="text" id="search" />
	</p>
  </div>
  <div class="col-sm-8">
   <h5>Results from database</h5>
   <div id="results"></div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
	<h5>Activities</h5>
	
	<p>
	Some examples of displaying results from database in html-page. PHP-scripts result JSON-data that is available for any
	user interface - like this HTML-page with jQuery. When the page is loaded, there will be the default listing of results
	on the right side here.
	</p>
	
	<p>
	Same listing in a <button id="actTable" type="button" class="btn btn-default">table format</button>.
	</p>
	<p>
	Search companies by communityname to see which companies operate
	on that area.
		<input type="text" id="actsearch" />
	</p>
  </div>
  <div class="col-sm-8">
   <h5>Results from database</h5>
   <div id="activities"></div>
  </div>
</div>
</section>
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