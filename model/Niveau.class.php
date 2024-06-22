<?php

class Niveau {
    private string $uuid;
    private int $niveau;

    public function __construct(string $uuid, int $niveau){
        $this->uuid = $uuid;
        $this->niveau = $niveau;
    }
}