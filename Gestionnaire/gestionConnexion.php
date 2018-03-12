<?php
session_start();

// Connexion
if (isset($_POST['email']) AND
    isset($_POST['password']) AND
    !empty($_POST['email']) AND
    !empty($_POST['password'])
) {

    // Recupere login et mot de passe
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    // Connexion a bdd
    require_once "connexionBDD.php";
    $mysqli = connexionBDD();

    // Récupère données utilisateur
    $res = mysqli_query($mysqli, "select * from utilisateur where email =  '$email' ");
    $row = mysqli_fetch_assoc($res);

    $lastname = $row['lastname'];
    $firstname = $row['firstname'];

    if (password_verify($pwd, $row['password']) && $row['email'] == $email) {
        $_SESSION["email"] = $email;
        $_SESSION["lastname"] = $lastname;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["password"] = $pwd;
        $_SESSION["admin"] = $row['admin'];

        header('Location: http://localhost:8888/webMiage/index.php');
        exit;
    } else {
        echo "<p>Erreur mauvaise entrée</p>";
    }
} else {
    header('Location: http://localhost:8888/webMiage/Formulaire/formConnexion.php');
    exit;
}
