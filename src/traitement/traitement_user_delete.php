<?php
//session_start();
require_once "../bdd/Bdd.php";
require_once "../modele/User.php";

$bdd = new Bdd();
$user = new User(array(
    'Id' => $_SESSION['id_user'],
));
//var_dump($_SESSION['id_user']);
$user->deleteUser($bdd->getBdd());



