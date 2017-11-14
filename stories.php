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
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/hall.css">
      <link rel="stylesheet" href="css/stories.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



</head>

<body>

<div id="container">
<div id="myTopnav" class="menu">
<ul class="topnav">
    <a href="index.php">HOME</a>
    <a href="map.html">MAP</a>
    <a href="stories.php">OUR STORIES</a>
    <a href="hall.php">HALL OF FAME</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    <li class="right"><a href="#about">REGISTER</a></li>
    <li class="right" id="login">
        <a id="login-trigger" href="#">SIGN IN <span>&#x25BC;</span></a>
        <div id="login-content">
                    <form action="login.php" method="post">
                        <fieldset id="inputs">
                            <input id="email" type="email" name="email" placeholder="Your email" required>
                            <input id="password" type="password" name="password" placeholder="Your password" required>
                        </fieldset>
                        <fieldset id="actions">
                            <input type="submit" id="submit" value="Sign in">
                            <label><input type="checkbox" checked="checked">Remember me</label>
                        </fieldset>
                    </form>
        </div>
    </li>

</ul></div>
</div>
    <section>
            <div class="header">
                <div class="pic-header" id="stories-header">
                    <h1>Our Stories</h1>
                </div>
            </div>
    
     
    </section>
    
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