<?php

class Salaire {
    private string $uuid;
    private int $montant;
    private DateTime $date;

    public function __construct(string $uuid, int $montant, DateTime $date = null){
        $this->uuid = $uuid;
        $this->montant = $montant;
        $this->date = $date;
    }
}