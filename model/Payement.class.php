<?php
require_once __DIR__."/Eleve.class.php";

class Payement {
    private string $uuid;
    private int $montant;
    private DateTime $date;
    private Eleve $eleve;

    public function __construct(string $uuid, int $montant, DateTime $date = null, Eleve $eleve){
        $this->uuid = $uuid;
        $this->montant = $montant;
        $this->date = $date;
        $this->$eleve = $eleve;
    }
}