<?php
/**
 * Préparation
 */
$dir = getcwd();
$session = session_start();
$_SESSION["compte"] = "visiteur";
$title = "Accueil";

if (isset($_SESSION['page']) && $_SESSION['page'] == "connexion") {
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $_SESSION["compte"] = "parent";
        $_SESSION["nom"] = "nom";
        $_SESSION["prenom"] = "prenom";

        echo $_POST['email'].' '.$_POST['mdp'];
    }
}

/**
 * Main
 */
include "./vue/accueil.php";