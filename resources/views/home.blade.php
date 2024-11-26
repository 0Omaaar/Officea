<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artraz - Architecture HTML Template - Home 3</title>
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
                <a href="index.html"><img src="assets/img/logo.svg" alt="Artraz"></a>
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
                                <li><a href="https://www.twitter.com/">twitter</a></li>
                                <li><a href="https://www.instagram.com/">instagram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-sm-block">
                        <div class="header-links">
                            <ul>
                                <li><a href="tel:+12345678900" class="header-call"><i class="fas fa-phone"></i>(123) 4567 8900</a></li>
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
                                    <a href="index.html"><img src="assets/img/logo.svg" alt="Artraz"></a>
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
Hero Area
==============================-->
    <div class="th-hero-wrapper container th-container2">
        <div class="hero-slider-3 th-carousel" data-fade="true" data-slide-show="1">
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="assets/img/bg/hero_bg_3_1.jpg" data-overlay="black" data-opacity="6"></div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="h5 hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">Hôtellerie & Loisirs</span>
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Laissez votre maison</h1>
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.5s">être unique et <span class="text-transparent">stylée</span></h1>
                        <div class="hero-meta" data-ani="slideinup" data-ani-delay="0.7s">
                            <span class="meta-info"><i class="far fa-location-dot"></i>Bruxelles, <span class="text-theme">BEL</span></span>
                            <span class="meta-info"><i class="far fa-block-brick"></i>1.574 K<sup>2</sup></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="assets/img/bg/hero_bg_3_2.jpg" data-overlay="black" data-opacity="6"></div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="h5 hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">Hôtellerie & Loisirs</span>
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Laissez votre maison</h1>
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.5s">être unique et <span class="text-transparent">stylée</span></h1>
                        <div class="hero-meta" data-ani="slideinup" data-ani-delay="0.7s">
                            <span class="meta-info"><i class="far fa-location-dot"></i>Bruxelles, <span class="text-theme">BEL</span></span>
                            <span class="meta-info"><i class="far fa-block-brick"></i>1.574 K<sup>2</sup></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="assets/img/bg/hero_bg_3_3.jpg" data-overlay="black" data-opacity="6"></div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="h5 hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">Hôtellerie & Loisirs</span>
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Laissez votre maison</h1>
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.5s">être unique et <span class="text-transparent">stylée</span></h1>
                        <div class="hero-meta" data-ani="slideinup" data-ani-delay="0.7s">
                            <span class="meta-info"><i class="far fa-location-dot"></i>Bruxelles, <span class="text-theme">BEL</span></span>
                            <span class="meta-info"><i class="far fa-block-brick"></i>1.574 K<sup>2</sup></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========--><!--==============================
Brand Area  
==============================-->
    <div class="overflow-hidden space-top">
        <div class="container">
            <div class="row th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
                <div class="col-sm-6 col-lg-auto brand-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/brand/brand_1_1.png" alt="Brand Logo">
                </div>
                <div class="col-sm-6 col-lg-auto brand-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/brand/brand_1_2.png" alt="Brand Logo">
                </div>
                <div class="col-sm-6 col-lg-auto brand-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/brand/brand_1_3.png" alt="Brand Logo">
                </div>
                <div class="col-sm-6 col-lg-auto brand-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/brand/brand_1_4.png" alt="Brand Logo">
                </div>
                <div class="col-sm-6 col-lg-auto brand-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/brand/brand_1_5.png" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <div class="space-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="assets/img/normal/about_2_1.jpg" alt="About">
                        </div>
                        <div class="img2">
                            <img src="assets/img/normal/about_2_2.jpg" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 align-self-center wow fadeInRight" data-wow-delay="0.2s">
                    <span class="big-title mb-35">A.</span>
                    <h2 class="sec-title mb-40">La Domiciliation d'Entreprise à
                        <span class="text-theme">Bruxelles</span>
                    </h2>
                    <p class="mb-4">Officea, votre partenaire de confiance pour la domiciliation d'entreprise, est un prestataire de services professionnels, enregistré auprès du SPF Economie. Nous vous proposons des solutions de domiciliation pour votre siège social et adresse commerciale, adaptées à vos besoins.</p>
                    <p class="sub-title">Nos services s’adressent à :</p>
                    <p class="mb-40">Toutes les sociétés et associations belges qui cherchent une solution fiable et sécurisée pour leur domiciliation.

                        Les entreprises, filiales, succursales, ou organismes de représentation souhaitant disposer d’une adresse prestigieuse au cœur de l’Europe, tout en optimisant leurs coûts opérationnels.

                        Les entrepreneurs et dirigeants qui voyagent ou travaillent à l’étranger et qui souhaitent recevoir leur courrier à tout moment, en toute sécurité.</p>
                    <a href="about.html" class="th-btn"><span class="line left"></span> About Us <span class="line"></span></a>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump" data-top="-15%" data-right="0"><img src="assets/img/shape/shape_3.png" alt="shape"></div>
    </div><!--==============================
Project Area  
==============================-->
    <div class="space">
        <div class="container">
            <div class="row justify-content-md-between align-items-end">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="big-title">P.</span>
                        <h2 class="sec-title">Featured
                            <span class="text-theme">Projects</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto mt-n4 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="sec-btn">
                        <a href="project.html" class="link-btn">View The Projects</a>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xxl-auto col-md-6">
                    <div class="project-box">
                        <div class="project-img">
                            <img src="assets/img/project/project_2_1.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <div class="project-number">01</div>
                            <h3 class="h5 project-title"><a href="project-details.html">CLASSIC HOTEL PROJECT</a></h3>
                            <p class="project-map"><i class="fal fa-location-dot"></i>Melbourne VIC, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-md-6">
                    <div class="project-box">
                        <div class="project-img">
                            <img src="assets/img/project/project_2_2.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <div class="project-number">02</div>
                            <h3 class="h5 project-title"><a href="project-details.html">CLASSIC HOME PROJECT</a></h3>
                            <p class="project-map"><i class="fal fa-location-dot"></i>Melbourne VIC, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-md-6">
                    <div class="project-box">
                        <div class="project-img">
                            <img src="assets/img/project/project_2_3.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <div class="project-number">03</div>
                            <h3 class="h5 project-title"><a href="project-details.html">INTERIOR DESIGN</a></h3>
                            <p class="project-map"><i class="fal fa-location-dot"></i>Melbourne VIC, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-md-6">
                    <div class="project-box">
                        <div class="project-img">
                            <img src="assets/img/project/project_2_4.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <div class="project-number">04</div>
                            <h3 class="h5 project-title"><a href="project-details.html">RESTAURANT DECORATE</a></h3>
                            <p class="project-map"><i class="fal fa-location-dot"></i>Melbourne VIC, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-md-6">
                    <div class="project-box">
                        <div class="project-img">
                            <img src="assets/img/project/project_2_5.jpg" alt="project image">
                        </div>
                        <div class="project-content">
                            <div class="project-number">05</div>
                            <h3 class="h5 project-title"><a href="project-details.html">SWEEMING POOL PROJECT</a></h3>
                            <p class="project-map"><i class="fal fa-location-dot"></i>Melbourne VIC, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Service Area  
==============================-->
    <section class="space-bottom">
        <div class="container">
            <div class="row justify-content-md-between align-items-end">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="big-title">S.</span>
                        <h2 class="sec-title">Provide High-quality <br>
                            Architectural
                            <span class="text-theme">Services</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto mt-n4 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="sec-btn">
                        <a href="service.html" class="link-btn">View The Services</a>
                    </div>
                </div>
            </div>
            <div class="row th-carousel" data-slide-show="3" data-md-slide-show="1">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img class="svg-img" src="assets/img/icon/service_1_1.svg" alt="service image">
                        </div>
                        <p class="service-card_num">01</p>
                        <h3 class="service-card_title">Architecture</h3>
                        <p class="service-card_text">We see architecture as the composition of all elements that define a particular space and inform the character of a building.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img class="svg-img" src="assets/img/icon/service_1_2.svg" alt="service image">
                        </div>
                        <p class="service-card_num">02</p>
                        <h3 class="service-card_title">Interior Design</h3>
                        <p class="service-card_text">In Order architecture as the composition of all elements that define a particular space and inform the character of a interior.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img class="svg-img" src="assets/img/icon/service_1_3.svg" alt="service image">
                        </div>
                        <p class="service-card_num">03</p>
                        <h3 class="service-card_title">Urban Interventions</h3>
                        <p class="service-card_text">The Urban architecture as the composition of all elements that define a particular space and inform the character of into.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img class="svg-img" src="assets/img/icon/service_1_4.svg" alt="service image">
                        </div>
                        <p class="service-card_num">04</p>
                        <h3 class="service-card_title">Landscape Design</h3>
                        <p class="service-card_text">The Best architecture as composition of all elements that define a particular space and inform the character of a Landscape.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img class="svg-img" src="assets/img/icon/service_1_5.svg" alt="service image">
                        </div>
                        <p class="service-card_num">05</p>
                        <h3 class="service-card_title">Interdisciple Entity</h3>
                        <p class="service-card_text">You see architecture as the composition of all elements that define a particular space and inform the character of a Gowring.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img class="svg-img" src="assets/img/icon/service_1_6.svg" alt="service image">
                        </div>
                        <p class="service-card_num">06</p>
                        <h3 class="service-card_title">Artraz Everything</h3>
                        <p class="service-card_text">Artraz is architecture as the composition of all elements that define a particular space and inform the character of Design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Testimonial Area  
==============================-->
    <div class=" ">
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
                                <p class="h3 testi-card_text">Each penny at Baroque is completed committed, educated, and supportive. The unimaginably item was delightful, and worth each penny. I would totally suggest educate</p>
                                <h6 class="testi-card_desig">CEO at <span class="text-theme">Just Awesome</span></h6>
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
                                <p class="h3 testi-card_text">Worth each at Baroque is unimaginably committ, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest committ</p>
                                <h6 class="testi-card_desig">Director at <span class="text-theme">Kunfango</span></h6>
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
                                <p class="h3 testi-card_text">Educated at Baroque is supportive committed, educated, and unimaginably. The completed item was delightful, and worth each penny. I would totally suggest complete</p>
                                <h6 class="testi-card_desig">Manager at <span class="text-theme">Jangalok</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon-box">
                    <button data-slick-prev="#testiSlide2" class="slick-arrow default"><i class="fat fa-long-arrow-left"></i></button>
                    <button data-slick-next="#testiSlide2" class="slick-arrow default"><i class="fat fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div><!--==============================
Faq Area
==============================-->
    <div class="space position-relative">
        <div class="container">
            <div class="title-area wow fadeInUp" data-wow-delay="0.2s">
                <span class="big-title">C.</span>
                <h2 class="sec-title">Complete Quary
                    for <br> getting
                    <span class="text-theme">Ideas</span>
                </h2>
            </div>
            <div class="accordion-area accordion" id="faqAccordion">


                <div class="accordion-card  wow fadeInUp" data-wow-delay="0.2s">
                    <div class="accordion-header" id="collapse-item-1">
                        <button class="h4 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">Our Principles</button>
                    </div>
                    <div id="collapse-1" class="accordion-collapse collapse " aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="faq-img">
                                <img src="assets/img/normal/faq_1.jpg" alt="Faq Image">
                            </div>
                            <div class="content">
                                <h5 class="faq-title">Still up in the air To Succeed</h5>
                                <p class="faq-text">Morbi condimentum congue dui, elementum maximus augue porttitor a. Quisque volutpat et dui at fringilla. Integer sed justo quis lacus sodales porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam molestie id nibh viverra fringilla. Nulla facilisi. Proin iaculis ornare lorem in imperdiet. Donec rutrum viverra dictum. Morbi et massa enim.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="accordion-card active wow fadeInUp" data-wow-delay="0.3s">
                    <div class="accordion-header" id="collapse-item-2">
                        <button class="h4 accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Hard working attitudes</button>
                    </div>
                    <div id="collapse-2" class="accordion-collapse collapse show" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="faq-img">
                                <img src="assets/img/normal/faq_2.jpg" alt="Faq Image">
                            </div>
                            <div class="content">
                                <h5 class="faq-title">Still up in the air To Succeed</h5>
                                <p class="faq-text">Morbi condimentum congue dui, elementum maximus augue porttitor a. Quisque volutpat et dui at fringilla. Integer sed justo quis lacus sodales porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam molestie id nibh viverra fringilla. Nulla facilisi. Proin iaculis ornare lorem in imperdiet. Donec rutrum viverra dictum. Morbi et massa enim.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="accordion-card  wow fadeInUp" data-wow-delay="0.4s">
                    <div class="accordion-header" id="collapse-item-3">
                        <button class="h4 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How can we do</button>
                    </div>
                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="faq-img">
                                <img src="assets/img/normal/faq_3.jpg" alt="Faq Image">
                            </div>
                            <div class="content">
                                <h5 class="faq-title">Still up in the air To Succeed</h5>
                                <p class="faq-text">Morbi condimentum congue dui, elementum maximus augue porttitor a. Quisque volutpat et dui at fringilla. Integer sed justo quis lacus sodales porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam molestie id nibh viverra fringilla. Nulla facilisi. Proin iaculis ornare lorem in imperdiet. Donec rutrum viverra dictum. Morbi et massa enim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-shape1">
            <img src="assets/img/shape/shape_2.png" alt="shape">
        </div>
    </div>

    <!--==============================
Counter Area  
==============================-->
    <section class="space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row align-items-center">
                        <div class="col-auto wow fadeInUp" data-wow-delay="0.1s">
                            <span class="big-title mb-4 mb-md-0">AR.</span>
                        </div>
                        <div class="col-auto">
                            <div class="counter-card-wrap">
                                <div class="counter-card wow fadeInUp" data-wow-delay="0.2s">
                                    <h3 class="counter-card_number"><span class="counter-number">600</span></h3>
                                    <p class="counter-card_text">Projects</p>
                                </div>
                                <div class="counter-card wow fadeInUp" data-wow-delay="0.3s">
                                    <h3 class="counter-card_number"><span class="counter-number">60</span></h3>
                                    <p class="counter-card_text">Employees</p>
                                </div>
                                <div class="counter-card wow fadeInUp" data-wow-delay="0.4s">
                                    <h3 class="counter-card_number"><span class="counter-number">200</span></h3>
                                    <p class="counter-card_text">Conractors</p>
                                </div>
                                <div class="counter-card wow fadeInUp" data-wow-delay="0.5s">
                                    <h3 class="counter-card_number"><span class="counter-number">10000</span></h3>
                                    <p class="counter-card_text">More Then Publications in The World Press</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Blog Area  
==============================-->
    <section class="space-bottom">
        <div class="container">
            <div class="row justify-content-md-between align-items-end">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="big-title">B.</span>
                        <h2 class="sec-title">Our Latest
                            <span class="text-theme">Blog</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto mt-n4 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="sec-btn">
                        <a href="blog.html" class="link-btn">View The Blogs</a>
                    </div>
                </div>
            </div>
            <div class="row th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-box">
                        <div class="blog-content">
                            <span class="blog-count h2">01</span>
                            <div class="blog-meta style2">
                                <a href="blog.html">Architecture</a>
                                <a href="blog.html">February 15, 2024</a>
                            </div>
                            <p class="blog-text">Seamlessly e-enable resource maximizing human capital for reliable deliverables. Assertively incentivize tactical architectures with long-term high-impact alignments.</p>
                            <a href="blog-details.html" class="link-btn">Learn More</a>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_2_1.jpg" alt="blog image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-box">
                        <div class="blog-content">
                            <span class="blog-count h2">02</span>
                            <div class="blog-meta style2">
                                <a href="blog.html">Architecture</a>
                                <a href="blog.html">February 16, 2024</a>
                            </div>
                            <p class="blog-text">Seamlessly e-enable resource maximizing human capital for reliable deliverables. Assertively incentivize tactical architectures with long-term high-impact alignments.</p>
                            <a href="blog-details.html" class="link-btn">Learn More</a>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_2_2.jpg" alt="blog image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-box">
                        <div class="blog-content">
                            <span class="blog-count h2">03</span>
                            <div class="blog-meta style2">
                                <a href="blog.html">Architecture</a>
                                <a href="blog.html">February 17, 2024</a>
                            </div>
                            <p class="blog-text">Seamlessly e-enable resource maximizing human capital for reliable deliverables. Assertively incentivize tactical architectures with long-term high-impact alignments.</p>
                            <a href="blog-details.html" class="link-btn">Learn More</a>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_2_3.jpg" alt="blog image">
                        </div>
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
                    <img src="assets/img/logo2.svg" alt="Artraz">
                </div>
                <div class="footer-menu wow fadeInUp" data-wow-delay="0.2s">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="project.html">Projects</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <p class="footer-info2 wow fadeInUp" data-wow-delay="0.3s">97 Oak Meadow Lane Tallahassee, FL 32303</p>
                <p class="footer-info2 wow fadeInUp" data-wow-delay="0.3s"><a href="mailto:">info@example.com</a><a href="tel:+1234567890">123-456-7890</a></p>
                <div class="th-social mt-25 wow fadeInUp" data-wow-delay="0.3s">
                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright By © <a href="index.html">Artraz</a> - 2024</p>
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

</html>