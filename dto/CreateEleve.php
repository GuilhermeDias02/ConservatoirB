<?php
require_once __DIR__."/../model/Utilisateur.class.php";

class CreateEleve implements JsonSerializable{
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private bool $soi_meme;
    private bool $demande_inscritpion;
    private Utilisateur $utilisateur;

    public function __construct(string $nom, string $prenom, DateTime $date_naissance, bool $soi_meme = null, bool $demande_inscritpion = null, Utilisateur $utilisateur){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->soi_meme = $soi_meme;
        $this->demande_inscritpion = $demande_inscritpion;
        $this->utilisateur = $utilisateur;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}