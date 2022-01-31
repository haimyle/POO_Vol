<?php
require_once "C:\wamp64\www\Hai My\POO_Vol\src\Vol.php";
$vol = new Vol();
$vol->insertVol($_POST['date_depart'],$_POST['heure_depart'],$_POST['heure_arrivee'],$_POST['ref_pilote'],$_POST['ref_avion']);



