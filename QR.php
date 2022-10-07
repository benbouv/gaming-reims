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
            if (cookieAllowed == "false" || cookieAllowed == undefined) {
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
    <script src="js/html5-qrcode.min.js"></script>
    <section class="game-rule">
        <?php
            $mysqli=mysqli_connect('localhost', 'root','', 'GR');
            if (isset($_COOKIE["ordre"]) && isset($_COOKIE["addrmail"])) {
                $ordre = $_COOKIE["ordre"];
                $mail_user = $_COOKIE["addrmail"];
                $sql2=mysqli_query($mysqli,'SELECT resultat.stand as rs FROM resultat WHERE resultat.ordre = \''.$ordre.'\' AND resultat.addrmail = \''.$mail_user.'\'');
                if(isset($sql2)){
                    if($sql2->num_rows > 0){ 
                        while($row = $sql2->fetch_assoc()){
        ?>
        <p>Pour jouer il te suffit de scanner le QR code du stand n°<?php echo $row['rs']?> avec le lecteur ci-dessous</p>
        <?php }}}}?>
    </section>
    <section class="qr-reader">
        <div class="row">
        <div class="col">
            <div style="width: 70vw; background-color: white;" id="reader"></div>
        </div>
        <div class="col">
            <h4>SCAN RESULT</h4>
            <div id="result">Result Here</div>
        </div>
        </div>
    </section>
    
    <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
            window.location.href = "question.php?param="+qrCodeMessage;
        }
        function onScanError(errorMessage) {
        //handle scan error
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>

    <div class="sub-footer">
        <p>Copyright © 2020 UIMM - EPSI</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        var video = document.querySelector("#videoElement");
        video.setAttribute('playsinline', '');
        video.setAttribute('autoplay', '');
        video.setAttribute('muted', '');

        /* Setting up the constraint */
        var facingMode = "environment"; // Can be 'user' or 'environment' to access back or front camera (NEAT!)
        var constraints = {
            audio: false,
            video: {
                facingMode: facingMode
            }
        };

        /* Stream it to video element */
        navigator.mediaDevices.getUserMedia(constraints).then(function success(stream) {
            video.srcObject = stream;
        });
    </script>
</body>
</html>
