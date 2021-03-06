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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/puritym/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/myscript.js"></script>
    <script src="js/login.js"></script>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<?php include ("nav.html") ?> 

<section style="margin-bottom: 15em">
<div class="header">
    <div class="pic-header col" id="stories-header">
        <h1 class="centered">OUR STORIES</h1>
        <div class="col-6 centered"><p class="description-2" id="desc-resp">View, listen or read stories from Northern Lights Route. Type name of the story and choose the type or just scroll down and see the list of all avalible stories </p></div>
    </div>
</div>
</section>
 
<section>  
        <div class="col-6 centered col">
            <span class="heading-1">Search stories</span>
                <div class="col-3">
                    <input type="text" id="searchstory">
                </div>
        </div>
        <div class="col-6 centered">
        <label for="type" class="col">Select type</label>
                <select id="type">
                    <option value="">-All-</option>
                    <option value="video">Video</option>
                    <option value="audio">Audio</option>
                    <option value="written">Text</option>
                    <br>
                </select>
        </div>
        </div>
<br>
<table class="table table-stripped">
 <thead>
	<tr>
		<th>Story Title</th><th>Story Type</th><th>Keywords</th><th>Link</th><th></th>
	</tr>
 </thead>
 <tbody id="stories">
 </tbody>
</table>
<div id="showStory" class="modal fade" role="dialog">
 <div class="modal-dialog">
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
	</div>
  </div>
</div>
</section>
<div class="col-6">
<span class="heading-2">Share your own story</span>
</div>
<br>
<div class="col-6 centered">
<?php include ("stories-form.php")?>
</div>

<?php include ("footer.html")?>

</body>
</html>