<?php
require_once "../modele/Vol.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$vol = new Vol(array('IdVol' => $_POST['id_vol']));
$vol->deleteVol($bdd->getBdd());
