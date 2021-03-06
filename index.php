<?php
/*
	file:	index.php
	desc:	Main page
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
</head>

<body>
<?php include ("nav.html") ?> 
    
   <section id="hero-sec">
    <div class="header">
        <div class="pic-header">
            <img class="pic" src="images/header.png" alt="lights">
        </div>
    </section>

    <section>
            <div class="container">
                <div class="row">

                <div class="col-2 card centered">
                    <img id="country-pic" src="images/norway.png" alt="norway">
                    <h3>NORWAY</h3>
                    <div class="row stats">
                        <div class="col-1">
                            <span class="label-title">Cities</span>
                            <span class="label-value">3</span>
                        </div>
                        <div class="col-1">
                            <span class="label-title">Activities</span>
                            <span class="label-value">7</span>
                        </div>
                    </div>
                </div>
                <div class="col-2 card centered offset">
                    <img id="finland-pic" src="images/finland.png" alt="finland">
                    <h3>FINLAND</h3>
                    <div class="row stats">
                        <div class="col-1">
                            <span class="label-title">Cities</span>
                            <span class="label-value">8</span>
                        </div>
                        <div class="col-1">
                            <span class="label-title">Activities</span>
                            <span class="label-value">15</span>
                        </div>
                    </div>
                </div>
                <div class="col-2 card centered">
                    <img id="country-pic" src="images/sweden.png" alt="sweden">
                    <h3>SWEDEN</h3>
                    <div class="row stats">
                        <div class="col-1">
                            <span class="label-title">Cities</span>
                            <span class="label-value">5</span>
                        </div>
                        <div class="col-1">
                            <span class="label-title">Activities</span>
                            <span class="label-value">11</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </section>
    <section>
        <div class="row">
            <div class="col-3">
                    <h3 id="route-dec">What is Northern&nbsp;Lights&nbsp;Route?</h3>
                    <p class="description">
                            The Northern Lights Route offers a great experience for
                            You to travel through northern countries and see a unique aurora borellias. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis venenatis ex, eget ullamcorper diam. Etiam risus nulla, faucibus ut ex id, maximus finibus leo. Donec convallis mauris sed fermentum cursus.
                        </p>
            </div>
            <div class="col-3">
                    <img class="full-img" id="squirrel-img" src="images/squarrel.jpeg" align="right">
            </div>
        </div>
        </div>
    </section>
    <section>
            <div class="col-6 opt-bot-marg">
            <h3 id="route-dec" class="opt-bot-marg">Most popular places to begin with</h3>
            </div>
            <div class="col-6">
            <p class="description">Looking for a hotel or activity to start discovering Lapland? Check this out </p>
            </div>
            
       
       
        <div class="col-6">
        <h3 class="heading-2">Hotels</h3><br>
        </div>
        <div class="col-6">
        <p class="description"><a href='https://www.booking.com/'>Open booking.com</a></p>
        </div>
    <div class="col-6">
     <div class="container-places">
        <div class="col-2">
                <div class="cards-places">
               <img class="full-img" src="images/mustaparta.jpg">
            </div>
            <span class="name-places">Hotel Mustaparta - Finland</span>
            
             <span><b>city: </b>Tornio, 95400</span>
            <span class="boxes"><b>address: </b>Keskikatu 24 <br></span>
            
            <div id="TA_socialButtonBubbles469" class="TA_socialButtonBubbles">
                <ul id="k3uQze" class="TA_links PmizNlBWNnhI">
                <li id="ZoXPLWOYYf" class="o5XprqdTtWji">
                <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g736823-d12215730-Reviews-Hotel_Mustaparta-Tornio_Lapland.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21693-2.png"/></a>
                </li>
                </ul>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=469&amp;locationId=12215730&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>

        </div>

        <div class="col-2">
                <div class="cards-places">
               <img class="full-img" src="images/pello.png">
            </div>
            <span class="name-places">Lempeän Suvanto - Finland</span>
            
            <span><b>city: </b>Pello, 95700</span>
            <span class="boxes"><b>address: </b>Väylänvarrentie 27A <br></span>
            
            <div id="TA_socialButtonBubbles993" class="TA_socialButtonBubbles">
            <ul id="mJ9Uhktex" class="TA_links muviuxj7rOj">
            <li id="OIu5z9l8wv" class="mNf08eOYGYe">
            <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g776235-d10403867-Reviews-Lempean_Suvanto_Resort-Pello_Lapland.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a>
            </li>
            </ul>
            </div>
            <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=993&amp;locationId=10403867&amp;color=green&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>
            

        </div>

        <div class="col-2">
                <div class="cards-places">
               <img class="full-img" src="images/river.jpg">
            </div>
            <span class="name-places">Lapland Guest House - Sweden</span>
            
            <span><b>city: </b>Pajala, 98432 </span>
            <span class="boxes"><b>address: </b>Soukolovaegen 2 <br></span>
            
            <div id="TA_socialButtonBubbles920" class="TA_socialButtonBubbles">
            <ul id="XYWwsw1" class="TA_links tO7NYsv35L8">
            <li id="wSZtmDHHgL" class="K0CBAss">
            <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g670194-d7623994-Reviews-Hotel_Lapland_River-Pajala_Norrbotten_County.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_white-21693-2.png"/></a>
            </li>
            </ul>
            </div>
            <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=920&amp;locationId=7623994&amp;color=white&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>
            

        </div>

        
    </div>      
    
</section>
<section>
<div class="col-6">
<h3 class="heading-2">Activities</h3>
</div>
    <div class="col-6">
    <p class="description"><a href='companies.php'>Open to see more <br> </a> </p>
    </div>

<div class="col-6">
<div class="container-places">
<div class="col-2">
        <div class="cards-places">
       <img class="full-img" src="images/farm_escape.jpg">
    </div>
    <span class="name-places">Farm Escape</span>

    <span><b>city: </b>Tornio, 95540 </span>
    <span class="boxes"><b>address: </b>Mustajärventie 456 <br></span>
            
</div>

<div class="col-2">
        <div class="cards-places">
       <img class="full-img" src="images/skiing.jpg">
    </div>
    <span class="name-places">Skiing in Kemi - Finland</span>

    <span><b>city: </b>Kemi, 95100 </span>
    <span class="boxes"><b>address: </b>Kauppakatu 5 <br></span>
         
</div>

<div class="col-2">
<div class="cards-places">
<img class="full-img" src="images/camping.jpg">
</div>
<span class="name-places">Camping tour - Norway</span>

<span><b>city: </b>Tromsö, 9008 </span>
<span class="boxes"><b>address: </b>Gronnegata 45 <br></span>

</div>
   
</section>


</div>
<br>
   <section>
    <div class="col-6 centered">
      <center><h3 id="route-dec">Take part in Northern Lights Route!</h3></center>
</div>
<br>
<div class="col-6 centered">
    <img src="images/route-img.png">
      <a href="map.php"><button id="see-map">See the map</button></a>
</div>
    </section>
<section>
<div class="col-6">
    <div class="col-3">
    <span class="heading-2">Do you have some questions? <br>Contact us</span>
    </div>

    <div class="col-3">
    <?php include ("contact-form.php")?>
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
