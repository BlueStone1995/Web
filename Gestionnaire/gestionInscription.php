<?php

// Vérifie que champs bien rempli et mot de passe ok
if (isset($_POST['lastname']) AND
    isset($_POST['firstname']) AND
    isset($_POST['email']) AND
    isset($_POST['new_password']) AND
    isset($_POST['confirm_password']) AND
    !empty($_POST['lastname']) AND
    !empty($_POST['firstname']) AND
    !empty($_POST['email']) AND
    !empty($_POST['new_password']) AND
    !empty($_POST['confirm_password']) AND
    ($_POST['confirm_password'] == $_POST['new_password'])
) {

    require_once "../connexionBDD.php"; // Récupere fonction connexion a bdd
    $mysqli = connexionBDD();

    $nom = $_POST["lastname"];
    $prenom = $_POST["firstname"];
    $email = $_POST["email"];
    $mdp = $_POST["new_password"];
    $id = '\N';

    $sql = "INSERT INTO utilisateur (idUtilisateur, lastname, firstname, email, password)
VALUES ('$id', '$nom', '$prenom', '$email', '$mdp')"; // Ajouter fonction de hash

    // Envoie dans bdd
    $result = $mysqli->query($sql);

    if (!$result) {
        echo "<p>Erreur...</p>";
    } else {
        header('Location: http://localhost:8888/webMiage/menu.php');
        exit;
    }

    // Ferme connexion
    $mysqli->close();

} else {
    echo "Mauvais remplissage...";
    header('Location: http://localhost:8888/webMiage/index.php');
    exit;
}