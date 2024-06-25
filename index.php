<?php
/**
 * Préparation
 */
require_once "dto/LoginDto.php";
require_once "conf.php";
require_once "model/Utilisateur.class.php";

$dir = getcwd();
$session = session_start();
$_SESSION["compte"] = isset($_SESSION["compte"]) ? $_SESSION["compte"] : "visiteur";
$title = "Accueil";
$_SESSION['erreur'] = "Erreur:";

// Lors de la connexion
if (isset($_SESSION['page']) && $_SESSION['page'] == "connexion") {
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $login = new LoginDto($_POST['email'], $_POST['mdp']);

        if (!$login->email_valide()) {
            $_SESSION['erreur'] .= "</br> - mail incompatible";
        }
        if (!$login->mdp_valide()) {
            $_SESSION['erreur'] .= "</br> - mot de passe incorrect (veuillez utiliser 8 caractères et au moins une majuscule, une minuscule, un chiffre et un caractère spécial #?!@$%^&*-)";
        }
        $res = $login->login();
        if (!$res){
            $_SESSION['erreur'] .= "</br> - Problème lors de la connexion";
        }
        else {
            $_SESSION["jwt"] = explode('.', $res)[2];
            $_SESSION["utilisateur"] = new Utilisateur($res);
            $_SESSION["compte"] = $_SESSION["utilisateur"]->getRole();
        }
    }
}


// Lors de l'inscription à un cours
if (isset($_SESSION['page']) && $_SESSION['page'] == "cours") {

}

/**
 * Main
 */
if (isset($_SESSION['erreur']) && $_SESSION['erreur'] != "Erreur:") {
    include_once "erreur.php";
} else {
    include_once "./vue/accueil.php";
}