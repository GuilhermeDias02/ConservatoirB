<?php
require_once __DIR__."/Instrument.class.php";
require_once __DIR__."/Niveau.class.php";

class Classe {
    private string $uuid;
    private string $libelle;
    private string $description;
    private Instrument $instrument;
    private Niveau $niveau;

    public function __construct(string $uuid, string $libelle, string $description = null, Instrument $instrument, Niveau $niveau){
        $this->uuid = $uuid;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->instrument = $instrument;
        $this->niveau = $niveau;
    }
}