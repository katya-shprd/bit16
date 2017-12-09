<?php
/*
	file:	stories.php
	desc:	Our Stories page
*/
if(!empty($_GET['page'])) $page=$_GET['page'];else $page='';
?><!DOCTYPE html>
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
                    <h1>Our Stories</h1>
                </div>
            </div>
    
     
    </section>
    
 

    <div class="col-6">
        <h3>Stories</h3>
        <div class="form-group row">

        <label for="searchstory">Search stories</label>
        <div class="col-3">
            
        <input type="text" id="searchstory">
        <div>
        <label for="type">Select type</label>
        <select id="type">
            <option value="">-All-</option>
            <option value="video">Video</option>
            <option value="audio">Audio</option>
            <option value="written">Text</option>
        </select>
        </div>
</div>
        </div>
    </div>


<table class="table table-stripped">
 <thead>
	<tr>
		<th>Story Title</th><th>Story Type</th><th>Link</th>
	</tr>
 </thead>
 <tbody id="stories">
 </tbody>
</table>

<div id="showStory" class="modal fade" role="dialog">
 <div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Story</h4>
		</div>
		<div class="modal-body">
			<h3 id="storyTitle"></h3>
			<p id="storyDescription"></p>
			<p id="storyLink"></p>
			
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>
  </div>
</div>

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
<?php include ("footer.html")?>


</body>
</html>