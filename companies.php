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
 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<div >
<button id="comp">Companies</button>
<button id="act">Activities</button>

<section id="complist" class="content">
<h5>Companies</h5>
<p>
Find company by community name.
<div class="col-3">
<input type="text" id="compSearch" />
</div>
</p>
<table class="table table-condensed">
<thead>
<tr>
<th>#</th><th>Company</th><th>Address</th><th>About</th><th>Website</th><th>Facebook</th>
</tr>
</thead>
<tbody id="compResults">
</tbody>
</table></section>
</div>
<div >
<section id="actlist" class="content">    
<h5>Activities</h5>
<p>
Find activity by keyword.
<div class="col-3">
    <input type="text" id="actSearch" />
</div>
</p>
<table class="table table-condensed">
<thead>
<tr>
<th>#</th><th>Activity</th><th>Keyword</th><th>Description</th>
</tr>
</thead>
<tbody id="actResults">
</tbody>
</table>
</section>
</div>
</section>

<?php include ("footer.html")?>
</body>
</html>