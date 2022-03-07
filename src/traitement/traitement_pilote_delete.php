<?php
require_once "../modele/Pilote.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$pilote = new Pilote(array('Id' => $_POST['id_pilote']));
$pilote->deletePilote($bdd->getBdd());