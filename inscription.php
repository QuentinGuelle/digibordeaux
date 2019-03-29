<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-color: rgb(241,247,252);">
    <div class="register-photo" style="font-family: Montserrat, sans-serif;">
        <div class="form-container">
            <form action="inscription.php" method="post">
                <h2 class="text-capitalize text-center">créer un compte</h2>
                <div class="form-group"><input class="form-control" type="text" name="n_prenom" placeholder="Prénom"></div>
                <div class="form-group"><input class="form-control" type="text" name="n_nom" placeholder="Nom"></div>
                <div class="form-group"><input class="form-control" type="text" name="n_utilisateur" placeholder="Nom d'utilisateur"></div>
                <div class="form-group"><input class="form-control" type="email" name="n_email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="n_mdp" placeholder="Mot de passe"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #0984c3;">S'inscrire</button></div><a href="signin.html" class="already">Déjà inscrit ? Se connecter</a></form>
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
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="connection;php">déconnexion</a></li>
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
	if ((isset($_POST['n_prenom'])) && (isset($_POST['n_nom'])) && (isset($_POST['n_utilisateur'])) && (isset($_POST['n_mail'])) && (isset($_POST['n_mdp']))) {

		if (isset($_POST['n_prenom']) && !empty($_POST['n_prenom'])) {
			$FirstName = $_POST['n_prenom'];
		}
		if (isset($_POST['n_nom']) && !empty($_POST['n_nom'])) {
			$LastName = $_POST['n_nom'];
		}
		if (isset($_POST['n_utilisateur']) && !empty($_POST['n_utilisateur'])) {
			$Login = $_POST['n_utilisateur'];
		}
		if (isset($_POST['n_mdp']) && !empty($_POST['n_mdp'])) {
			$Pass = $_POST['n_mdp'];
		}
		if (isset($_POST['n_mail']) && !empty($_POST['n_mail'])) {
			$EMail = $_POST['n_mail'];
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
		$queryUser = "INSERT INTO USER (Login, Pass, LastName, FirstName, EMail) VALUES (:Login, :Pass, :LastName, :FirstName, :EMail)";
		$query = $bdpdo->prepare($queryUser);

		//Execution de la requête
		$query->execute(array(
			':Login' => $Login,
			':Pass' => $Pass,
			':LastName' => $LastName,
			':FirstName' => $FirstName,
			':EMail' => $EMail
		));

		//Fermeture de la base
		$bdpdo = NULL;
		echo("Vous êtes inscits");
	}
?>