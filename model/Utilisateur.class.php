<?php
require_once "constants/Role.php";
require_once "conf.php";

class Utilisateur
{
    private string $uuid;
    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $telephone;
    private string $email;
    private string $mdp;
    private ?string $description_prof = null;
    private Role $role;

    // public function __construct(string $uuid, string $nom, string $prenom, string $adresse, string $telephone, string $email, string $mdp, string $description_prof = null, Role $role)
    // {
    //     $this->uuid = $uuid;
    //     $this->nom = $nom;
    //     $this->prenom = $prenom;
    //     $this->adresse = $adresse;
    //     $this->telephone = $telephone;
    //     $this->email = $email;
    //     $this->mdp = $mdp;
    //     $this->description_prof = $description_prof;
    //     $this->role = $role;
    // }

    public function __construct($login_jwt = null)
    {
        list($header, $payload, $signature) = explode('.', $login_jwt);
        $jsonToken = base64_decode($payload);
        $arrayToken = json_decode($jsonToken, true);

        $json = $arrayToken["sub"];
        $url = api_url . "/utilisateur/$json";

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);

        print_r($response);

        $utilisateur = json_decode($response, true);
        $this->uuid = $utilisateur["uuid"];
        $this->nom = $utilisateur["nom"];
        $_SESSION["nom"] = $this->nom;
        $this->prenom = $utilisateur["prenom"];
        $_SESSION["prenom"] = $this->prenom;
        $this->adresse = $utilisateur["adresse"];
        $this->telephone = $utilisateur["telephone"];
        $this->email = $utilisateur["email"];
        $this->description_prof = $utilisateur["description_prof"];
        $this->mdp = $utilisateur["mdp"];
        switch ($utilisateur["role"]) {
            case "Parent":
                $this->role = Role::Parent;
                break;
            case "Prof":
                $this->role = Role::Prof;
                break;
            case "Admin":
                $this->role = Role::Admin;
                break;
            default:
                $this->role = Role::Parent;
                break;
        }
    }

    public function getRole(){
        return $this->role;
    }
}