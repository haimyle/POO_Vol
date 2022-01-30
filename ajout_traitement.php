<?php
require_once "Vol.php";
$vol = new Vol();
$vol->insertVol($_POST['date_depart'],$_POST['heure_depart'],$_POST['heure_arrivee'],$_POST['ref_pilote'],$_POST['ref_avion']);



