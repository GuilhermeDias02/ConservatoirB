<?php
require_once __DIR__."../constants/Role.php";

class Utilisateur {
    private string $uuid;
    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $telephone;
    private string $email;
    private string $mdp;
    private string $description_prof;
    private Role $role;

    public function __construct(string $uuid, string $nom, string $prenom, string $adresse, string $telephone, string $email, string $mdp, string $description_prof, Role $role){
        $this->uuid = $uuid;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->description_prof = $description_prof;
        $this->role = $role;
    }
}