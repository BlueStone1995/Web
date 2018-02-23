<?php

function connexionBDD()
{

    $host = "localhost";
    $user = "root";
    $mdp = "root";
    $bdd = "blog";


    $mysqli = new mysqli($host, $user, $mdp, $bdd);


    // Connexion bdd
    if ($mysqli->connect_errno) {
        die("<p>Erreur : " . $mysqli->connect_errno . "</p>");
    }

    return $mysqli;

}

