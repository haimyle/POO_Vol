<?php


class Vol
{
    private $date_depart;
    private $heure_arrivee;
    private $heure_depart;
    private $ref_pilote;
    private $ref_avion;
    private $id;

    /**
     * Vol constructor.
     * @param $date_depart
     * @param $heure_arrivee
     * @param $heure_depart
     * @param $ref_pilote
     * @param $ref_avion
     */
    public function __construct($date_depart, $heure_arrivee, $heure_depart, $ref_pilote, $ref_avion)
    {
        $this->getDateDepart()($date_depart);
        $this->getHeureArrivee($heure_arrivee);
        $this->getHeureDepart($heure_depart) ;
        $this->getRefPilote($ref_pilote);
        $this->getRefAvion($ref_avion);
    }


    /**
     * @return mixed
     */
    public function getDateDepart()
    {
        return $this->date_depart;
    }

    /**
     * @param mixed $date_depart
     */
    public function setDateDepart($date_depart)
    {
        $this->date_depart = $date_depart;
    }

    /**
     * @return mixed
     */
    public function getHeureArrivee()
    {
        return $this->heure_arrivee;
    }

    /**
     * @param mixed $heure_arrivee
     */
    public function setHeureArrivee($heure_arrivee)
    {
        $this->heure_arrivee = $heure_arrivee;
    }

    /**
     * @return mixed
     */
    public function getHeureDepart()
    {
        return $this->heure_depart;
    }

    /**
     * @param mixed $heure_depart
     */
    public function setHeureDepart($heure_depart)
    {
        $this->heure_depart = $heure_depart;
    }

    /**
     * @return mixed
     */
    public function getRefPilote()
    {
        return $this->ref_pilote;
    }

    /**
     * @param mixed $ref_pilote
     */
    public function setRefPilote($ref_pilote)
    {
        $this->ref_pilote = $ref_pilote;
    }

    /**
     * @return mixed
     */
    public function getRefAvion()
    {
        return $this->ref_avion;
    }

    /**
     * @param mixed $ref_avion
     */
    public function setRefAvion($ref_avion)
    {
        $this->ref_avion = $ref_avion;
    }

    public function insertVol($bdd)
    {
        $req = $bdd->prepare("INSERT INTO vol(date_depart, heure_depart, heure_arrivee ,ref_pilote, ref_avion) 
        VALUES (:date_depart, :heure_depart, :heure_arrivee, :ref_pilote, :ref_avion)");
        $res = $req->execute(array(
            ':date_depart' => $this->date_depart,
            ':heure_depart' => $this->heure_depart,
            ':heure_arrivee' => $this->heure_arrivee,
            ':ref_pilote' => $this->ref_pilote,
            ':ref_avion' => $this->ref_avion
        ));
        if ($res){
            echo '<script>alert("Le vol est enregistré")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }

    }

    public function updateVol($bdd)
    {
        $req = $bdd->prepare("UPDATE vol SET date_depart =:date_depart, heure_depart =:heure_depart, heure_arrivee =:heure_arrivee, ref_pilote =:ref_pilote, ref_avion=:ref_avion WHERE id_vol=:id_vol");
        $res = $req->execute(array(
            ':date_depart' => $this->date_depart,
            ':heure_depart' => $this->heure_depart,
            ':heure_arrivee' => $this->heure_arrivee,
            ':ref_pilote' => $this->ref_pilote,
            ':ref_avion' => $this->ref_avion,
            ':id_vol' => $this->id_vol
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