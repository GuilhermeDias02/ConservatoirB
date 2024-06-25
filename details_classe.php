<?php
/**
 * Préparation
 */
include_once "model/Classe.class.php";
// include_once "model/Instrument.class.php";
// include_once "model/Niveau.class.php";
include_once "conf.php";

$dir = getcwd();
$title = "Détails classe";
$_SESSION["nom"] = "nom";
$_SESSION["eleves"] = [];
if (isset($_GET['classe'])) {
    $classe = $_GET['classe'];
} else {
    $classe = "erreur";
}
$classe = new Classe($_GET["classe"], "libelle", "description", new Instrument("1", "piano"), new Niveau("1", 1));

/**
 * Main
 */
if ($classe == "erreur") {
    $_SESSION["erreur"] = $classe;
    include_once "erreur.php";
} else {
    include_once "./vue/details_classe.php";
}