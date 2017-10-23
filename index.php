<?php
/*
	file:	index.php
	desc:	Main page
*/
if(!empty($_GET['page'])) $page=$_GET['page'];else $page='';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



</head>

<body>

        <div id="menu">
        <ul class="topnav">

            <li><a href="#home">HALL OF FAME</a></li>
            <li><a href="#news">MAP</a></li>
            <li><a href="#contact">NORTHERN LIGHTS ROUTE</a></li>
            <li><a href="#contact">OUR STORIES</a></li>
            <li class="right" id="signup"><a href="#about">REGISTER</a></li>
            <li class="right" id="login"><a id="login-trigger" href="#">SIGN IN <span>&#x25BC;</span></a>
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
<div id="container">
   <section>
    <div class="header">
        <div class="pic-header">
            <img class="pic" src="images/header.png" alt="lights">
        </div>
    </section>
        <!-- карточки -->
        <section>
            <div class="container">
                <div class="row">

                    <div class="card">
                        <img id="country-pic" src="images/norway.png" alt="norway">
                        <h4>NORWAY</h4>
                        <p id="CA">CITIES <span class="activities">ACTIVITIES</span></p>
                        <p id="number">9 <span class="num">11</span></p>

                    </div>

                    <div class="card" id="finland">
                        <img id="finland-pic" src="images/finland.png" alt="finland">
                        <h4>FINLAND</h4>
                        <p id="fin">CITIES <span class="activities1">ACTIVITIES</span></p>
                        <p id="number1">12 <span class="num1">12</span></p>

                    </div>

                    <div class="card">
                        <img id="country-pic" src="images/sweden.png" alt="sweden">
                        <h4>SWEDEN</h4>
                        <p id="CA">CITIES <span class="activities">ACTIVITIES</span></p>
                        <p id="number2">13 <span class="num2">17</span></p>
                    </div>

                </div>
            </div>
    </section>

    <section>
<div class="idea">
  <img src="images/route.png" align="right" width="350px" height="230px">
  <p class="descr">
      The Northern Lights Route offers a great experience for<br>
      You to travel through northern countries and<br>
      see a unique aurora borellias.
    </p>
</div>
    </section>

    <section>
      <div id="container2">
      <center><h3>Take part in Northern Lights Route!</h3></center>
      <center><input type="button" value="Become an explorer" id="profile-button"></center>
    </section>

        <footer class="footer-distributed">

			       <div class="footer-left">

				            <h3>Northern Lights Route</h3>

				                <p class="footer-links">
                  					<a href="#">Hall of Fame</a>
                  					·
                  					<a href="#">Map</a>
                  					·
                  					<a href="#">Northern Lights Route</a>
                  					·
                  					<a href="#">Our stories</a>
                  					·
                  					<a href="#">Contact</a>
				                </p>

				           <p class="footer-company-name">Northern Lights Route &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>1B Kirkkokatu</span> Tornio, Finland</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					We are providing an opportunity to go through the Northern Lights Route for people from different countries. The route starts from Tornio to Tromsö or other way around.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/northernlightsroute/"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>
