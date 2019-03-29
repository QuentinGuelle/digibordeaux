<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Supprimer</title>
</head>
<body>
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

    $queryText= "DELETE FROM ARTICLE WHERE NumArt = :idPost";
    $query = $bdpdo->prepare($queryText);

    $query->execute(array(
    	':idPost' => $idPost
    ));

	?>
	<p><a href="index.php">Retourner à l'accueil</a></p>
</body>
</html>


