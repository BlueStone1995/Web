<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Bienvenue</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<?php

session_start();

// Gestion session
if (isset($_SESSION["email"]) AND
    !empty($_SESSION["email"]) AND
    isset($_SESSION["admin"]) AND
    !empty($_SESSION["admin"])
) {
    $email = $_SESSION["email"];
    $lastname = $_SESSION["lastname"];
    $firstname = $_SESSION["firstname"];
    $admin = $_SESSION["admin"];

    require_once "listePublicationAdmin.php";

} else if (isset($_SESSION["email"]) AND
    !empty($_SESSION["email"])
) {
    $email = $_SESSION["email"];
    $lastname = $_SESSION["lastname"];
    $firstname = $_SESSION["firstname"];

    require_once "listePublicationMembre.php";
} else {
    require_once "listePublication.php";
}

?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>