<?php

class Instrument {
    private string $uuid;
    private string $libelle;

    public function __construct(string $uuid, string $libelle){
        $this->uuid = $uuid;
        $this->libelle = $libelle;
    }
}