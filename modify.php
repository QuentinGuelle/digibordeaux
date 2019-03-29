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
    $update = ($_GET['update']);

    if ($update == 0) {
    $idPost = ($_GET['idPost']);

    $queryText= "SELECT * FROM ARTICLE WHERE NumArt = :idPost";
    $query = $bdpdo->prepare($queryText);

    $query->execute(array(
        ':idPost' => $idPost
    ));

    if ($query and $query->rowCount() == 1) {
        $object = $query->fetchObject();

        $titra = $object->LibTitrA;
        $dtcrea = $object->DtCreA;
        $chapoa = $object->LibChapoA;
        $para1a = $object->Parag1A;
        $sst1 = $object->LibSsTitr1;
        $para2a = $object->Parag2A;
        $sst2 = $object->LibSsTitr2;
        $para3a = $object->Parag3A;
        $concla = $object->LibConclA;
        $urlphota = $object->UrlPhotA;
        $numangl = $object->NumAngl;
        $numthem = $object->NumThem;
        $numlang = $object->NumLang;
    }
}
else if ($update == 1) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Modifier</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-capitalize" style="background-color: rgb(241,247,252);">
    <div class="register-photo" style="font-family: Montserrat, sans-serif;">
        <div class="form-container">
            <form action ="modify.php?update=<?= $update=1 ?>" class="text-capitalize" method="post">
                <h2 class="text-capitalize text-center">modifier <?php echo $titra; ?></h2>
                <div class="form-group text-capitalize"><input class="form-control" type="text" name="u_titre" placeholder="<?php echo $titra;?>"></div>
                <div class="form-group"><textarea class="form-control" name="u_chapo" placeholder="<?php echo $chapoa;?>" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><textarea class="form-control" name="u_para1a" placeholder="<?php echo $para1a;?>" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="text" name="u_sst1" placeholder="<?php echo $sst1;?>"></div>
                <div class="form-group"><textarea class="form-control" name="u_para2a" placeholder="<?php echo $para2a;?>" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="text" name="u_sst2" placeholder="<?php echo $sst2;?>"></div>
                <div class="form-group"><textarea class="form-control" name="u_para3a" placeholder="<?php echo $para3a;?>" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><textarea class="form-control" name="u_concla" placeholder="<?php echo $concla;?>" style="min-height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="text" name="u_date" placeholder="<?php echo $dtcrea;?>"></div>
                <div class="form-group"><input class="form-control" type="text" name="u_angle" placeholder="<?php echo $numangl;?>"></div>
                <div class="form-group"><input class="form-control" type="text" name="u_theme" placeholder="<?php echo $numthem;?>"></div>
                <div class="form-group"><input class="form-control" type="url" name="u_url" placeholder="<?php echo $urlphota;?>"></div>
                <div class="form-group"><input class="form-control" type="text" name="u_langue" placeholder="<?php echo $numlang;?>"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #0984c3;">enregistrer les modifications</button></div>
            </form>
        </div>
    </div>

    <?php 
    
        if ((isset($_POST['u_titre'])) && (isset($_POST['u_chapo'])) && (isset($_POST['u_para1a'])) && (isset($_POST['u_sst1'])) && (isset($_POST['u_para2a'])) && (isset($_POST['u_sst2'])) && (isset($_POST['u_para3a'])) && (isset($_POST['u_concla'])) && (isset($_POST['u_date'])) && (isset($_POST['u_angle'])) && (isset($_POST['u_theme'])) && (isset($_POST['u_url'])) && (isset($_POST['u_langue']))) {

            
            if (isset($_POST['u_date']) && !empty($_POST['u_date'])) {
                $udate = $_POST['u_date'];
            }
            if (isset($_POST['u_titre']) && !empty($_POST['u_titre'])) {
                $utitre = $_POST['u_titre'];
            }
            if (isset($_POST['u_chapo']) && !empty($_POST['u_chapo'])) {
                $uchapo = $_POST['u_chapo'];
            }
            if (isset($_POST['u_para1a']) && !empty($_POST['u_para1a'])) {
                $upara1a = $_POST['u_para1a'];
            }
            if (isset($_POST['u_sst1']) && !empty($_POST['u_sst1'])) {
                $usst1 = $_POST['u_sst1'];
            }
            if (isset($_POST['u_para2a']) && !empty($_POST['u_para2a'])) {
                $upara2a = $_POST['u_para2a'];
            }
            if (isset($_POST['u_sst2']) && !empty($_POST['u_sst2'])) {
                $usst2 = $_POST['u_sst2'];
            }
            if (isset($_POST['u_para3a']) && !empty($_POST['u_para3a'])) {
                $upara3a = $_POST['u_para3a'];
            }
            if (isset($_POST['uconcla']) && !empty($_POST['uconcla'])) {
                $uconcla = $_POST['uconcla'];
            }
            if (isset($_POST['u_url']) && !empty($_POST['u_url'])) {
                $uurl = $_POST['u_url'];
            }
            if (isset($_POST['u_angle']) && !empty($_POST['u_angle'])) {
                $uangle = $_POST['u_angle'];
            }
            if (isset($_POST['u_theme']) && !empty($_POST['u_theme'])) {
                $utheme = $_POST['u_theme'];
            }
            if (isset($_POST['u_langue']) && !empty($_POST['u_langue'])) {
                $ulangue = $_POST['u_langue'];
            }

            $queryUpdate = "UPDATE ARTICLE SET DtCreA = :udate, LibTitrA = :utitre, LibChapoA = :uchapo, Parag1A = :upara1a, LibSsTitr1 = :usst1, Parag2A = :upara2a, LibSsTitr2 = :usst2, Parag3A = :upara3a, LibConclA = :uconcla, UrlPhotA = :uurl, NumAngl = :uangle, NumThem = :utheme, NumLang = :ulangue WHERE NumArt = $idPost";
            $query = $bdpdo->prepare($queryUpdate);

            $query->execute(array(
                ':udate' => $udate,
                ':utitre' => $utitre,
                ':uchapo' => $uchapo,
                ':upara1a' => $upara1a,
                ':usst1' => $usst1,
                ':upara2a' => $upara2a,
                ':usst2' => $usst2,
                ':upara3a' => $upara3a,
                ':uconcla' => $uconcla,
                ':uurl' => $uurl,
                ':uangle' => $uangle,
                ':ulangue' => $ulangue,
                ':utheme' => $utheme
            ));

            $bdpdo = NULL;
            echo("Article Modifié !");            
        }
        
    ?>

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