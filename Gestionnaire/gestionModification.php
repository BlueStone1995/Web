<?php

if (isset($_POST['image']) AND
    isset($_POST['titre']) AND
    isset($_POST['corps']) AND
    !empty($_POST['image']) AND
    !empty($_POST['titre']) AND
    !empty($_POST['corps'])
) {
    require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
    $mysqli = connexionBDD();

    $article = unserialize($_SESSION["article"]);
    $image = $_POST["image"];
    $titre = $_POST["titre"];
    $corps = $_POST["corps"];

    $sql = "UPDATE article 
SET imageURL = '$image', titre = '$titre', corps = '$corps' 
WHERE idArticle = '$article->idArticle'";


    // Execute requête
    $result = $mysqli->query($sql);

    if (!$result) {
        echo "<p>Erreur...</p>";
    } else {
        header('Location: http://localhost:8888/webMiage/index.php');
        exit;
    }

// Ferme connexion
    $mysqli->close();


// Modifie BDD en fonction des données modifié

} else {
    header('Location: http://localhost:8888/webMiage/Formulaire/formModification.php');
    exit;
}