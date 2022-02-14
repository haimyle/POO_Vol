<?php
require_once "../modele/User.php";
require_once "../bdd/Bdd.php";

$bdd = new Bdd();

$user = new User(array(
    'Id'=>$_POST['id_user'],
    'Nom'=>$_POST['nom'],
    'Prenom'=>$_POST['prenom'],
    'Email'=>$_POST['email'],
    'Password' => $_POST['password']

    ));
$user->updateUser($bdd->getBdd());
