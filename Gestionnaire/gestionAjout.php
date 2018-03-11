<?php

if (isset($_POST['image']) AND
    isset($_POST['titre']) AND
    isset($_POST['corps']) AND
    !empty($_POST['image']) AND
    !empty($_POST['titre']) AND
    !empty($_POST['corps'])
) {

    require_once "../Entity/Article.php";
    require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
    $mysqli = connexionBDD();

    $image = $_POST["image"];
    $titre = $_POST["titre"];
    $corps = $_POST["corps"];
    $id = '\N';

    $sql = "INSERT INTO article (idarticle, image, titre, corps)
VALUES ('$id', '$image', '$titre', '$corps')";


    if ($mysqli->query($sql) === TRUE) { // Envoie dans bdd
        $idarticle = $mysqli->insert_id;     // Récupère id article
        $article = new Article($idarticle, $image, $titre, $corps); // Créer nouveau objet Article

        $_SESSION["article"] = serialize($article);

        header('Location: http://localhost:8888/webMiage/index.php');
        exit;
    } else {
        echo "<p>Erreur...</p>";
    }

    // Ferme connexion
    $mysqli->close();

} else {
    header('Location: http://localhost:8888/webMiage/Formulaire/formAjout.php');
    exit;
}