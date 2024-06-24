<?php
/**
 * Préparation
 */
include "dto/LoginDto.php";
include "conf.php";

$dir = getcwd();
$session = session_start();
$_SESSION["compte"] = "visiteur";
$title = "Accueil";
$_SESSION['erreur'] = "Erreur:";

if (isset($_SESSION['page']) && $_SESSION['page'] == "connexion") {
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $_SESSION["compte"] = "parent";
        $_SESSION["nom"] = "nom";
        $_SESSION["prenom"] = "prenom";

        $login = new LoginDto($_POST['email'], $_POST['mdp']);

        if (!$login->email_valide() && !$login->mdp_valide()) {
            $_SESSION['erreur'] .= "</br> - mail incompatible";
        }
        if (!$login->mdp_valide()) {
            $_SESSION['erreur'] .= "</br> - mot de passe incorrect (veuillez utiliser 8 caractères et au moins une majuscule, une minuscule, un chiffre et un caractère spécial #?!@$%^&*-)";
        }
        print_r($login->login());
    }
}

/**
 * Main
 */
if (isset($_SESSION['erreur']) && $_SESSION['erreur'] != "Erreur:") {
    include "erreur.php";
} else {
    include "./vue/accueil.php";
}