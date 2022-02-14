<?php
session_start();
require_once "../bdd/Bdd.php";
require_once "../modele/User.php";

$bdd = new Bdd();

$user = new User(array(
    'Email' => $_POST['email'],
    'Password' => $_POST['password']
));
$user->connexionUser($bdd->getBdd());



