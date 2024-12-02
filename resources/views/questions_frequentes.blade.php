<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Officea Home</title>

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

    <style>
        @media only screen and (max-width: 768px) {
            .qstsImages {
                display: none !important;
            }
        }

        section.space h5.title {
            color: #f3d590;
        }

        .qstsImages {
            margin-top: -66%;
        }
    </style>

</head>

<body class="">


    <!--********************************
   Code Start From Here
 ******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
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
        <div class="breadcumb-wrapper  " data-bg-src="assets/img/breadcumb/breadcumb-bg-2.jpg">
            <h1 class="breadcumb-title">Questions Frequentes</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Accueil</a></li>
                <li>Questions Frequentes</li>
            </ul>
        </div>
    </div>
    <!--==============================
Team Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row mb-40 align-items-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="qstsImages">
                        <img class="w-100" src="assets/img/team/team_details.jpg" alt="team image"> </br> </br>
                        <img class="w-100" src="assets/img/team/team_details1.jpg" alt="team image"> </br> </br>
                        <img class="w-100" src="assets/img/team/team_details2.jpg" alt="team image">
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-about">
                        <h2 class="h3 team-about_title"> <span class="text-theme">QUESTIONS FREQUENTES</span>
                            sur la domiciliation d'entreprise <span class="team-about_desig">D'autres
                                question?Facile!</span></h2>
                        <div class="social-box">
                            <p class="title">Contactez-nous par WhatsApp!</p>
                            <div class="th-social">
                                <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                
                            </div>
                        </div>
                        <h5 class="title">Qu'est-ce que la domiciliation?</h5>
                        <p class="mb-20">Toute société enregistrée en Belgique doit disposer d'un siège social
                            physique établi dans le Royaume de Belgique. La domiciliation correspond au siège social de
                            la société, autrement dit, lieu où arrive le courrier de la société et où sont conservés
                            tous les documents légaux de celle-ci (statuts, livres des associés, pièces comptables).</p>
                        <h5 class="title">Comment fonctionne la domiciliation d'entreprise?</h5>
                        <p class="mb-25">Une fois le contrat de domiciliation signé, vous disposez d'une adresse
                            propre à votre société. Le nom de votre société et l'adresse représentent alors les
                            coordonnées commerciales officielles que vous pouvez utiliser partout: site web, flyers,
                            carte de visite, correspondances avec les autorités administratives,....</p>
                        <h5 class="title">Y-a-t'il des conditions à remplir pour pouvoir domicilier sa société?</h5>
                        <p class="mb-25">Pour pouvoir domicilier son siège social, il faut</p>
                        <div class="inner-list mb-40">
                            <ul>
                                <li>Disposer d’une société réelle</li>
                                <li>Posséder un numéro de TVA (sauf nouvelle constitution)</li>
                                <li>Être inscrit à la Banque-carrefour des entreprises belge (BCE)</li>
                                <li>Effectuer la domiciliation pour une durée minimale de trois mois</li>
                            </ul>
                        </div>

                        <h5 class="title">je n'ai pas encore de numéro de TVA, est-ce un problème?</h5>
                        <p class="mb-25">Pas du tout. Beaucoup de nos clients sont dans le cas! Nous remplissons alors
                            la procédure d'inscription sur base du devis (3 mois de services payés d'avance). Vous
                            recevez l'adresse à communiquer au notaire. Dès que vous avez activé votre numéro de TVA,
                            nous transformons le devis en facture. Ceci vous permet de rentrer cette dépenses dans les
                            frais de la société.</p>

                        <h5 class="title">Une personne peut-elle établir son domicile privé dans le centre d'affaires?
                        </h5>
                        <p class="mb-25">Non. Notre service de domiciliation s'adresse aux personnes morales et aux
                            entrepreneurs exerçant une activité professionnelle en tant qu'indépendant.</p>
                        <p class="mb-25">Pourquoi? Pour pouvoir établir son domicile privé en un endroit il faut
                            répondre à des règles précises:</p>
                        <p class="mb-25">Vous devez signaler au service population de votre commune votre nouvelle
                            adresse. Normalement cette déclaration doit être faite dans les 8 jours après le
                            déménagement. La commune lance alors une enquête visant à confirmer que vous avez
                            effectivement établi votre résidence principale à l’adresse que vous avez déclaré. Elle
                            charge un agent de quartier ou un fonctionnaire compétent à vérifier si vous vivez
                            effectivement à l’endroit déclaré.</p>
                        <p class="mb-25">Les critères utilisés par les communes pour apprécier si une personne habite
                            à un endroit sont le suivants:</p>
                        <div class="inner-list mb-40">
                            <ul>
                                <li>la personne vit à cette adresse la plus grande partie de l’année</li>
                                <li>la personne rejoint cette adresse après ses occupations professionnelles</li>
                                <li>c’est le lieu de la fréquentation scolaire des enfants</li>
                                <li>c’est le lieu de facturation des consommations d’énergie (gaz, électricité, eau)
                                </li>
                            </ul>
                            <p class="mb-25">Si ces critères ne sont pas remplis, l'inscription à la commune est
                                radiée.</p>
                            <h5 class="title">Comment obtenir mon courrier?</h5>
                            <p class="mb-25">Différentes solutions s'offrent à vous :</p>
                            <div class="inner-list mb-40">
                                <ul>
                                    <li>Nous ouvrons et scannons votre courrier à l'adresse mail souhaitée</li>
                                    <li>Vous vous présentez au bureau durant les heures d'ouverture afin de collecter
                                        votre courrier</li>
                                    <li>Nous ré-expédions tout votre courrier à l'adresse souhaitée (moyennant frais de
                                        port 1€/timbre HTVA).</li>
                                </ul>
                                <!--  -->
                                <h5 class="title">Quelles démarches doivent être effectuées pour transférer le siège de ma société?</h5>
                                <div class="inner-list mb-40">
                                    <ul>
                                        <li>Activité en tant que personne morale (SPRL, SA, SCS,...) Le transfert de siège social doit faire l'objet d'une décision des représentants de la société via assemblée générale. Ensuite, celle-ci doit être publiée au Moniteur belge. La nouvelle adresse doit également être communiquée à la BCE et à la TVA.</li>
                                        <li>Activité en tant que personne physique (indépendant, indépendant TVA étranger) La nouvelle adresse commerciale doit être communiquée et transcrite à la BCE. Nous pouvons effectuer les démarches en votre nom. (Tarif 150€ HTVA) Plus d'informations:</li>
                                        <li><a href="https://www.yelomex.com/_files/ugd/3fa1a3_637db07edd6649d9a8222dc721b8d3c3.pdf" target="_blank">Version PDF</a></li>
                                        <li><a href="https://www.yelomex.com/_files/ugd/3fa1a3_00767aef4b0a43b8af0491d5f75fb03c.pptx?dn=Descriptif%20publication.pptx" target="_blank">Version Powerpoint</a></li>
                                    </ul>
                                    <h5 class="title">Pouvez-vous réceptionner les recommandés en mon nom?</h5>
                                    <p class="mb-25">Grâce à la procuration postale flexible à usage professionnel de Bpost, nous pouvons recueillir tous vos recommandés en votre nom et vous les faire ensuite parvenir. Moyennant 54.95€, vous recevez une carte de procuration non-nominative qui mandate notre bureau sur une durée de trois ans.</p>

                                    <ul>
                                        <li><a href="http://www.bpost.be/site/fr/solutions-professionnelles/lettres-cartes/recommandes/procuration-postale" target="_blank">Plus d'infos sur la procuration postale à usage professionnel</a></li>
                                    </ul>
                                    <h5 class="title">Domiciliation d’une société, pourquoi faut-il en parler avec votre comptable ?</h5>
                                    <p class="mb-25">Oui car vos frais de domiciliation peuvent être déduit de votre compte de résultat! N’hésitez pas à prendre contact avec notre fiduciaire comptable partenaire</p>
                                    <ul>
                                        <li><a href="https://amarris-direct.be/cabinet/comptable-bruxelles/?utm_source=yelomex&utm_medium=link&utm_campaign=faq" target="_blank">Amarris.be</a></li>
                                    </ul>
                                    <h5 class="title">Le registre des parts doit-il être conservé au siège de la société?</h5>
                                    <p class="mb-25">Oui. Tout tiers intéressé doit pouvoir consulter le registre des parts au siège de la société. Cela signifie que toutes personnes en mesure de démontrer un intérêt pourra prendre connaissance du contenu du registre des parts.Parmi les tiers intéressés, on pourrait citer le SPF Finances, le SPF Economie et d'autres institutions publiques.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="{{ route('contact') }}" class="th-btn"><span class="line left"></span> Quick Contact <span
                                    class="line"></span></a>
                        </div>
                    </div>
                </div>

            </div>


    </section>

    <!--==============================
Testimonial Area
==============================-->
    <div class="space-bottom">
        <div class="container">
            <div class="testi-card-wrap wow fadeInUp" data-wow-delay="0.2s">
                <div class="row testi-card-slide th-carousel" id="testiSlide2" data-slide-show="1" data-fade="true">
                    <div class="col-12">
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="assets/img/testimonial/testi_2_1.jpg" alt="Avater">
                                <div class="testi-card_icon">
                                    <img src="assets/img/testimonial/testi_icon_2.svg" alt="quote icon">
                                </div>
                            </div>
                            <div class="testi-card_content">
                                <p class="h3 testi-card_text">Chaque centime investi chez Officea a été parfaitement
                                    utilisé grâce à leur service professionnel, compétent et à l'écoute. Le suivi de mon
                                    courrier a été géré de manière flexible et efficace, avec une récupération rapide
                                    des recommandés et des solutions adaptées à mes besoins. Un service de qualité qui
                                    vaut vraiment chaque euro investi. Je recommande vivement leurs services !</p>
                                <h6 class="testi-card_desig">PDG chez <span class="text-theme">Just NXT</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="assets/img/testimonial/testi_2_2.jpg" alt="Avater">
                                <div class="testi-card_icon">
                                    <img src="assets/img/testimonial/testi_icon_2.svg" alt="quote icon">
                                </div>
                            </div>
                            <div class="testi-card_content">
                                <p class="h3 testi-card_text">Les services chez Officea sont d'une qualité
                                    exceptionnelle, avec une équipe réactive et à l'écoute. La gestion de mon courrier a
                                    été impeccable, répondant parfaitement à mes besoins, qu'il s'agisse de scans
                                    urgents ou de la récupération de recommandés. Une équipe expérimentée qui offre un
                                    service sur-mesure, parfaitement adapté à mes attentes. Je recommande vivement leurs
                                    services !</p>
                                <h6 class="testi-card_desig">Directeur chez <span class="text-theme">ATK Global</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="testi-card">
                            <div class="testi-card_img">
                                <img src="assets/img/testimonial/testi_2_3.jpg" alt="Avater">
                                <div class="testi-card_icon">
                                    <img src="assets/img/testimonial/testi_icon_2.svg" alt="quote icon">
                                </div>
                            </div>
                            <div class="testi-card_content">
                                <p class="h3 testi-card_text">L'équipe d'Officea est extrêmement compétente, attentive
                                    et professionnelle. Leur service d'architecture et de création de meubles est de
                                    premier ordre. Le meuble sur mesure que nous avons fait réaliser est superbe, et
                                    nous sommes ravis du résultat. Je recommande vivement leurs services.</p>
                                <h6 class="testi-card_desig">Responsable chez <span class="text-theme">MDT</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon-box">
                    <button data-slick-prev="#testiSlide2" class="slick-arrow default"><i
                            class="fat fa-long-arrow-left"></i></button>
                    <button data-slick-next="#testiSlide2" class="slick-arrow default"><i
                            class="fat fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div><!--==============================
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