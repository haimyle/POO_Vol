<html>
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=hme_php_vol;charset=utf8',
    'root', '');
?>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
</head>
<body>
<form method="post" action="ajout_traitement.php">
    <div>
        <label>Date de depart</label>
        <input type="date" name="date_depart" id="date" value="Date de depart">
    </div>
    <div>
        <label>Heure d'arrivé</label>
        <input type="time" name="heure_arrivee" id="arrival" value="Heure d'arrive">
    </div>
    <div>
        <label>Heure de depart</label>
        <input type="time" name="heure_depart" id="depart" value="Heure de depart">
    </div>
    <div>
        <label>ID Pilote</label>
        <select name="ref_pilote" id="ref_pilote">
            <option></option>
           <?php
            $req = $bdd->query('SELECT * FROM pilote');
            while($res=$req->fetch()){
                ?>
                <option value="<?php $res['id_pilote'];?>"><?php echo $res['id_pilote'].". ".$res['nom']." ".$res['prenom']?> </option>
                <?php
            }
            ?>
            </select>
    </div>
        <label>ID Avion</label>
        <select name="ref_avion" id="ref_avion">
            <option></option>
            <?php
            $req = $bdd->query('SELECT * FROM avion');
            while($res=$req->fetch()){
                ?>
                <option value="<?php $res['id_avion'];?>"><?php echo $res['id_avion'].". ".$res['nom']?> </option>
                <?php
            }
            ?>
        </select><br>
    <div>
        <input type="submit" name="ajout" value="Enregistrer">
    </div>


</body>
</html>


