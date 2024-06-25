<?php
/**
 * Préparation
 */
include_once "conf.php";
include_once "dto/CreateEleve.php";

$dir = getcwd();

$title = "Ajouter élève";

if (isset($_SESSION['page']) && $_SESSION['page'] == "ajout_eleve") {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naissance']) && isset($_POST['soi_meme'])) {
        $date = new DateTime('@', $_POST['date_naissance']);
        $create_eleve = new CreateEleve($_POST['nom'], $_POST['prenom'], $date, $_SESSION["utilisateur"], isset($_POST['soi_meme']), false, null);

        $res = $create_eleve->create();
        if (!$res) {
            echo "Erreur dans la création de l'élève";
        } else {
            $_SESSION["jwt"] = explode('.', $res)[2];
            $_SESSION["utilisateur"] = new Utilisateur($res);
            $_SESSION["compte"] = $_SESSION["utilisateur"]->role;

            include_once "vue/verif_ajouter_eleve.php";
        }
    } else {
        echo "Erreur dans le formulaire de création d'élève";
    }
}