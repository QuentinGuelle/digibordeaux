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

    $idPost = ($_GET['idPost']);

    $queryText= "SELECT * FROM ARTICLE WHERE NumArt = :idPost";
    $query = $bdpdo->prepare($queryText);

    $query->execute(array(
    	':idPost' => $idPost
    ));

    if ($query and $query->rowCount() == 1) {
    	$object = $query->fetchObject();

    	$dtcrea = $object->DtCreA;
    	$titra = $object->LibTitrA;
    	$chapoa = $object->LibChapoA;
    	$para1a = $object->Parag1A;
    	$sst1 = $object->LibSsTitr1;
    	$para2a = $object->Parag2A;
    	$sst2 = $object->LibSsTitr2;
    	$para3a = $object->Parag3A;
    	$concla = $object->LibConclA;
    	$urlphota = $object->UrlPhotA;
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $titra; ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
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
    <h1 class="text-capitalize text-center" style="background-color: #a4a4a4;font-family: Montserrat, sans-serif;color: rgb(255,255,255);padding-top: 40px;padding-bottom: 40px;font-size: 33px;">.</h1>
    <div class="article-clean">
        <div class="container" style="font-family: Montserrat, sans-serif;">
            <div class="query">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center"><?php echo $titra; ?></h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">GROUPE SIX</a><span class="date"><?php echo $dtcrea; ?></span></p><img src="<?php echo $urlphota; ?>" style="width: 692px;"></div>
                    <div class="text">
                        <p><strong><?php echo $chapoa; ?></strong><br></p>
                        <p><br><?php echo $para1a; ?><br><br></p>
                        <h2><strong><?php echo $sst1; ?></strong><br></h2>
                        <p><?php echo $para2a; ?><br></p>
                        <div
                            class="text">
                            <h2><strong><?php echo $sst2; ?></strong><br></h2>
                            <p><?php echo $para3a; ?><br></p>
                            <p><?php echo $concla; ?><br><br></p>
                            <p><a href="modify.php?idPost=<?= $idPost."&update=".$update=0; ?>">Modifier l'article</a><br></p>
                            <p><a href="delete.php?idPost=<?= $idPost; ?>">Supprimer l'article</a><br></p>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="text-capitalize footer-dark" style="margin-top: 162px;background-color: #0984c3;">
        <footer>
            <div class="container">
                <div class="query justify-content-center">
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