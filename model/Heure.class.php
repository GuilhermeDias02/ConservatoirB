<?php

class Heure {
    private string $uuid;
    private string $tranche;
    
    public function __construct(string $uuid, string $tranche){
        $this->uuid = $uuid;
        $this->tranche = $tranche;
    }
}