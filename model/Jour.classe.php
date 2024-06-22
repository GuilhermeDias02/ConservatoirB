<?php

class Jour {
    private string $uuid;
    private string $jour;

    public function __construct(string $uuid, string $jour){
        $this->uuid = $uuid;
        $this->jour = $jour;
    }
}