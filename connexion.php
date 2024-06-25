<?php
/**
 * Préparation
 */
include_once "dto/RegisterDto.php";

$dir = getcwd();
$session = session_start();
$title = "Inscription";
$_SESSION['erreur'] = "Erreur:";

if (isset($_SESSION['page']) && $_SESSION['page'] == "inscription") {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['email']) && isset($_POST['mdp'])) {
        $signup = new RegisterDto($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['telephone'], $_POST['email'], $_POST['mdp']);

        if (!$signup->email_valide()) {
            $_SESSION['erreur'] .= "</br> - mail incompatible";
        }
        if (!$signup->mdp_valide()) {
            $_SESSION['erreur'] .= "</br> - mot de passe incorrect (veuillez utiliser 8 caractères et au moins une majuscule, une minuscule, un chiffre et un caractère spécial #?!@$%^&*-)";
        }
        $res = $signup->signup();
    }
}

/**
 * Main
 */
if (isset($_SESSION['erreur']) && $_SESSION['erreur'] != "Erreur:") {
    include_once "erreur.php";
} else {
    include_once "vue/connexion.php";
}