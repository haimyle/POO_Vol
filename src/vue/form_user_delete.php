<?php
session_start();
?>
    <!doctype html>
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

    </head>
    <body class="img js-fullheight" style="background-image: url(../../assets/user/images/tibet.jpg);">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


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
                <div class="row align-items-center mb-2">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="index_user.php">LPRS AIR</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                              class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">

                                    <li class="has-children">
                                        <a href="#" class="nav-link">Bienvenue <?php echo $_SESSION['prenom'];?></a>
                                        <ul class="dropdown arrow-top">
                                            <!--<li class="has-children">
                                                <a href="#">Gestion de Compte</a>
                                                <ul class="dropdown">
                                                    <li><a href="#"></a></li>
                                                </ul>
                                            </li>-->
                                            <li><a href="../vue/form_user_update.php" class="nav-link">Supprimer</a></li>
                                            <li><a href="../vue/form_user_update.php" class="nav-link">Modifier</a></li>
                                            <li><a href="../traitement/traitement_user_deconnexion.php" class="nav-link">Se deconnecter</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="#home-section" class="nav-link">Réserver</a></li>
                                    <li><a href="#about-section" class="nav-link">Enregistrement</a></li>
                                    <li><a href="#about-section" class="nav-link">Mes voyages</a></li>
                                    <li><a href="#about-section" class="nav-link">Actualités des vols </a></li>
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
                <div class="col-md-6 text-center mb-2">
                    <br>
                    <h1 class="heading-section">SUPPRESION</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="../traitement/traitement_user_delete.php" method="post" class="signin-form">
                            <div class="form-group">
                                <input type="text" readonly="readonly" name="id_user" class="form-control" value=<?php echo $_SESSION['id_user'];?> >
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="return confirm("Êtes-vous sûr de vouloir supprimer votre compte?") class="form-control btn btn-light submit px-3">Supprimer</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../../assets/home/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/home/js/popper.min.js"></script>
    <script src="../../assets/home/js/bootstrap.min.js"></script>
    <script src="../../assets/home/js/jquery.sticky.js"></script>
    <script src="../../assets/home/js/main.js"></script>

    <script src="../../assets/user/js/jquery.min.js"></script>
    <script src="../../assets/user/js/popper.js"></script>
    <script src="../../assets/user/js/bootstrap.min.js"></script>
    <script src="../../assets/user/js/main.js"></script>

    </body>
    </html>

<?php
