<?php


class Vol
{
    private $connexion;
    private $arrivalDate;
    private $arrivalHour;
    private $departHour;

    public function __construct()
    {
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=hme_php_vol;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function insertVol($date_depart,$heure_depart,$heure_arrivee,$ref_pilote,$ref_avion){
        $req = $this->connexion->prepare("INSERT INTO vol(date_depart, heure_depart, heure_arrivee ,ref_pilote, ref_avion) 
        VALUES (:date_depart, :heure_depart, :heure_arrivee, :ref_pilote, :ref_avion)");
        $req->execute(array(
            ':date_depart' => $date_depart,
            ':heure_depart' => $heure_depart,
            ':heure_arrivee' => $heure_arrivee,
            ':ref_pilote' => $ref_pilote,
            ':ref_avion' => $ref_avion
        ));
    }
}