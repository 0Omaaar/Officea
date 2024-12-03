<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Officea - Tarifs</title>

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
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@100;200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

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
                <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="officea"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">Home</a>

                    </li>
                    <li>
                        <a href="{{ route('a_propos') }}">À Propos</a>
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
                                <li><a href="tel:+3223157452" class="header-call"><i class="fas fa-phone"></i>+32 2
                                        315 74 52</a></li>
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
                                    <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="officea"></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('a_propos') }}">À Propos</a>
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
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
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
            <h1 class="breadcumb-title">Tarification</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Tarifs</li>
            </ul>
        </div>
    </div>
    <!--==============================
tarifs Area
==============================-->
    <section class="space position-relative">
        <div class="container" style="margin-top: -115px;">
            <div class="row justify-content-md-between align-items-end">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="big-title">T.</span>
                        <h2 class="sec-title">Nos
                            <span class="text-theme">Tarifs</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto mt-n4 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="sec-btn">
                        <a href="{{ route('notre_offre') }}" class="link-btn">Voir Nos Offres</a>
                    </div>
                </div>
            </div>
            <div class="blog-card-wrap">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/project/project_2_1.jpg') }}" alt="blog image">
                    </div>
                    <span class="blog-count h2">01</span>
                    <div class="blog-meta style2">
                        <a href="blog.html">GARANTIE
                        </a>
                        <a href="blog.html">0€</a>
                    </div>
                    <p class="blog-text">??</p>
                    <a href="https://www.yelomex.com/_files/ugd/3fa1a3_d235fa721e424aa081e44b63db18e100.pdf"
                        target="__blank" class="link-btn">Voir ma 1ère Facture</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/project/project_2_2.jpg') }}" alt="blog image">
                    </div>
                    <span class="blog-count h2">02</span>
                    <div class="blog-meta style2">
                        <a href="blog.html">55€/MOIS</a>
                        <a href="blog.html">HTVA</a>
                    </div>
                    <p class="blog-text">
                        - Domiciliation de votre siège social. </br>
                        - Gestion complète de votre courrier.
                    </p>
                    <a href="{{ route('notre_offre') }}" target="__blank" class="link-btn">Voir Plus sur l'Offre</a>
                </div>
                <div class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/project/project_2_3.jpg') }}" alt="blog image">
                    </div>
                    <span class="blog-count h2">03</span>
                    <div class="blog-meta style2">
                        <a href="blog.html">GARANTIE
                        </a>
                        <a href="blog.html">0€</a>
                    </div>
                    <p class="blog-text">??</p>
                    <a href="https://www.yelomex.com/_files/ugd/3fa1a3_d235fa721e424aa081e44b63db18e100.pdf"
                        target="__blank" class="link-btn">Voir ma 1ère Facture</a>
                </div>
            </div>
        </div>
        <div class="body-shape1">
            <img src="assets/img/shape/shape_2.png" alt="shape">
        </div>
    </section>

    <!--==============================
Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout3">
        <div class="widget-area">
            <div class="container">
                <div class="text-center mb-40 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('home') }}">
                        <img src="assets/img/logo2.svg" alt="officea">
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
                <p class="footer-info2 wow fadeInUp" data-wow-delay="0.3s">RUE JEAN-BAPTISTE VANDENDRIESCH 12 1082
                    BERCHEM-SAINTE-AGATHE</p>
                <p class="footer-info2 wow fadeInUp" data-wow-delay="0.3s"><a href="mailto:">CONTACT@OFFICEA.BE</a><a
                        href="tel:+3223157452">+32 2 315 74 52</a></p>
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
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
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

</html>
