<?php

class LoginDto implements JsonSerializable{
    private string $email;
    private string $mdp;

    public function __construct(string $email, string $mdp){
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}