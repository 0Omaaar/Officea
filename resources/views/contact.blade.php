<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Officea - Contact Us</title>

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
        <div class="breadcumb-wrapper  " data-bg-src="assets/img/breadcumb/breadcumb-bg-3.png">
            <h1 class="breadcumb-title">Contactez-nous</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
    <!--==============================
contact Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="space-bottom">
                <div class="footer-info-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row gx-0 justify-content-between">
                        <div class="col-lg-4 col-sm-auto">
                            <div class="footer-box" style="padding-top: 35px; margin-left: 55px;">
                                <h6 class="footer-info has-icon">
                                    <i class="far fa-envelope"></i>
                                    <a class="link" href="mailto:CONTACT@OFFICEA.BE">CONTACT@OFFICEA.BE</a>
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md order-3 order-md-0">
                            <div class="footer-box" style="padding-top: 35px; margin-left: 55px;">
                                <h6 class="footer-info has-icon">
                                    <i class="far fa-phone"></i>
                                    <a class="link" href="tel:+3223157452">
                                        +32 2 315 74 52</a>
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-auto">
                            <div class="footer-box">
                                <h6 class="footer-info has-icon">
                                    <i class="far fa-location-dot"></i>
                                    <a class="link" href="https://www.google.com/maps">ORUE JEAN-BAPTISTE
                                        VANDENDRIESCH 12 1082 BERCHEM-SAINTE-AGATHE</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-6 mb-5 mb-xl-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <span class="h6 mt-n2 mb-3 text-theme">Contact Us</span>
                    <h2 class="sec-title mb-45">Avez-vous besoin d'aide ? <br>Envoyer <span class="text-theme">Un
                            Message.</span></h2>
                    <form action="mail.php" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Votre Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="number" id="number"
                                    placeholder="Votre Numéro de téléphone">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Sujet">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Votre Adresse Email">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Votre Message"></textarea>
                            </div>
                            <div class="form-btn col-12 mt-10">
                                <button class="th-btn"><span class="line left"></span> Contacter Nous <span
                                        class="line"></span></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.334767927964!2d4.293168400000001!3d50.8620019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c145c162f67b%3A0x1cdbd3ac055d974e!2sRue%20Jean-Baptiste%20Vandendriesch%2012%2C%201082%20Berchem-Sainte-Agathe%2C%20Belgique!5e0!3m2!1sfr!2sma!4v1732803672693!5m2!1sfr!2sma"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section><!--==============================
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
