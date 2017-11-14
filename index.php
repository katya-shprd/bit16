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
    <link rel="stylesheet" href="css/hall.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
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

   <section id="hero-sec">
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
        <div class="col-6">
            <div class="col-3">
                    <span id="route-dec">What is Northern&nbsp;Lights&nbsp;Route?</span>
                    <p class="description">
                            The Northern Lights Route offers a great experience for
                            You to travel through northern countries and see a unique aurora borellias. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis venenatis ex, eget ullamcorper diam. Etiam risus nulla, faucibus ut ex id, maximus finibus leo. Donec convallis mauris sed fermentum cursus.
                        </p>
            </div>
            <div class="col-3">
                    <img class="full-img" src="images/squarrel.jpeg" align="right">
            </div>
        </div>
        </div>
    </section>
    <section>
            <div class="col-6 opt-bot-marg">
            <span id="route-dec" class="opt-bot-marg">Most popular places to begin</span>
            </div>
        <div class="col-6">
        <span class="heading-2">Hotels</span>
        </div>
    <div class="col-6">
     <div class="container-places">
        <div class="col-15">
                <div class="cards-places">
               <img class="full-img" src="images/mustaparta.jpg">
            </div>
            <span class="name-places">Mustaparta</span>
            <div class="hor-labels">
            <span><span class="label">city</span> <br> Tornio</span>
            <span><span class="label">address</span> <br> Keskikatu 24</span>
            </div>
            <div id="TA_socialButtonBubbles469" class="TA_socialButtonBubbles">
                <ul id="k3uQze" class="TA_links PmizNlBWNnhI">
                <li id="ZoXPLWOYYf" class="o5XprqdTtWji">
                <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g736823-d12215730-Reviews-Hotel_Mustaparta-Tornio_Lapland.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21693-2.png"/></a>
                </li>
                </ul>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=469&amp;locationId=12215730&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>

        </div>

        <div class="col-15">
                <div class="cards-places">
               <img class="full-img" src="images/mustaparta.jpg">
            </div>
            <span class="name-places">Mustaparta</span>
            <div class="hor-labels">
            <span><span class="label">city</span> <br> Tornio</span>
            <span><span class="label">address</span> <br> Keskikatu 24</span>
            </div>
            <div id="TA_socialButtonBubbles469" class="TA_socialButtonBubbles">
                <ul id="k3uQze" class="TA_links PmizNlBWNnhI">
                <li id="ZoXPLWOYYf" class="o5XprqdTtWji">
                <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g736823-d12215730-Reviews-Hotel_Mustaparta-Tornio_Lapland.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21693-2.png"/></a>
                </li>
                </ul>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=469&amp;locationId=12215730&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>

        </div>

        <div class="col-15">
                <div class="cards-places">
               <img class="full-img" src="images/mustaparta.jpg">
            </div>
            <span class="name-places">Mustaparta</span>
            <div class="hor-labels">
            <span><span class="label">city</span> <br> Tornio</span>
            <span><span class="label">address</span> <br> Keskikatu 24</span>
            </div>
            <div id="TA_socialButtonBubbles469" class="TA_socialButtonBubbles">
                <ul id="k3uQze" class="TA_links PmizNlBWNnhI">
                <li id="ZoXPLWOYYf" class="o5XprqdTtWji">
                <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g736823-d12215730-Reviews-Hotel_Mustaparta-Tornio_Lapland.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21693-2.png"/></a>
                </li>
                </ul>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=469&amp;locationId=12215730&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>

        </div>

        <div class="col-15">
                <div class="cards-places">
               <img class="full-img" src="images/mustaparta.jpg">
            </div>
            <span class="name-places">Mustaparta</span>
            <div class="hor-labels">
            <span><span class="label">city</span> <br> Tornio</span>
            <span><span class="label">address</span> <br> Keskikatu 24</span>
            </div>
            <div id="TA_socialButtonBubbles469" class="TA_socialButtonBubbles">
                <ul id="k3uQze" class="TA_links PmizNlBWNnhI">
                <li id="ZoXPLWOYYf" class="o5XprqdTtWji">
                <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g736823-d12215730-Reviews-Hotel_Mustaparta-Tornio_Lapland.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21693-2.png"/></a>
                </li>
                </ul>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=469&amp;locationId=12215730&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>

        </div>
        
    </div>      
    
</section>
<section>
    <div class="col-6">
            <span class="heading-2">Activities</span>
            </div>
        <div class="col-6">
        <div class="container-places">
            <div class="cards-places col-15"></div>
            <div class="cards-places col-15"></div>
            <div class="cards-places col-15"></div>
            <div class="cards-places col-15"></div>
        </div>
    </div>
</section>
    <section>
    <div class="col-6 cta-full-width">
      <center><span id="route-dec">Take part in Northern Lights Route!</span></center>
     
      <center><a href="map.html"><button id="see-map" type="button">See the map</button></a></center> 
    </div>
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
