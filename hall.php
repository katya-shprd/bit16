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
