<?php


class Vol
{
    private $date_depart;
    private $heure_arrivee;
    private $heure_depart;
    private $ref_pilote;
    private $ref_avion;

    public function __construct(array $donnees){
        $this-> hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    public function getIdVol()
    {
        return $this->id_vol;
    }

    public function setIdVol($id_vol)
    {
        $this->id_vol = $id_vol;
    }
    private $id_vol;

    public function getDateDepart()
    {
        return $this->date_depart;
    }

    public function setDateDepart($date_depart)
    {
        $this->date_depart = $date_depart;
    }

    public function getHeureArrivee()
    {
        return $this->heure_arrivee;
    }

    public function setHeureArrivee($heure_arrivee)
    {
        $this->heure_arrivee = $heure_arrivee;
    }

    public function getHeureDepart()
    {
        return $this->heure_depart;
    }

    public function setHeureDepart($heure_depart)
    {
        $this->heure_depart = $heure_depart;
    }

    public function getRefPilote()
    {
        return $this->ref_pilote;
    }

    public function setRefPilote($ref_pilote)
    {
        $this->ref_pilote = $ref_pilote;
    }

    public function getRefAvion()
    {
        return $this->ref_avion;
    }

    public function setRefAvion($ref_avion)
    {
        $this->ref_avion = $ref_avion;
    }

    public function insertVol($bdd){
        $req = $bdd->prepare("INSERT INTO vol(date_depart, heure_depart, heure_arrivee ,ref_pilote, ref_avion) 
        VALUES (:date_depart, :heure_depart, :heure_arrivee, :ref_pilote, :ref_avion)");
        $res = $req->execute(array(
            'date_depart' => $this->date_depart,
            'heure_depart' => $this->heure_depart,
            'heure_arrivee' => $this->heure_arrivee,
            'ref_pilote' => $this->ref_pilote,
            'ref_avion' => $this->ref_avion
        ));
        if ($res){
            echo '<script>alert("Le vol est enregistré")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }

    public function updateVol($bdd){
        $req = $bdd->prepare("UPDATE vol SET date_depart =:date_depart, heure_depart =:heure_depart, heure_arrivee =:heure_arrivee, ref_pilote =:ref_pilote, ref_avion=:ref_avion WHERE id_vol=:id_vol");
        $res = $req->execute(array(
            'date_depart' => $this->date_depart,
            'heure_depart' => $this->heure_depart,
            'heure_arrivee' => $this->heure_arrivee,
            'ref_pilote' => $this->ref_pilote,
            'ref_avion' => $this->ref_avion,
            'id_vol' => $this->id_vol
        ));
        if ($res){
            echo '<script>alert("Le vol est mis à jour")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }

    public function deleteVol($bdd){
        $req = $bdd->prepare("DELETE FROM vol WHERE id_vol=:id_vol");
        $res = $req->execute(array(
            'id_vol' => $this->id_vol
        ));
        if ($res){
            echo '<script>alert("Le vol est supprimé")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }
}