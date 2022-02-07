<?php
require_once "../bdd/Bdd.php";
require_once "../modele/User.php";

$user = new User($_POST['email'],$_POST['password']);
