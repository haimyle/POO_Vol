<?php
require_once "../modele/Avion.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$avion = new Avion (array(
    'Id' => $_POST['id_avion'],
    'Nom' => $_POST['nom'],
    'Capacite' => $_POST['capacite'],
    'Fournisseur' => $_POST['fournisseur']
));
$avion->updateAvion($bdd->getBdd());
