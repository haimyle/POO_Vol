<?php

class Avion
{   private $id;
    private $nom;
    private $capacite;
    private $fournisseur;

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

    public function getCapacite()
    {
        return $this->capacite;
    }

    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    public function setFournisseur($fournisseur)
    {
        $this->fournisseur = $fournisseur;
    }

    public function insertAvion($bdd){
        $req = $bdd->prepare("INSERT INTO avion(nom, capacite, fournisseur) VALUES (:nom, :capacite, :fournisseur)");
        $res = $req->execute(array(
            'nom' => $this->nom,
            'capacite' => $this->capacite,
            'fournisseur' => $this->fournisseur
        ));
        if ($res) {
            echo "<script>alert('Avion enregistrée');
                window.location.href='../vue/form_avion_insert.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_avion_insert.php';</script>";
        }
    }

    public function updateAvion($bdd){
        $req = $bdd->prepare("UPDATE avion SET nom=:nom, capacite=:capacite, fournisseur=:fournisseur WHERE id_avion=:id_avion");
        $res = $req->execute(array(
            'id_avion' => $this->id,
            'nom' => $this->nom,
            'capacite' => $this->capacite,
            'fournisseur' => $this->fournisseur
        ));
        if ($res) {
            echo "<script>alert('Enregistré!');
                window.location.href='../vue/form_avion_update.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_avion_update.php';</script>";
        }
    }

    public function deleteAvion($bdd){
        $req = $bdd->prepare("DELETE FROM avion WHERE id_avion=:id_avion");
        $res = $req->execute(array(
            'id_avion' => $this->id
        ));
        if ($res) {
            echo "<script>alert('L'avion est supprimée!');
                window.location.href='../vue/form_avion_delete.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_avion_delete.php';</script>";
        }
    }
}