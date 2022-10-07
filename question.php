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
    <?php
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($url);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
            $stand_id = $params['param'];
        }
    ?>
    <?php
        
        $mysqli=mysqli_connect('localhost', 'root','', 'GR');
        if (!$mysqli) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($stand_id)) {
            $sql=mysqli_query($mysqli,'SELECT question.libelle as ql, question.id as qid FROM question WHERE question.pool = \''.$stand_id.'\' ORDER BY RAND () limit 4');
        }
    ?>
    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <form action="question.php" method="post" id="quiz">
                                <ol>
                                    <li>
                                        <?php
                                            if (isset($sql)) {
                                                if($sql->num_rows > 0){ 
                                                    while($row = $sql->fetch_assoc()){
                                        ?>
                                        <h3><?php echo $row['ql']?></h3>
                                        <?php
                                            $sql2=mysqli_query($mysqli,'SELECT reponse.id_question as ridq, reponse.libelle as rl FROM reponse where reponse.id_question ='.$row['qid'].'');
                                            if (isset($sql2)) {
                                                while($row2 = $sql2->fetch_assoc()) {
                                        ?>
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                            <label for="question-1-answers-A"><?php echo $row2['rl']?></label>
                                        </div>
                                        <?php }}}}}?>
                                    </li>
                                </ol>
                                <input type="submit" value="Submit" class="submitbtn" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        
    </main>

    <div class="sub-footer">
        <p>Copyright © 2020 UIMM - EPSI</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>