<!DOCTYPE html>
<?php session_start(); ?>
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

<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper">
        <div class="row">
            <div class="col s2">
                <a id="logo" href="index.php" class="valign-wrapper">
                    <img src="pictures/logo.png" alt="" class="responsive-img container">
                </a>
            </div>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="Formulaire/formInscription.php">S'inscrire</a></li>
                    <li><a href="Formulaire/formConnexion.php">Connexion</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br><br>

<?php require_once "listePublication.html"; ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>