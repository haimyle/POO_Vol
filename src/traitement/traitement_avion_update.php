<?php
require_once "../modele/Avion.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$pilote = new Pilote(array(
    'Id' => $_POST['id_avion'],
    'Nom' => $_POST['nom'],
    'Capacite' => $_POST['capacite'],
    'Fournisseur' => $_POST['fournisseur']
));
$pilote->updateAvion($bdd->getBdd());
