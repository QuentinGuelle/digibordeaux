<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>High Tech</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="allarticles.php" style="padding-right: 60px;font-family: Montserrat, sans-serif;">high tech</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="allarticles.php" style="padding-right: 60px;font-family: Montserrat, sans-serif;">innovations</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="allarticles.php" style="font-family: Montserrat, sans-serif;">évènements</a></li>
                    </ul>
            </div>
            </div>
        </nav>
    </header>
    <h1 class="text-capitalize text-center" style="background-color: #a4a4a4;font-family: Montserrat, sans-serif;color: rgb(255,255,255);padding-top: 40px;padding-bottom: 40px;font-size: 33px;">articles</h1>
    <div class="article-list">
        <div class="container">
            <div class="row articles">
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
                    
                    $result = $bdpdo->query('SELECT * FROM ARTICLE ORDER BY DtCreA DESC');
                    while ($row = $result->fetch()) {
                    $idPost = $row['NumArt'];
            	?>

                <div class="col-sm-6 col-md-4 item"><a href="showsquelette.php?idPost=<?= $idPost; ?>"><img class="img-fluid" src="<?php echo $row['UrlPhotA']; ?>"></a>
                    <h3 class="name"><?php echo $row['LibTitrA']; ?></h3>
                    <p class="description"><?php echo $row['LibChapoA']; ?></p><a href="showsquelette.php?idPost=<?=$idPost?>" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                </div>

                <?php 
                    }
                    $result->closeCursor();
                ?>

                <!--
                <div
                    class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            	<div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                	<h3 class="name">Article Title</h3>
                	<p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
				-->
   			</div>
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