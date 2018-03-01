<?php

// Affiche mes différentes publications
require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
$mysqli = connexionBDD();

$sql = "SELECT idArticle, image, titre, corps FROM article ORDER BY titre";

// Execute requête
$result = $mysqli->query($sql);

if (!$result) {
    echo "<p>Erreur...</p>";
} else {
    echo "<p>OK</p>";
    while ($ligne = $result->fetch_object()) { // Recupère ensemble des tuples de ma tables
        if ($ligne->id == $id) { // Récupère id et affiche données avec l'id

        }
    }
}

// Ferme connexion
$mysqli->close();
