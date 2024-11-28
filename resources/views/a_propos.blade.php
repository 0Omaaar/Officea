<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artraz - Architecture HTML Template - About Us</title>
    <meta name="author" content="Themeholy">
    <meta name="description" content="Artraz - Architecture HTML Template">
    <meta name="keywords" content="Artraz - Architecture HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@100;200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="">


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="th-cursor"></div><!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="assets/img/logo.svg" alt="Artraz"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">Home</a>

                    </li>
                    <li>
                        <a href="{{ route('a_propos') }}">A propos</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('questions_frequentes') }}">Questions fréquentes</a>

                    </li>
                    <li class="menu-item-has-children">
                    <li><a href="{{ route('notre_offre') }}">Notre offre</a></li>

                    </li>
                    <li class="menu-item-has-children">
                    <li><a href="{{ route('tarifs') }}">Tarifs</a></li>

                    </li>
                    <li class="menu-item-has-children">
                    <li><a href="{{ route('contact') }}">Contact</a></li>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="th-container container">
                <div class="row justify-content-center justify-content-sm-between align-items-center">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><a href="https://www.facebook.com/">facebook</a></li>
                                <li><a href="https://www.linkedin.com/">linkedin</a></li>
                                <li><a href="https://www.instagram.com/">instagram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-sm-block">
                        <div class="header-links">
                            <ul>
                                <li><a href="tel:+3223157452" class="header-call"><i class="fas fa-phone"></i>+32 2 315 74 52</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <!-- Main Menu Area -->
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="Artraz"></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('a_propos') }}">A propos</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('questions_frequentes') }}">Questions fréquentes</a>

                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('notre_offre') }}">Notre offre</a>

                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('tarifs') }}">Tarifs</a>

                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('contact') }}">Contact</a>

                                        </li>

                                    </ul>
                                </nav>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--==============================
    Breadcumb
============================== -->
    <div class="container th-container2">
        <div class="breadcumb-wrapper  " data-bg-src="assets/img/breadcumb/breadcumb-bg-2.png">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>

    <!--==============================
About Area  
==============================-->
<section class="space">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-5 col-lg-6">
                    <div class=" mb-5 mb-lg-0">
                        <img class="w-100" src="assets/img/project/project_details.jpg" alt="project">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="project-details">
                        <span class="sub-title">Une  affaire de  famille </span>
                        <h2 class="sec-title fw-normal mb-40">Quelques mots A PROPOS
                            <span class="text-theme">de NOUS</span>
                        </h2>
                        <div class="project-content">
                            <p class="mb-20">Officea est le fruit d'une collaboration entre deux entrepreneuses ayant une solide expérience dans le domaine comptable. Avant de se lancer dans cette aventure, elles dirigeaient un cabinet comptable et ont rencontré de nombreux entrepreneurs à la recherche d'un business center flexible et abordable. C'est ainsi qu'Officea a vu le jour pour répondre à cette demande croissante.</p>
                            
                        <h3 class="sec-title fw-normal mb-40">Un bureau 
                            <span class="text-theme">agrémenté</span>
                        </h3>
                        <p class="mb-20">L'article 6 de la loi du 28 mars 2018 portant sur l'enregistrement des prestataires de services aux sociétés oblige toute entreprise offrant des services de domiciliation commerciale à s'enregistrer auprès du SPF ECONOMIE. L'obtention de cet agrément suppose la mise en conformité des bureaux. Soucieuse de fournir une sécurité juridique à ses clients, Officea fut parmi les premières entreprises belges à obtenir cet enregistrement.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<!--==============================
Testimonial Area  
==============================-->
    
    <!--==============================
Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout3">
        <div class="widget-area">
            <div class="container">
                <div class="text-center mb-40 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('home') }}">
                        <img src="assets/img/logo2.svg" alt="Artraz">
                    </a>
                </div>
                <div class="footer-menu wow fadeInUp" data-wow-delay="0.2s">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('a_propos') }}">A propos</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('questions_frequentes') }}">Questions fréquentes</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('notre_offre') }}">Notre offre</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('tarifs') }}">Tarifs</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('contact') }}">Contact</a>

                        </li>
                    </ul>
                </div>
                <p class="footer-info2 wow fadeInUp" data-wow-delay="0.3s">RUE JEAN-BAPTISTE VANDENDRIESCH 12 1082 BERCHEM-SAINTE-AGATHE</p>
                <p class="footer-info2 wow fadeInUp" data-wow-delay="0.3s"><a href="mailto:">CONTACT@OFFICEA.BE</a><a href="tel:+3223157452">+32 2 315 74 52</a></p>
                <div class="th-social mt-25 wow fadeInUp" data-wow-delay="0.3s">
                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright By © <a href="index.html">Officea</a> - 2024</p>
            </div>
        </div>
    </footer>


    <!--********************************
			Code End  Here 
	******************************** -->


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Tilt Js -->
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Wow Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>


<!-- <p class="sub-title">Nos services s’adressent à :</p>
                    <p class="mb-40">Toutes les sociétés et associations belges qui cherchent une solution fiable et sécurisée pour leur domiciliation.

                        Les entreprises, filiales, succursales, ou organismes de représentation souhaitant disposer d’une adresse prestigieuse au cœur de l’Europe, tout en optimisant leurs coûts opérationnels.

                        Les entrepreneurs et dirigeants qui voyagent ou travaillent à l’étranger et qui souhaitent recevoir leur courrier à tout moment, en toute sécurité.</p> -->
</html>