<?php
require_once __DIR__."/../model/Instrument.classe.php";
require_once __DIR__."/../model/Niveau.classe.php";

class UpdateClasse implements JsonSerializable{
    private string $libelle;
    private string $description;
    private array $eleves;
    private Instrument $instrument;
    private Niveau $niveau;

    public function __construct(string $libelle, string $description, array $eleves, Instrument $instrument, Niveau $niveau){
        $this->libelle = $libelle;
        $this->description = $description;
        $this->eleves = $eleves;
        $this->instrument = $instrument;
        $this->niveau = $niveau;
    }
    
    public function jsonSerialize(){
        return get_object_vars($this);
    }
}