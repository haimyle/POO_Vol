<?php
require_once "../Vol.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$vol = new Vol(array(
    'DateDepart' => $_POST['date_depart'],
    'HeureDepart' => $_POST['heure_depart'],
    'HeureArrivee' => $_POST['heure_arrivee'],
    'RefPilote' => $_POST['ref_pilote'],
    'RefAvion' => $_POST['ref_avion']
));
$vol->insertVol($bdd->getBdd());



