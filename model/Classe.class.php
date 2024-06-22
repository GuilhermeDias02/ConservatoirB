<?php
require_once __DIR__."/Instrument.classe.php";
require_once __DIR__."/Niveau.classe.php";

class Classe {
    private string $uuid;
    private string $libelle;
    private string $description;
    private array $eleves;
    private Instrument $instrument;
    private Niveau $niveau;

    public function __construct(string $uuid, string $libelle, string $description = null, array $eleves = null, Instrument $instrument, Niveau $niveau){
        $this->uuid = $uuid;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->eleves = $eleves;
        $this->instrument = $instrument;
        $this->niveau = $niveau;
    }
}