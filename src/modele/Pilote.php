<?php

class Pilote
{   private $id;
    private $nom;
    private $prenom;
    private $salaire;
    private $rue;
    private $cp;
    private $ville;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getRue()
    {
        return $this->rue;
    }

    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function afficherVol($bdd)
    {
        $req = $bdd->prepare("SELECT pilote.*,vol.* FROM pilote INNER JOIN vol ON pilote.id_pilote=vol.ref_pilote WHERE pilote.id_pilote=:id_pilote");
        $res = $req->execute(array(
            'id' => $_POST['id_pilote']
        ));
        $res = $req->fetch();
    }

    public function insertPilote($bdd){
        $req = $bdd->prepare("SELECT * FROM pilote WHERE nom=:nom, prenom =:prenom, rue=:rue");
        $res = $req->execute(array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'rue' => $_POST['rue']
        ));
        $res = $req->fetch();
        if ($res) {
            echo "<script>alert('Pilote existant');
                window.location.href='../vue/form_pilote_insert.php';</script>";
        } else {
            $req = $bdd->prepare("INSERT INTO pilote(nom, prenom, rue, cp, ville, salaire) VALUES (:nom, :prenom, :rue, :cp, :ville, :salaire)");
            $res = $req->execute(array(
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'rue' => $this->rue,
                'cp' => $this->cp,
                'ville' => $this->ville,
                'salaire' => $this->salaire
            ));
            if ($res) {
                echo "<script>alert('Pilote enregistrée');
                window.location.href='../vue/form_pilote_insert.php';</script>";
            } else {
                echo "<script>alert('Erreur');
                window.location.href='../vue/form_pilote_insert.php';</script>";
            }
        }
    }

    public function updatePilote($bdd){
        $req = $bdd->prepare("UPDATE pilote SET nom=:nom, prenom=:prenom, rue=:rue, cp=:cp, ville=:ville, salaire=:salaire WHERE id_pilote=:id_pilote");
        $res = $req->execute(array(
            'id_pilote' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'rue' => $this->rue,
            'cp' => $this->cp,
            'ville' => $this->ville,
            'salaire' => $this->salaire
        ));
        if ($res) {
            echo "<script>alert('Enregistré!');
                window.location.href='../vue/form_pilote_update.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_pilote_update.php';</script>";
        }
    }

    public function deletePilote($bdd){
        $req = $bdd->prepare("DELETE FROM pilote WHERE id_pilote=:id_pilote");
        $res = $req->execute(array(
            'id_pilote' => $this->id
        ));
        if ($res) {
            echo "<script>alert('La pilote est supprimé!');
                window.location.href='../vue/form_pilote_delete.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_pilote_delete.php';</script>";
        }
    }
}