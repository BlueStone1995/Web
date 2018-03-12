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
    require_once "../Entity/Utilisateur.php"; // Récupere entité Utilisateur
    require_once "connexionBDD.php"; // Récupere fonction connexion a bdd
    $mysqli = connexionBDD();

    $nom = $_POST["lastname"];
    $prenom = $_POST["firstname"];
    $email = $_POST["email"];
    $mdp = $_POST["new_password"];
    $id = '\N';

    // Grain de sel pour mot de passe
    $option = [
        'sel' => uniqid(mt_rand(), true),
        'cost' => 12 // Cout par défaut
    ];

    // Hashage du mot de passe
    $mdpHash = password_hash($mdp, PASSWORD_BCRYPT, $option);

    $sql = "INSERT INTO utilisateur (idutilisateur, lastname, firstname, email, password)
VALUES ('$id', '$nom', '$prenom', '$email', '$mdpHash')"; // Ajouter fonction de hash

    if ($mysqli->query($sql) === TRUE) { // Envoie dans bdd
        $idutilisateur = $mysqli->insert_id;     // Récupère id utilisateur
        $user = new Utilisateur($idutilisateur, $nom, $prenom, $email, $mdpHash); // Créer nouveau objet Utilisateur

        $_SESSION["idutilisateur"] = $user->getIdutilisateur();
        $_SESSION["lastname"] = $user->getLastname();
        $_SESSION["firstname"] = $user->getFirstname();
        $_SESSION["email"] = $user->getEmail();
        $_SESSION['password'] = $user->getPassword();

        header('Location: http://localhost:8888/webMiage/index.php');
        exit;
    } else {
        echo "<p>Erreur utilisateur...</p>";
    }

    // Ferme connexion
    $mysqli->close();

} else {
    header('Location: http://localhost:8888/webMiage/Formulaire/formInscription.php');
    exit;
}