<?php
require_once "../modele/Avion.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$avion = new Avion(array(
    'Nom' => $_POST['nom'],
    'Capacite' => $_POST['capacite'],
    'Fournisseur' => $_POST['fournisseur']
));
$avion->insertAvion($bdd->getBdd());