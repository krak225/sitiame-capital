<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title>SITIAME CAPITAL - Pour votre investissement gagnant</title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <?php 
        $page = basename($_SERVER['PHP_SELF']);
        if($page == 'index.php'){ 
        ?>
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <?php } ?>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="office-hour">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><span id="today_date"></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="contact-info">
                                <ul>
                                    <li><i class="fa fa-phone"></i> +225 2724523043</li>
                                    <li><i class="fa fa-envelope"></i> contact@sitiame-capital.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""><img src="assets/images/logo.png" alt style="height: 30px; margin-top:10px;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item">
                                <a href="index.php">Accueil</a>
                            </li>
                            <li class="menu-item">
                                <a href="about.php">A propos de nous</a>
                                <!--ul class="sub-menu">
                                    <li><a href="services.html">Notre société</a></li>
                                    <li><a href="service-single.html">Notre équipe</a></li>
                                    <li><a href="oil-lubricant.html">Mot du Directeur Général</a></li>
                                </ul-->
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Nos services</a>
                                <ul class="sub-menu">
                                    <li><a href="conseils.php">Conseils stratégiques</a></li>
                                    <li><a href="fonds.php">Levée de fonds</a></li>
                                    <li><a href="#">Gestion de projets</a></li>
                                    <li><a href="investissements.php">Investissements</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#">Nos références</a>
                                <!--ul class="sub-menu">
                                    <li><a href="projects.html">Banque d'affaire</a></li>
                                    <li><a href="project-sigle.html">Marché des capitaux</a></li>
                                </ul-->
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Médiathèque</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Publications</a></li>
                                    <li><a href="#">Info bourse</a></li>
                                    <li><a href="#">Actualités</a></li>
                                    <li><a href="#">Galérie photo</a></li>
                                    <li><a href="#">Galérie vidéo</a></li>
                                </ul>
                            </li>
                            <li><a href="formulaires.php">Nos formulaires</a></li>
                            <li><a href="contacts.php">Nous contacter</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                   
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->