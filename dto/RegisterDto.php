<?php

class RegisterDto implements JsonSerializable{
    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $telephone;
    private string $email;
    private string $mdp;

    public function __construct(string $nom, string $prenom, string $adresse, string $telephone, string $email, string $mdp){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}