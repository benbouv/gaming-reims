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
    <div class = "permission" id="permission">
    </div>
    <script>
        const options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };
        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value)  + expires + "; path=/";
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

            min_lat_fr = 42.5294753;
            min_long_fr = -4.5928932;

            max_lat_fr = 51.0134663;
            max_long_fr = 8.101708;

            if (lat !== null && long !== null) {
                if ((min_lat_fr < lat) && (lat < max_lat_fr) && (min_long_fr < long) && (long < max_long_fr)) {
                //if ((min_lat < lat) && (lat < max_lat) && (min_long < long) && (long < max_long)) {
                    //echo ("<h1>You are in Gaming Reims !</h1>");
                    //document.cookie = `isAllowed=true`;
                    //document.getElementById("permission").innerHTML ="You are in Game in Reims !";
                    window.location.href = "home.html";
                    setCookie("Allowed", "true", 1);
                } else {
                    //echo ("<h1>You are too far from Gaming Reims !</h1>");
                    //document.cookie = `isAllowed=false`;
                    document.getElementById("permission").innerHTML ="You are not in Game in Reims ! Sorry you cannot play...";
                    setCookie("Allowed", "false", 1);
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