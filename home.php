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
        <script>
            function setCookie(name,value,days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days*24*60*60*1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            }
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }
            cookieAllowed = getCookie("Allowed");
            console.log(cookieAllowed);
            if (cookieAllowed == "false") {
                window.location.href = "index.php";
            }

        </script>
    </head>

<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        
                        <div class="logo">
                            <img src="img/logo_gameinreims.png" alt="Venue Logo">
                            <div class="x-logo">X</div>
                            <img src="img/LOGO_UIMM.png" alt="Venue Logo">
                        </div>
                        
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
                            <p>Ce jeu vous est proposé par un groupe d'étudiant du pole UIMM formation EPSI. C'est un quizz thématique qui vous permettra de gagner peut-être un lot !</p><br>
                            <p>Différents QR code vous seront proposés à travers les différents stands, à vous d'aller les scanner dans le bon ordre et de repondre aux questions<br></p>
                            <p>Pour commencer, veuillez remplir le formulaire ci-dessous avec vos informations de contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <form action="QR.php" method="post">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input name="lastname" type="text" class="form-control" id="lastame" placeholder="nom..." required="required">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input name="surname" type="text" class="form-control" id="surname" placeholder="prénom..." required="required">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input name="mail" type="email" class="form-control" id="email" placeholder="email..." required="required">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input name="tel" type="tel" class="form-control" id="tel" placeholder="numéro de téléphone..." required="required">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input name="study" type="text" class="form-control" id="study" placeholder="niveau d'étude..." required="required">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <div class="blue-button">
                                                    <input href="QR.php" type="submit" id="form-submit" class="btn">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
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