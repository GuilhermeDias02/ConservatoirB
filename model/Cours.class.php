<?php
require_once __DIR__."/Utilisateur.class.php";
require_once __DIR__."/Classe.class.php";
require_once __DIR__."/Heure.class.php";
require_once __DIR__."/Jour.class.php";

class Cours {
    private string $uuid;
    private string $libelle;
    private string $salle;
    private Utilisateur $prof;
    private Classe $classe;
    private Heure $heure;
    private Jour $jour;

    public function __construct(string $uuid, string $libelle, string $salle, Utilisateur $prof = null, Classe $classe = null, Heure $heure = null, Jour $jour = null){
        $this->uuid = $uuid;
        $this->libelle = $libelle;
        $this->salle = $salle;
        $this->classe = $classe;
        $this->heure = $heure;
        $this->jour = $jour;
    }
}