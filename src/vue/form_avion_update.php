<!doctype html>
<?php
require_once "../bdd/Bdd.php";

$bdd = new Bdd();
?>
<html lang="fr">
<head>
    <title>Login 10</title>
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
    <style>
        select:focus {
            min-width: 150px;
            width: auto;
        }
    </style>
    </style>

</head>
<body class="img js-fullheight" style="background-image: url(../../assets/user/images/hoian.jpg);">
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
                                            <a href="#">Gestion de Pilots</a>
                                            <ul class="dropdown">
                                                <li><a href="../vue/form_pilote_insert.php">Ajout</a></li>
                                                <li><a href="../vue/form_pilote_update.php">Modification</a></li>
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
                <h1 class="heading-section">MODIFICATION</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form action="../traitement/traitement_pilote_update.php" method="post" class="signin-form">
                        <div class="form-group">
                            <select class="form-control" name="id_avion" id="id_avion">
                                <option></option>
                                <?php
                                $req = $bdd->getBdd()->query('SELECT * FROM avion');
                                while($res=$req->fetch()){
                                    ?>
                                    <option value="<?php echo $res['id_avion'];?>">
                                        <?php echo $res['id_avion'].".  ".$res['nom'].'( Capacité: '.$res['capacite'].
                                            '- Fournisseur: '.$res['fournisseur'] .' )';?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="capacite" class="form-control" placeholder="Capacite" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="fournisseur" class="form-control" placeholder="Fournisseur" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-light submit px-3">Modifier</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="../../assets/user/js/jquery.min.js"></script>
<script src="../../assets/user/js/popper.js"></script>
<script src="../../assets/user/js/bootstrap.min.js"></script>
<script src="../../assets/user/js/main.js"></script>

</body>
</html>

<?php
