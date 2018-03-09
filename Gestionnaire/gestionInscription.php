<?php
session_start();

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
    require_once "../Entity/Utilisateur.php";
    require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
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

    // Récupère id utilisateur :
    $sqlid = "SELECT idUtilisateur FROM utilisateur WHERE lastname = '$nom', firstname = '$prenom', email = '$email', password= '$mdp'";
    $resultid = $mysqli->query($sqlid);

    if (!$resultid) {
        echo "<p>Erreur...</p>";
    } else {
        // Créer nouveau objet Utilisateur
        $user = new Utilisateur($resultid, $prenom, $nom, $email, $mdp);
    }


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
    echo "Mauvais remplissage...";
    header('Location: http://localhost:8888/webMiage/Formulaire/formInscription.php');
    exit;
}