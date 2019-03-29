<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Connection</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-color: rgb(241,247,252);">
    <div class="register-photo" style="font-family: Montserrat, sans-serif;">
        <div class="form-container">
            <form action="connection.php" method="post">
                <h2 class="text-capitalize text-center">se connecter</h2>
                <div class="form-group"><input class="form-control" type="text" name="utilisateur" placeholder="Nom d'utilisateur"></div>
                <div class="form-group"><input class="form-control" type="password" name="mdp" placeholder="Mot de passe"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #0984c3;">Se connecter</button></div><a href="#" class="already">Mot de passe oublié ?</a></form>
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
                            <li style="font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);"><a href="inscription.php">déconnexion</a></li>
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
    $server = "mysql:host=localhost;dbname=BLOGART";
    $user= "";
    $password = "";

    if ((isset($_POST['utilisateur'])) && (isset($_POST['mdp']))) {
        if ((isset($_POST['utilisateur'])) && !empty($_POST['utilisateur'])) {
            $user = $_POST['utilisateur'];
            $password = $_POST['mdp'];
        }

        try {
            $bdpdo = new PDO($server, $user, $password);
            echo("Vous êtes connectés. Bienvenue");
        }
        catch (PDOException $e) {
            echo ('Veuillez réessayer, ou vous inscrire');
        }

        $utf8 = 'SET NAMES UTF8';
        $bdpdo->query($utf8);

    }
?>