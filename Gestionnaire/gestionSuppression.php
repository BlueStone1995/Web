<?php

require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
$mysqli = connexionBDD();

$article = unserialize($_SESSION["article"]);

$sql = "DELETE FROM article 
WHERE idarticle = '$article->idarticle';";

// Execute requête
$result = $mysqli->query($sql);

$_SESSION["article"] = serialize($article);

if (!$result) {
    echo "<p>Erreur...</p>";
} else {
    header('Location: http://localhost:8888/webMiage/index.php');
    exit;
}

// Ferme connexion
$mysqli->close();