<?php

require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
$mysqli = connexionBDD();

$idarticle = $_GET['idarticle'];

$sql = "DELETE FROM article 
WHERE idarticle = $idarticle;";

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