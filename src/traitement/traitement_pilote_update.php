<?php
require_once "../modele/Pilote.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
$pilote = new Pilote(array(
    'Id' => $_POST['id_pilote'],
    'Nom' => $_POST['nom'],
    'Prenom' => $_POST['prenom'],
    'Rue' => $_POST['rue'],
    'Cp' => $_POST['cp'],
    'Ville' => $_POST['ville'],
    'Salaire' => $_POST['salaire']
));
$pilote->updatePilote($bdd->getBdd());