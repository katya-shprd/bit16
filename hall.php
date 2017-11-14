<?php
/*
     file: hall.php
    desc: Hall of Fame page
*/
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

    <section>
        <div class="header">
            <div class="pic-header" id="hall-header">
                <h1>Hall of fame</h1>
            </div>

 
    </section>

    
<!-- cards --> 
<section>
        <div class="container">
            <div class="row">

                <div class="card silver">
                   
                    <h3>Smoked Salmon</h3>
                    
                    <div class="circle" id="circle-pic"></div>
                  
                    <div class="button"><button>View profile</button></div>
                    
                    <p id="CA">points <span class="activities">cities</span></p>
                    <p id="number">9 <span class="num">11</span></p>

                </div>

                <div class="card gold" id="gold"> 
                    
                    <h3>Snow Lynx</h3>
                    <div class="circle" id="circle-pic1"></div>
                    
                    <div class="button"><button>View profile</button></div>
                    <p id="CA">POINTS <span class="activities">CITIES</span></p>
                    <p id="number1">9 <span class="num1">11</span></p>
                </div>

                <div class="card bronze">
                    
                    <h3>Verysuperlong Someone's Name</h3>
                    <div class="circle" id="circle-pic2"></div>
                   
                    <div class="button"><button>View profile</button></div>
                    <p id="CA">points <span class="activities">cities</span></p>
                    <p id="number">9 <span class="num">11</span></p>
                </div>

            </div>
        </div>
</section>
<section id="hor-sec"> 
    <div class="hor-card">
        <span class="hor-order">4</span>
        <div class="hor-circle">
            <img src="images/kotik2.jpg"></img>
        </div>
    <span><span class="label">User name</span> <br> Kotik Kiseks</span>
    <span><span class="label">Country</span> <br> Russia</span>
    <span><span class="label">City</span> <br> Murmansk</span>
    </div>

    <div class="hor-card">
            <span class="hor-order">5</span>
            <div class="hor-circle">
                <img src="images/pesik2.jpg"></img>
            </div>
        <span><span class="label">User name</span> <br> Doggo Charming</span>
        <span><span class="label">Country</span> <br> Sweden</span>
        <span><span class="label">City</span> <br> Stockholm</span>
        </div>
    
    <div class="hor-card">
                <span class="hor-order">6</span>
                <div class="hor-circle">
                    <img src="images/pesik3.jpg"></img>
                </div>
            <span><span class="label">User name</span> <br> Lutik Dandelion</span>
            <span><span class="label">Country</span> <br> France</span>
            <span><span class="label">City</span> <br> Paris</span>
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
