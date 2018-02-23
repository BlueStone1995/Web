<?php

// Deconnexion
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