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

    public function insertVol($date_depart, $heure_depart, $heure_arrivee, $ref_pilote, $ref_avion)
    {
        $req = $this->connexion->prepare("INSERT INTO vol(date_depart, heure_depart, heure_arrivee ,ref_pilote, ref_avion) 
        VALUES (:date_depart, :heure_depart, :heure_arrivee, :ref_pilote, :ref_avion)");
        $res = $req->execute(array(
            ':date_depart' => $date_depart,
            ':heure_depart' => $heure_depart,
            ':heure_arrivee' => $heure_arrivee,
            ':ref_pilote' => $ref_pilote,
            ':ref_avion' => $ref_avion
        ));
        if ($res){
            echo '<script>alert("Le vol est enregistré")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }

    }

    public function updateVol($date_depart, $heure_depart, $heure_arrivee, $ref_pilote, $ref_avion, $id_vol)
    {
        $req = $this->connexion->prepare("UPDATE vol SET date_depart =:date_depart, heure_depart =:heure_depart, heure_arrivee =:heure_arrivee, ref_pilote =:ref_pilote, ref_avion=:ref_avion WHERE id_vol=:id_vol");
        $res = $req->execute(array(
            ':date_depart' => $date_depart,
            ':heure_depart' => $heure_depart,
            ':heure_arrivee' => $heure_arrivee,
            ':ref_pilote' => $ref_pilote,
            ':ref_avion' => $ref_avion,
            ':id_vol' => $id_vol
        ));


        if ($res){
            echo '<script>alert("Le vol est mis à jour")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }
    public function deleteVol($id_vol)
    {
        $req = $this->connexion->prepare("DELETE FROM vol WHERE id_vol=:id_vol");
        $res = $req->execute(array(
            ':id_vol' => $id_vol
        ));
        if ($res){
            echo '<script>alert("Le vol est supprimé")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }
}