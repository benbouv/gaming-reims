<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Quizz Game in Reims</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div id="permission">
    </div>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.php">
                            <div class="logo">
                                <img src="img/logo_gameinreims.png" alt="Venue Logo">
                                <div class="x-logo">X</div>
                                <img src="img/LOGO_UIMM.png" alt="Venue Logo">
                            </div>
                        </a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">Home</a></li>
                                <!--<li><a href="about-us.html">About Us</a></li>-->
                                <li><a href="QR.php">Scanner QR code</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <h2>Bienvenue à la Game'in Reims !</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
    <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>Règles du jeu :</h4>
                            <p>Ce jeu vous est proposé par un groupe d'étudiant du pole UIMM formation EPSI</p>

                            <p>Il vous suffit d'utiliser votre appareil photo ou une application QR reader, puis de scanner les différents QR code selon un ordre qui vous sera donné.<br><br>A chaque stand vous dévrez répondre à une série de questions puis vous devrez vous rendre au stand suivant indiqué sur le plan.</p>
                            <p>RDV au premier stand pour scanner le 1er QR code ! (aller dans Menu --> Scanner QR code)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <div class="blue-button">
                                            <a href="#" id="form-submit" class="btn">Send Message</a>
                                        </div>
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>-->
    </main>

    <footer>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2022 UIMM - EPSI</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        const options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        lat = null;
        long = null;
        
        function success(pos) {
            const crd = pos.coords;
        
            console.log('Your current position is:');
            console.log(`Latitude : ${crd.latitude}`);
            console.log(`Longitude: ${crd.longitude}`);
            console.log(`More or less ${crd.accuracy} meters.`);
            //document.cookie = `latitude=${crd.latitude}`;
            //document.cookie = `longitude=${crd.longitude}`;
            lat = crd.latitude;
            long = crd.longitude;

            min_lat = 49.224958;
            min_long = 4.033502;

            max_lat = 49.240803;
            max_long = 4.084688;

            if (lat !== null && long !== null) {
                if ((min_lat < lat) && (lat < max_lat) && (min_long < long) && (long < max_long)) {
                    //echo ("<h1>You are in Gaming Reims !</h1>");
                    //document.cookie = `isAllowed=true`;
                    //document.getElementById("permission").innerHTML ="You are in Game in Reims !";
                } else {
                    //echo ("<h1>You are too far from Gaming Reims !</h1>");
                    //document.cookie = `isAllowed=false`;
                    //document.getElementById("permission").innerHTML ="You are not in Game in Reims ! Sorry...";
                }
            }
        }
        
        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }
        
        navigator.geolocation.getCurrentPosition(success, error, options);

    </script>
</body>
</html>