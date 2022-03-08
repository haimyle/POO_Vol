<!doctype html>
<?php
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
?>
<html lang="fr">
<head>
    <title>Login 10</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"></link>
    <script type="text/javascript" src="http: //cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"></link>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable()
        });
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/home/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/home/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/home/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../../assets/home/css/style.css">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../assets/user/css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url(../../assets/user/images/cloud.jpg);">
<
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-flex mr-auto">
                        <a href="#" class="d-flex align-items-center mr-4">
                            <span class="icon-envelope mr-2"></span>
                            <span class="d-none d-md-inline-block">info@lprs.fr</span>
                        </a>
                        <a href="#" class="d-flex align-items-center mr-auto">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="mr-auto">
                        <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <h1 class="my-0 site-logo"><a href="../../index.php">LPRS AIR</a></h1>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                          class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li class="active"><a href="#home-section" class="nav-link">Accueil</a></li>
                                <li class="has-children">
                                    <a href="#" class="nav-link">Admin</a>
                                    <ul class="dropdown arrow-top">
                                        <li class="has-children">
                                            <a href="#">Gestion de Vols</a>
                                            <ul class="dropdown">
                                                <li><a href="form_vol_insert.php">Ajout</a></li>
                                                <li><a href="form_vol_update.php">Modification</a></li>
                                                <li><a href="form_vol_delete.php">Suppression</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Gestion de Pilotes</a>
                                            <ul class="dropdown">
                                                <li><a href="../vue/form_pilote_insert.php">Ajout</a></li>
                                                <li><a href="../vue/form_pilote_update.php">Modification</a></li>
                                                <li><a href="../vue/form_pilote_afficherVol.php">Affichage de Vols</a>
                                                </li>
                                                <li><a href="../vue/form_pilote_delete.php">Suppression</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Gestion d'Avions</a>
                                            <ul class="dropdown">
                                                <li><a href="form_avion_insert.php">Ajout</a></li>
                                                <li><a href="form_avion_update.php">Modification</a></li>
                                                <li><a href="form_avion_delete.php">Suppression</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../traitement/traitement_user_deconnexion.php" class="nav-link">Se
                                                deconnecter</a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="#about-section" class="nav-link">Qui sommes nous</a></li>-->
                                <li><a href="#" class="nav-link">Paramètres</a></li>
                                <li><a href="#" class="nav-link">Dashboard</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center mb-5">
                <h1 class="heading-section">PILOTES - VOLS</h1>
            </div>
        </div>
        <form action="../traitement/traitement_pilote_afficherVol.php" method="post" class="signin-form">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control btn btn-light submit px-3" name="id_pilote" id="id_pilote">
                                    <option>CHOISIR UNE PILOTE</option>
                                    <?php
                                    $req = $bdd->getBdd()->query('SELECT * FROM pilote');
                                    while ($res = $req->fetch()) {
                                        ?>
                                        <option value="<?php echo $res['id_pilote']; ?>"><?php echo $res['id_pilote'] . ". " .
                                                $res['nom'] . " " . $res['prenom']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <span class="select-arrow"></span>
                                <span class="form-label"><br>></span>
                                <button type="submit" name="choisir" class="form-control btn btn-light submit px-3">CHOISIR</button>
                                >
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-8" style="background-color:rgba(255,255,255)">
                            <table style="color: black " id="myTable">
                                <thead>
                                <tr>
                                    <th>Pilote</th>
                                    <th>ID Vol</th>
                                    <th>Date Depart</th>
                                    <th>Heure Depart</th>
                                    <th>Heure Arrivée</th>
                                </tr>
                                <tbody>
                                <?php
                                $req = $bdd->getBdd()->query("SELECT pilote.*,vol.* FROM pilote INNER JOIN vol ON pilote.id_pilote=vol.ref_pilote");
                                $req->execute();
                                $toto = $req->fetchAll();
                                //  var_dump($res);exit();
                                //while ($res=$req->fetch()) {
                                    foreach ($toto as $res){
                                    ?>
                                    <tr>
                                        <td><?php echo $res['id_pilote'].'. '. $res['nom'] . ' ' . $res['prenom']; ?></td>
                                        <td><?php echo $res['id_vol'];?></td>
                                        <td><?php echo $res['date_depart'];?></td>
                                        <td><?php echo $res['heure_depart'];?></td>
                                        <td><?php echo $res['heure_arrivee'];?></td>
                                    </tr>
                                <?php }?>

                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
</section>


<!--script src="../../assets/user/js/jquery.min.js"></script>
<script src="../../assets/user/js/popper.js"></script>
<script src="../../assets/user/js/bootstrap.min.js"></script>
<script src="../../assets/user/js/main.js"></script-->

</body>
</html>

