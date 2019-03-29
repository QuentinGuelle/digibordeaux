
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="container text-center" style="padding-top: 25px;"><a href="index.php"><img src="assets/img/LOGO_FINAL.png" style="width: 359px;"></a></div>
    <header class="text-center" style="margin-top: 14px;">
        <nav class="navbar navbar-dark navbar-expand-md d-xl-flex" style="margin-top: 21px;background-color: #0984c3;">
            <div class="container-fluid"><a class="navbar-brand text-capitalize" href="#" style="margin-right: 0px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse text-capitalize" id="navcol-1" style="margin-right: 0px;font-size: 13px;">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="padding-right: 60px;font-family: Montserrat, sans-serif;">actualités</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="allarticles.php" style="padding-right: 60px;font-family: Montserrat, sans-serif;">startups</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="allarticles.php" style="padding-right: 60px;font-family: Montserrat, sans-serif;">high tech</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="allarticles.php" style="padding-right: 60px;font-family: Montserrat, sans-serif;">innovations</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="allarticles.php" style="font-family: Montserrat, sans-serif;">évènements</a></li>
                    </ul>
            </div>
            </div>
        </nav>
    </header>
    <h1 class="text-capitalize text-center" style="background-color: #a4a4a4;font-family: Montserrat, sans-serif;color: rgb(255,255,255);padding-top: 40px;padding-bottom: 40px;font-size: 33px;">derniers articles</h1>
    <div class="container" style="padding-top: 50px;">
        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="max-height: 543px;min-height: 543px;background-color: #000000;">
            <div class="carousel-inner" role="listbox">

                <?php
                    //Identifiants de connexion
                    $server = "mysql:host=localhost;dbname=BLOGART";
                    $user = "root";
                    $password = "";
        
                    //Essai de connection
                    try {
                        $bdpdo = new PDO($server, $user, $password);
                    }
                    catch (PDOException $e) {
                        echo '<h2>Failed to connect : </h2>' . $e->getMessage();
                    }
                    $utf8 = 'SET NAMES UTF8';
                    $bdpdo->query($utf8);
                    
                    $result = $bdpdo->query('SELECT * FROM ARTICLE ORDER BY DtCreA DESC LIMIT 1');
                    while ($row = $result->fetch()) {
                ?>
                    
                    <div class="carousel-item active" style="background-color: #000000;"><img class="w-100 d-block" src="<?php echo $row['UrlPhotA']; ?>" alt="Slide Image" style="max-height: 550px;">
                        <div class="carousel-caption">
                            <h3><?php echo $row['LibTitrA']; ?></h3>
                            <p><?php echo $row['LibChapoA']; ?></p>
                        </div>
                    </div>
                        
                <?php 
                    }
                    $result->closeCursor();
                ?>

                <?php
                    //Identifiants de connexion
                    $server = "mysql:host=localhost;dbname=BLOGART";
                    $user = "root";
                    $password = "";
        
                    //Essai de connection
                    try {
                        $bdpdo = new PDO($server, $user, $password);
                    }
                    catch (PDOException $e) {
                        echo '<h2>Failed to connect : </h2>' . $e->getMessage();
                    }
                    $utf8 = 'SET NAMES UTF8';
                    $bdpdo->query($utf8);
                    
                    $result2 = $bdpdo->query('SELECT * FROM ARTICLE ORDER BY DtCreA DESC LIMIT 2, 3');
                    while ($row2 = $result2->fetch()) {
                ?>
                    
                    <div class="carousel-item" style="background-color: #000000;"><img class="w-100 d-block" src="<?php echo $row2['UrlPhotA']; ?>" alt="Slide Image" style="max-height: 550px;">
                        <div class="carousel-caption">
                            <h3><?php echo $row2['LibTitrA']; ?></h3>
                            <p><?php echo $row2['LibChapoA']; ?></p>
                        </div>
                    </div>
                        
                <?php 
                    }
                    $result2->closeCursor();
                ?>
                
                
                <!--
                <div class="carousel-item active" style="background-color: #000000;"><img class="w-100 d-block" src="assets/img/screen-content-iphone-6.jpg" alt="Slide Image" style="max-height: 550px;">
                    <div class="carousel-caption">
                        <h3>Slide Title</h3>
                        <p>Slide Caption</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: #000000;"><img class="w-100 d-block" src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image">
                    <div class="carousel-caption">
                        <h3>Slide Title</h3>
                        <p>Slide Caption</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: #000000;"><img class="w-100 d-block" src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image">
                    <div class="carousel-caption">
                        <h3>Slide Title</h3>
                        <p>Slide Caption</p>
                    </div>
                </div>
                -->
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>

                

    <div class="text-capitalize footer-dark" style="margin-top: 162px;background-color: #0984c3;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-3 item">
                        <ul>
                            <li class="text-capitalize" style="filter: brightness(100%);font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="nouvelarticle.php">ajouter un article</a></li>
                            <li class="text-capitalize" style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="#">à propos</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <ul>
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="#">mentions légales</a></li>
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="#">protection des données</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <ul>
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="connection.php">se connecter</a></li>
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="inscription.php">S'inscrire</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <ul>
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="index.php">Actualités</a></li>
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="connection.php">déconnexion</a></li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">Copyright © 2019 IUT Bordeaux Montaigne. Tous droits réservés</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>






