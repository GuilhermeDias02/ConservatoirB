<?php
require_once __DIR__ . "/Utilisateur.class.php";

class Eleve
{
    private string $uuid;
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private bool $soi_meme;
    private bool $demande_inscription;
    private Utilisateur $utilisateur;

    private function __construct(string $uuid, string $nom, string $prenom, DateTime $date_naissance, bool $soi_meme, bool $demande_inscription, Utilisateur $utilisateur)
    {
        $this->uuid = $uuid;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->soi_meme = $soi_meme;
        $this->demande_inscription = $demande_inscription;
    }

    public static function getAll()
    {
        $url = api_url;

        // $html = file_get_contents($url);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$url",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $json = json_decode($response, true);

        return $json;
    }
}