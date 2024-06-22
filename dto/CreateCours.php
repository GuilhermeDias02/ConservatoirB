<?php
require_once __DIR__."/../model/Classe.class.php";
require_once __DIR__."/../model/Heure.class.php";
require_once __DIR__."/../model/Jour.class.php";
require_once __DIR__."/../model/Utilisateur.class.php";

class CreateCours implements JsonSerializable{
    private string $libelle;
    private string $salle;
    private Utilisateur $prof;
    private Classe $classe;
    private Heure $heure;
    private Jour $jour;

    public function __construct(string $libelle, string $salle, Utilisateur $prof = null, Classe $classe = null, Heure $heure = null, Jour $jour = null){
        $this->libelle = $libelle;
        $this->salle = $salle;
        $this->prof = $prof;
        $this->classe = $classe;
        $this->heure = $heure;
        $this->jour = $jour;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}