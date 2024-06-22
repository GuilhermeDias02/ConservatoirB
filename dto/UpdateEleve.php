<?php

class UpdateEleve implements JsonSerializable{
    private bool $soi_meme;
    private bool $demande_inscription;

    public function __construct(bool $soi_meme, bool $demande_inscription){
        $this->soi_meme = $soi_meme;
        $this->demande_inscription = $demande_inscription;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}