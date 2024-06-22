<?php
require_once __DIR__."/../model/Utilisateur.classe.php";
require_once __DIR__."/../model/Classe.classe.php";
require_once __DIR__."/../model/Heure.classe.php";
require_once __DIR__."/../model/Jour.classe.php";

class UpdateCours implements JsonSerializable{
    private string $libelle;
    private string $salle;
    private Utilisateur $utilisateur;
    private Classe $classe;
    private Heure $heure;
    private Jour $jour;

    public function __construct(string $libelle, string $salle, Utilisateur $utilisateur, Classe $classe, Heure $heure, Jour $jour){
        $this->libelle = $libelle;
        $this->salle = $salle;
        $this->utilisateur = $utilisateur;
        $this->classe = $classe;
        $this->heure = $heure;
        $this->jour = $jour;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}