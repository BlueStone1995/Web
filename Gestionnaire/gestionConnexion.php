<?php

// Connexion
if (isset($_POST['emailConnexion']) AND
    isset($_POST['passwordConnexion']) AND
    !empty($_POST['emailConnexion']) AND
    !empty($_POST['passwordConnexion'])
) {

    // Recupere login et mot de passe
    $email = $_POST['emailConnexion'];
    $mdp = $_POST['passwordConnexion'];


    // Connexion a bdd
    require_once "../connexionBDD.php";
    $mysqli = connexionBDD();

    $sql = "SELECT idArticle, image, titre, corps FROM article ORDER BY titre";

    if ($email == "bob@gmail.com" AND $mdp == "a") {
        $_SESSION["email"] = $email;

        header('Location: http://localhost:8888/webMiage/menu.php');
        exit;
    } else {
        header('Location: http://localhost:8888/webMiage/index.php');
        exit;
    }
}


// Gestion session et deconnexion
if (isset($_SESSION['email']) AND
    !empty($_SESSION['email'])
) {
    unset($_SESSION['email']);
    session_destroy();
    header('Location: http://localhost:8888/webMiage/index.php');
    exit;
}

// Redirige sur page d'accueil par défaut
header('Location: http://localhost:8888/webMiage/index.php');
exit;
