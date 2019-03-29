<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nouvel Article</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-capitalize" style="background-color: rgb(241,247,252);">
    <div class="register-photo" style="font-family: Montserrat, sans-serif;">
        <div class="form-container">
            <form class="text-capitalize" method="post">
                <h2 class="text-capitalize text-center">ajouter un article</h2>
                <div class="form-group"><input class="form-control" type="text" name="numarticle" placeholder="numéro article"></div>
                <div class="form-group text-capitalize"><input class="form-control" type="text" name="titre" placeholder="titre"></div>
                <div class="form-group"><textarea class="form-control" name="chapo" placeholder="châpo" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><textarea class="form-control" name="para1" placeholder="paragraphe 1" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="text" name="sst1" placeholder="sous-titre 1"></div>
                <div class="form-group"><textarea class="form-control" name="para2" placeholder="paragraphe 2" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="text" name="sst2" placeholder="sous-titre 2"></div>
                <div class="form-group"><textarea class="form-control" name="para3" placeholder="paragraphe 3" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><textarea class="form-control" name="conc" placeholder="conclusion" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="text" name="datecrea" placeholder="Date"></div>
                <!--<div class="form-group"><input class="form-control" name="datecrea" type="date"></div>-->
                <div class="form-group"><input class="form-control" type="text" name="angle" placeholder="angle"></div>
                <div class="form-group"><input class="form-control" type="text" name="theme" placeholder="theme"></div>
                <div class="form-group"><input class="form-control" type="url" name="url" placeholder="url"></div>
                <div class="form-group"><input class="form-control" type="text" name="langue" placeholder="langue"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #0984c3;">publier</button></div>
            </form>
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




<?php 
//Vérification de l'existence de toutes les variables avec isset
//Vérification du remplissage de tout les champs avec !empty
	if ((isset($_POST['numarticle'])) && (isset($_POST['datecrea'])) && (isset($_POST['titre'])) && (isset($_POST['chapo'])) && (isset($_POST['para1'])) && (isset($_POST['sst1'])) && (isset($_POST['para2'])) && (isset($_POST['sst2'])) && (isset($_POST['para3'])) && (isset($_POST['conc'])) && (isset($_POST['url'])) && (isset($_POST['angle'])) && (isset($_POST['theme'])) && (isset($_POST['langue']))) {

		if (isset($_POST['numarticle']) && !empty($_POST['numarticle'])) {
			$numarticle = $_POST['numarticle'];
		}
		if (isset($_POST['datecrea']) && !empty($_POST['datecrea'])) {
			$datecrea = $_POST['datecrea'];
		}
		if (isset($_POST['titre']) && !empty($_POST['titre'])) {
			$titre = $_POST['titre'];
		}
		if (isset($_POST['chapo']) && !empty($_POST['chapo'])) {
			$chapo = $_POST['chapo'];
		}
		if (isset($_POST['para1']) && !empty($_POST['para1'])) {
			$para1 = $_POST['para1'];
		}
		if (isset($_POST['sst1']) && !empty($_POST['sst1'])) {
			$sst1 = $_POST['sst1'];
		}
		if (isset($_POST['para2']) && !empty($_POST['para2'])) {
			$para2 = $_POST['para2'];
		}
		if (isset($_POST['sst2']) && !empty($_POST['sst2'])) {
			$sst2 = $_POST['sst2'];
		}
		if (isset($_POST['para3']) && !empty($_POST['para3'])) {
			$para3 = $_POST['para3'];
		}
		if (isset($_POST['conc']) && !empty($_POST['conc'])) {
			$conc = $_POST['conc'];
		}
		if (isset($_POST['url']) && !empty($_POST['url'])) {
			$photo = $_POST['url'];
		}
		if (isset($_POST['angle']) && !empty($_POST['angle'])) {
			$angle = $_POST['angle'];
		}
		if (isset($_POST['theme']) && !empty($_POST['theme'])) {
			$theme = $_POST['theme'];
		}
		if (isset($_POST['langue']) && !empty($_POST['langue'])) {
			$langue = $_POST['langue'];
		}
		
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

		//Préparation de la requête
		$queryArticle = "INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, NumAngl, NumThem, NumLang) VALUES (:NumArt, :DtCreA, :LibTitrA, :LibChapoA, :Parag1A, :LibSsTitr1, :Parag2A, :LibSsTitr2, :Parag3A, :LibConclA, :UrlPhotA, :NumAngl, :NumThem, :NumLang)";
		$query = $bdpdo->prepare($queryArticle);

		//Execution de la requête
		$query->execute(array(
			':NumArt' => $numarticle,
			':DtCreA' => $datecrea,
			':LibTitrA' => $titre,
			':LibChapoA' => $chapo,
			':Parag1A' => $para1,
			':LibSsTitr1' => $sst1,
			':Parag2A' => $para2,
			':LibSsTitr2' => $sst2,
			':Parag3A' => $para3,
			':LibConclA' => $conc,
			':UrlPhotA' => $photo,
			':NumAngl' => $angle,
			':NumThem' => $theme,
			':NumLang' => $langue
		));

		//Fermeture de la base
		$bdpdo = NULL;
		
	}

?>