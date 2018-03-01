<?php

if (isset($_POST['image']) AND
    isset($_POST['titre']) AND
    isset($_POST['corps']) AND
    !empty($_POST['image']) AND
    !empty($_POST['titre']) AND
    !empty($_POST['corps'])
) {

    // Affiche page avec mes données
    require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
    $mysqli = connexionBDD();

    $sql = "SELECT idArticle, image, titre, corps FROM article ORDER BY titre";

    // Execute requête
    $result = $mysqli->query($sql);

    if (!$result) {
        echo "<p>Erreur...</p>";
    } else {
        while ($ligne = $result->fetch_object()) { // Recupère ensemble des tuples de ma tables
            if ($ligne->titre == $id) { // Récupère id et affiche données avec l'id

            }
        }
    }

// Ferme connexion
    $mysqli->close();


// Modifie BDD en fonction des données modifié

} else {
    header('Location: http://localhost:8888/webMiage/Formulaire/formModification.php');
    exit;
}