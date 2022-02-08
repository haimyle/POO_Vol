<?php

require_once "../bdd/Bdd.php";
require_once "../modele/User.php";

$bdd = new Bdd();

$user = new User(array(
    'Nom' => $_POST['nom'],
    'Prenom' => $_POST['prenom'],
    'Email' => $_POST['email'],
    'Password' => $_POST['password']
));
var_dump($user);
$user->inscriptionUser($bdd->getBdd());

