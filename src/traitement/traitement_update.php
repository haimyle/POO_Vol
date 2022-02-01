<?php
require_once "../bdd/bdd.php";

$vol = new Vol();
$vol->updateVol($_POST['date_depart'],$_POST['heure_depart'],$_POST['heure_arrivee'],$_POST['ref_pilote'],$_POST['ref_avion'],$_POST['id_vol']);


