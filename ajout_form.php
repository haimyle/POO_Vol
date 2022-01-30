<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=hme_php_vol;charset=utf8',
    'root', '');
?>
<head>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"></link>
    <script type="text/javascript" src="http: //cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<form method="post" action="ajout_traitement.php">
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <form>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" name="date_depart" id="date" value="Date de depart">
                                    <span class="form-label">Date de depart</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" type="time" name="heure_depart" id="depart" value="Heure de depart" required>
                                    <span class="form-label">Heure de depart</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" type="time" name="heure_arrivee" id="arrival" value="Heure d'arrive" required>
                                    <span class="form-label">Heure d'arrivé</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="ref_pilote" id="ref_pilote">
                                        <option></option>
                                        <?php
                                        $req = $bdd->query('SELECT * FROM pilote');
                                        while($res=$req->fetch()){
                                            ?>
                                            <option value="<?php echo $res['id_pilote'];?>"><?php echo $res['id_pilote'].". ".$res['nom']." ".$res['prenom']?> </option>
                                        <?php } ?>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">ID Pilote</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="ref_avion" id="ref_avion">
                                        <option></option>
                                        <?php
                                        $req = $bdd->query('SELECT * FROM avion');
                                        while($res=$req->fetch()){
                                            ?>
                                            <option value="<?php echo $res['id_avion'];?>"><?php echo $res['id_avion'].". ".$res['nom']?> </option>
                                        <?php } ?>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">ID Avion</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-btn">
                                    <button class="submit-btn">Enregistrer</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-btn">
                                    <button class="submit-btn" onclick="https://datatables.net/">Afficher vols</button>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn" onclick="">Afficher avions & pilotes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>