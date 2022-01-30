<?php
        try {
           $connexion = new PDO('mysql:host=localhost;dbname=hme_php_vol;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $connexion->prepare("INSERT INTO vol (date_depart, heure_depart, heure_arrivee ,ref_pilote, ref_avion)
        VALUES (:date_depart, :heure_depart, :heure_arrivee, :ref_pilote, :ref_avion)");
        $req->execute(array(
            'date_depart' => $_POST['date_depart'],
            'heure_depart' => $_POST['heure_depart'],
            'heure_arrivee' => $_POST['heure_arrivee'],
            'ref_pilote' => $_POST['ref_pilote'],
            'ref_avion' => $_POST['ref_avion']
        ));
