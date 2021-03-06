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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/login.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



</head>

<body>

<?php include ("nav.html") ?> 

    <section>
        <div class="header">
            <div class="pic-header" id="hall-header">
                <h1>Hall of fame</h1>
            </div>
    </section>
<section>
    <div class="col-6 centered">
			<p class="description-2">Hall of Fame describes top-30 travelers of Northern Lights Route. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean arcu tellus, cursus ac mauris et, scelerisque blandit mauris. Suspendisse sed consequat odio.</p>
    </div>
</section>    
<!-- cards --> 

<section>
    <div class="container">
        <div class="row">
            <div class="col-2 card centered">
                <h3>Name firstname</h3>
                <!-- <img id="finland-pic" src="images/finland.png" alt="finland"> -->
                <div class="circle" id="circle-pic"></div>
                <button class="cards-button">View profile</button>
                <div class="row stats">
                    <div class="col-1">
                        <span class="label-title">Points</span>
                        <span class="label-value">9</span>
                    </div>
                    <div class="col-1">
                        <span class="label-title">Cities</span>
                        <span class="label-value">11</span>
                    </div>
                </div>
            </div>
            <div class="col-2 card centered offset">
                <h3>Name firstname</h3>
                <div class="circle" id="circle-pic"></div>
                <button class="cards-button">View profile</button>
                <div class="row stats">
                    <div class="col-1">
                        <span class="label-title">Points</span>
                        <span class="label-value">9</span>
                    </div>
                    <div class="col-1">
                        <span class="label-title">Cities</span>
                        <span class="label-value">11</span>
                    </div>
                </div>
            </div>
            <div class="col-2 card centered">
                <h3>Name firstname</h3>
                <div class="circle" id="circle-pic"></div>
                <button class="cards-button">View profile</button>
                <div class="row stats">
                    <div class="col-1">
                        <span class="label-title">Points</span>
                        <span class="label-value">9</span>
                    </div>
                    <div class="col-1">
                        <span class="label-title">Cities</span>
                        <span class="label-value">11</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section>
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
                    
                    <h3>Red Fox</h3>
                    <div class="circle" id="circle-pic2"></div>
                   
                    <div class="button"><button>View profile</button></div>
                    <p id="CA">points <span class="activities">cities</span></p>
                    <p id="number">9 <span class="num">11</span></p>
                </div>

            </div>
        </div>
</section> -->
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

<div class="col-6 centered">
    <input type="submit" value="View more"/>
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
