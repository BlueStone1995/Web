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

    $image = $_POST["image"];
    $titre = $_POST["titre"];
    $corps = $_POST["corps"];
    $id = '\N';

    $sql = "INSERT INTO article (idArticle, imageURL, titre, corps)
VALUES ('$id', '$image', '$titre', '$corps')";

    // Envoie dans bdd
    $result = $mysqli->query($sql);

    require_once "../Entity/Article.php";

    $article = new Article($image, $titre, $corps);

    if (!$result) {
        echo "<p>Erreur...</p>";
    } else {
        $_SESSION["email"] = $email;
        $_SESSION["lastname"] = $nom;
        $_SESSION["firstname"] = $prenom;

        header('Location: http://localhost:8888/webMiage/index.php');
        exit;
    }

    // Ferme connexion
    $mysqli->close();


} else {
    header('Location: http://localhost:8888/webMiage/Formulaire/formAjout.php');
    exit;
}