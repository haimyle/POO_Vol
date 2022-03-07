<?php
require_once "../modele/Avion.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$avion = new Avion(array('Id' => $_POST['id_avion']));
$avion->deleteAvion($bdd->getBdd());