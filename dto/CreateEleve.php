<?php
require_once __DIR__."/../model/Utilisateur.class.php";
require_once __DIR__."/../model/Classe.class.php";

class CreateEleve implements JsonSerializable{
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private bool $soi_meme;
    private bool $demande_inscritpion;
    private Utilisateur $utilisateur;
    private Classe $classe;

    public function __construct(string $nom, string $prenom, DateTime $date_naissance, Utilisateur $utilisateur, bool $soi_meme = false, bool $demande_inscritpion = false, Classe $classe = null){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->soi_meme = $soi_meme;
        $this->demande_inscritpion = $demande_inscritpion;
        $this->utilisateur = $utilisateur;
        $this->classe = $classe;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }

    public function create()
    {
        $json = json_encode($this);

        $url = api_url . "eleve";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
          ));
          

        $response = curl_exec($curl);

        // $json = json_decode($response, true);
        curl_close($curl);
        // echo $response;

        return $response;
    }
}