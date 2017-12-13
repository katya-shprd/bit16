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
  <!-- блок бутстрапов для таблицы -->
    <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/myscript.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>

<?php include ("nav.html") ?> 

<section>
<div class="header">
    <div class="pic-header col" id="companies-header">
        <h1 class="centered">FIND ACTIVITIES</h1>
        <div class="col-6 centered"><p class="description-2">Browse companies and activities they offer. Just type city or company in the field bellow and you will see the list of avalible activities near by </p></div>
    </div>
</div>
</section>

<section>
    <div class="col-6 centered">
    <input type="submit" value="Companies" id="comp"/>
    <input type="submit" value="Activities" id="act"/>
    </div>
</section>

<section>
    <div class="col-6 col centered">
    <h3>Companies</h3>
    <p>Find company by community name
        <div class="col-3">
            <input type="text" id="compSearch"/>
        </div>
    </p>
    </div>
    <table class="table table-condensed">
        <thead>
            <tr>
            <th>#</th><th>Company</th><th>Address</th><th>About</th><th>Website</th><th>Facebook</th>
            </tr>
        </thead>
        <tbody id="compResults"></tbody>
    </table>
</section>


<section>
    <div class="col-6 col centered">    
    <h3>Activities</h3>
    <p>Find activity by keyword
        <div class="col-3">
            <input type="text" id="actSearch" />
        </div>
    </p>
    </div>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>#</th><th>Activity</th><th>Keyword</th><th>Description</th>
            </tr>
        </thead>
        <tbody id="actResults"></tbody>
    </table>
</section>

<?php include ("footer.html")?>

</body>
</html>