<?php
require_once "../bdd/bdd.php";

$vol = new Vol();
$vol->deleteVol($_POST['id_vol']);
