<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Diamond - @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link id="favicon" rel="shortcut icon" href="{{ url('public/assets/main') }}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('public/assets/main') }}/images/favicon144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('public/assets/main') }}/images/favicon114.png">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/medical-icons.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/social-icons.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/icon-font.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/js/owl.carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/frontend-grid.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/mobile.css">
    <!--[if IE]>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/js/selectivizr-min.js"></script>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="page">
    <!-- Preloader -->
    <div id="page-preloader">
        <div class="spinner centered-container"></div>
    </div>
    <!-- END Preloader -->
    <!-- Header -->
    <header class="header clearfix">
        <!-- Top header -->
        <div class="fw-main-row top-header">
            <div class="fw-container">
                <div class="fl">
                    <!-- Social link -->
                    <div class="social-link">
                        <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                    </div>
                    <!-- END Social link -->
                </div>
                <div class="fr">
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span>4321 Your Address, Country</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-clock-2"></i> <span>Monday - Sunday 08:00-19:00</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-telephone-1"></i> <span>8 800 2336 7811</span></span>
                    <!-- END Contact item -->
                </div>
            </div>
        </div>
        <!-- END Top header -->
        <!-- Header-wrap -->
        <div class="fw-main-row header-wrap">
            <div class="fw-container">
                <div class="fw-row">
                    <div class="fw-col-sm-3 fw-col-md-2 logo-area"><a href="{{ url('public/assets/main') }}//"><img src="{{ url('public/assets/main') }}/images/imgs/logo.svg" alt="Medina template"></a></div>
                    <nav class="fw-col-sm-8 fw-col-md-8 navigation">
                        <ul>
                            <!-- Current menu item -->
                            <li class="current-menu-item menu-item-has-children">
                                <a href="{{ url('public/assets/main') }}//">Home</a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="{{ url('public/assets/main') }}/private-clinic.html">Private Clinic</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/plastic-surgery.html">Plastic Surgery</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/dental.html">Dental</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/doctor-personal-page.html">Doctor personal page</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Current menu item -->
                            <!-- Menu item has children -->
                            <li class="menu-item-has-children">
                                <a href="{{ url('public/assets/main') }}/our-team.html">Pages</a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('public/assets/main') }}/our-team.html">Our team</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/about.html">About</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/services.html">Services</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/prices.html">Prices</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/typography.html">Typography</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/404.html">404 page</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/coming-soon.html">Coming Soon</a></li>
                                        <!-- Menu item has children -->
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('public/assets/main') }}/javascript:void(0);">Menu level</a>
                                            <div class="sub-nav">
                                                <ul class="sub-menu">
                                                    <!-- Menu item has children -->
                                                    <li class="menu-item-has-children">
                                                        <a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 1</a>
                                                        <div class="sub-nav">
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 1</a></li>
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 2</a></li>
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 3</a></li>
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 4</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- END Menu item has children -->
                                                    <!-- Menu item has children -->
                                                    <li class="menu-item-has-children">
                                                        <a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 2</a>
                                                        <div class="sub-nav">
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 1</a></li>
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 2</a></li>
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 3</a></li>
                                                                <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 4</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- END Menu item has children -->
                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 3</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- END Menu item has children -->
                                    </ul>
                                </div>
                            </li>
                            <!-- END Menu item has children -->
                            <li><a href="{{ url('public/assets/main') }}/procedures.html">Procedures</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('public/assets/main') }}/blog1.html">Blog</a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('public/assets/main') }}/blog1.html">Variant 1</a></li>
                                        <li><a href="{{ url('public/assets/main') }}/blog2.html">Variant 2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('public/assets/main') }}/grid-col2.html">Gallery</a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('public/assets/main') }}/grid-col2.html">Grid</a>
                                            <div class="sub-nav">
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('public/assets/main') }}/grid-col2.html">Col 2</a></li>
                                                    <li><a href="{{ url('public/assets/main') }}/grid-col3.html">Col 3</a></li>
                                                    <li><a href="{{ url('public/assets/main') }}/grid-col4.html">Col 4</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('public/assets/main') }}/masonry-col2.html">Masonry</a>
                                            <div class="sub-nav">
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('public/assets/main') }}/masonry-col2.html">Col 2</a></li>
                                                    <li><a href="{{ url('public/assets/main') }}/masonry-col3.html">Col 3</a></li>
                                                    <li><a href="{{ url('public/assets/main') }}/masonry-col4.html">Col 4</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ url('public/assets/main') }}/contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="fw-col-sm-2 search-module">
                        <form action="javascript:void(0);">
                            <div class="label">Login</div>
                            <button type="submit" class="submit"><i class="icon-font icon-profile"></i></button>
                        </form>
                    </div>
                    <!-- Mobile side button -->
                    <div class="mobile-side-button"><i class="icon-font icon-menu"></i></div>
                    <!-- END Mobile side button -->
                    <!-- Mobiile side -->
                    <div class="mobile-side">
                        <!-- Social link -->
                        <div class="social-link">
                            <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-facebook-logo"></i></a>
                            <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-twitter-social-logotype"></i></a>
                            <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                        </div>
                        <!-- END Social link -->
                        <div class="search-module">
                            <form action="javascript:void(0);">
                                <input type="text" class="input" name="search" placeholder="Search">
                                <button type="submit" class="submit"><i class="icon-font icon-search"></i></button>
                            </form>
                        </div>
                        <!-- Mobile navigation -->
                        <nav class="mobile-navigation">
                            <ul>
                                <!-- Current menu item -->
                                <li class="current-menu-item menu-item-has-children">
                                    <a href="{{ url('public/assets/main') }}//">Home</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li class="current-menu-item"><a href="{{ url('public/assets/main') }}/private-clinic.html">Private Clinic</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/plastic-surgery.html">Plastic Surgery</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/dental.html">Dental</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/doctor-personal-page.html">Doctor personal page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Current menu item -->
                                <!-- Menu item has children -->
                                <li class="menu-item-has-children">
                                    <a href="{{ url('public/assets/main') }}/our-team.html">Pages</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('public/assets/main') }}/our-team.html">Our team</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/about.html">About</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/services.html">Services</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/prices.html">Prices</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/typography.html">Typography</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/404.html">404 page</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/coming-soon.html">Coming Soon</a></li>
                                            <!-- Menu item has children -->
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('public/assets/main') }}/javascript:void(0);">Menu level</a>
                                                <div class="sub-nav">
                                                    <ul class="sub-menu">
                                                        <!-- Menu item has children -->
                                                        <li class="menu-item-has-children">
                                                            <a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 1</a>
                                                            <div class="sub-nav">
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 1</a></li>
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 2</a></li>
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 3</a></li>
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 4</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- END Menu item has children -->
                                                        <!-- Menu item has children -->
                                                        <li class="menu-item-has-children">
                                                            <a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 2</a>
                                                            <div class="sub-nav">
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 1</a></li>
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 2</a></li>
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 3</a></li>
                                                                    <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 4</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- END Menu item has children -->
                                                        <li><a href="{{ url('public/assets/main') }}/javascript:void(0);">Hyperlink 3</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- END Menu item has children -->
                                        </ul>
                                    </div>
                                </li>
                                <!-- END Menu item has children -->
                                <li><a href="{{ url('public/assets/main') }}/procedures.html">Procedures</a></li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('public/assets/main') }}/blog1.html">Blog</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('public/assets/main') }}/blog1.html">Variant 1</a></li>
                                            <li><a href="{{ url('public/assets/main') }}/blog2.html">Variant 2</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('public/assets/main') }}/grid-col2.html">Gallery</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('public/assets/main') }}/grid-col2.html">Grid</a>
                                                <div class="sub-nav">
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ url('public/assets/main') }}/grid-col2.html">Col 2</a></li>
                                                        <li><a href="{{ url('public/assets/main') }}/grid-col3.html">Col 3</a></li>
                                                        <li><a href="{{ url('public/assets/main') }}/grid-col4.html">Col 4</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('public/assets/main') }}/masonry-col2.html">Masonry</a>
                                                <div class="sub-nav">
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ url('public/assets/main') }}/masonry-col2.html">Col 2</a></li>
                                                        <li><a href="{{ url('public/assets/main') }}/masonry-col3.html">Col 3</a></li>
                                                        <li><a href="{{ url('public/assets/main') }}/masonry-col4.html">Col 4</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ url('public/assets/main') }}/contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- END Mobile navigation -->
                    </div>
                    <!-- END Mobiile side -->
                </div>
            </div>
        </div>
        <!-- END Header-wrap -->
    </header>
    <!-- END Header -->
    <!-- Full screen section -->
    <section class="full-screen fw-main-row" style="background-image: url(http://placehold.it/2650x900);">
        <div class="fw-container centered-container tar">
            <div class="container tar fw-col-xs-12 fw-col-sm-6 fw-col-md-5">
                <h2 class="h1"><span class="blue-color">Helping You</span><br>Stay Happy One</h2>
                <p>Check Out Our Services!</p>
                <a href="{{ url('public/assets/main') }}/javascript:void(0);" class="button-style1"><span>CHECK OUT</span></a><a href="{{ url('public/assets/main') }}/javascript:void(0);" class="button-style1 dark"><span>more info</span></a>
            </div>
        </div>
    </section>
    <!-- END Full screen section -->
    <!-- Category items -->
    <section class="fw-main-row pt45 pb20">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Our Directions</h2>
            <div class="fw-row">
                <div class="fw-col-sm-4">
                    <!-- Category item -->
                    <div class="category-item" style="background-image: url(http://placehold.it/500x500)">
                        <div class="centered-container">
                            <a href="{{ url('public/assets/main') }}/private-clinic.html" class="button-style2 white big"><span>PRIVATE CLINIC</span></a>
                        </div>
                    </div>
                    <!-- END Category item -->
                </div>
                <div class="fw-col-sm-4">
                    <!-- Category item -->
                    <div class="category-item" style="background-image: url(http://placehold.it/500x500)">
                        <div class="centered-container">
                            <a href="{{ url('public/assets/main') }}/plastic-surgery.html" class="button-style2 white big"><span>PLASTIC SURGERY</span></a>
                        </div>
                    </div>
                    <!-- END Category item -->
                </div>
                <div class="fw-col-sm-4">
                    <!-- Category item -->
                    <div class="category-item" style="background-image: url(http://placehold.it/500x500)">
                        <div class="centered-container">
                            <a href="{{ url('public/assets/main') }}/dental.html" class="button-style2 white big"><span>DENTAL</span></a>
                        </div>
                    </div>
                    <!-- END Category item -->
                </div>
            </div>
        </div>
    </section>
    <!-- END Category items -->
    <section class="fw-main-row dark-bg pt20" style="background-image: url(http://placehold.it/1980x800)">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Our Directions</h2>
            <!-- Team carousel -->
            <section class="team-carousel">
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Mark Lowson"></a></div>
                    <div class="name">
                        <h4>Dr. Mark Lowson</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Lara Crow"></a></div>
                    <div class="name">
                        <h4>Dr. Lara Crow</h4>
                        <span>Nurse</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Marketa Brown"></a></div>
                    <div class="name">
                        <h4>Dr. Marketa Brown</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Mark Lowson"></a></div>
                    <div class="name">
                        <h4>Dr. Mark Lowson</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Lara Crow"></a></div>
                    <div class="name">
                        <h4>Dr. Lara Crow</h4>
                        <span>Nurse</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Marketa Brown"></a></div>
                    <div class="name">
                        <h4>Dr. Marketa Brown</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
            </section>
            <!-- END Team carousel -->
        </div>
    </section>
    <section class="fw-main-row pt40 pb40">
        <div class="fw-container">
            <h2 class="heading-decor pb35">Our Services</h2>
            <div class="fw-row">
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-stethoscope"></div>
                    <div class="text">
                        <div class="h4">Therapiya</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-drugs-3"></div>
                    <div class="text">
                        <div class="h4">Pharmocology</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
            </div>
            <div class="fw-row">
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-premolar"></div>
                    <div class="text">
                        <div class="h4">Dentistry</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-cardiogram-2"></div>
                    <div class="text">
                        <div class="h4">Cardiology</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
            </div>
            <div class="fw-row">
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-virus"></div>
                    <div class="text">
                        <div class="h4">Virusology</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-eye"></div>
                    <div class="text">
                        <div class="h4">Eye Surgery</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
            </div>
        </div>
    </section>
    <section class="fw-main-row dark-bg pt35 pb20" style="background-image: url(http://placehold.it/1980x350)">
        <div class="fw-container">
            <div class="fw-row">
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-cardiogram"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="180">180</div>
                    <h4>saved hearts</h4>
                </div>
                <!-- END Icon box style 2 -->
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-premolar-2"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="2568">2568</div>
                    <h4>saved tooth</h4>
                </div>
                <!-- END Icon box style 2 -->
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-lungs"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="112">112</div>
                    <h4>saved lungs</h4>
                </div>
                <!-- END Icon box style 2 -->
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-stomach"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="235">235</div>
                    <h4>saved stomaches</h4>
                </div>
                <!-- END Icon box style 2 -->
            </div>
        </div>
    </section>
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Latest from blog</h2>
            <div class="fw-row">
                <!-- Blog item -->
                <div class="blog-item fw-col-md-4">
                    <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="http://placehold.it/370x270" alt="New investigations"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">New investigations</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
                <!-- Blog item -->
                <div class="blog-item fw-col-md-4">
                    <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="http://placehold.it/370x270" alt="Your Health"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">Your Health</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
                <!-- Blog item -->
                <div class="blog-item fw-col-md-4">
                    <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="http://placehold.it/370x270" alt="Researches"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">Researches</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
            </div>
        </div>
    </section>
    <footer class="footer fw-main-row">
        <div class="fw-container">
            <div class="fw-row">
                <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-4">
                    <div class="footer-logo"><a href="{{ url('public/assets/main') }}//"><img src="{{ url('public/assets/main') }}/images/imgs/logo.svg" alt="Medina template"></a></div>
                    <p class="footer-text taj">Sed magna nulla, pulvinar vel ante vel, fringilla vulputate nibh. Dictum, placerat massa non, bibendum ante. Sed magna nulla, pulvinar vel ante vel, fringilla vulputate nibh.</p>
                    <div class="footer-copy">(c) promo-theme.com 2016</div>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-3">
                    <h6>Contact us:</h6>
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span>4321 Your Address, Country</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-clock-2"></i> <span>Monday - Sunday 08:00-19:00</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-telephone-1"></i> <span>8 800 2336 7811</span></span>
                    <!-- END Contact item -->
                </div>
                <div class="fw-col-xs-12 fw-col-sm-3 fw-col-md-2">
                    <h6>Links:</h6>
                    <ul class="footer-menu">
                        <li><a href="{{ url('public/assets/main') }}//">Home</a></li>
                        <li><a href="{{ url('public/assets/main') }}/our-team.html">Pages</a></li>
                        <li><a href="{{ url('public/assets/main') }}/procedures.html">Procedures</a></li>
                        <li><a href="{{ url('public/assets/main') }}/blog.html">Blog</a></li>
                        <li><a href="{{ url('public/assets/main') }}/gallery.html">Gallery</a></li>
                        <li><a href="{{ url('public/assets/main') }}/contact.html">Contacts</a></li>
                    </ul>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-9 fw-col-md-3">
                    <h6>Stay in touch:</h6>
                    <form action="javascript:void(0);" class="form-subsription">
                        <button type="submit" class="button-style1 min"><span>subscribe</span></button>
                        <div><input type="text" placeholder="Enter your e-mail..." class="style1 min"></div>
                    </form>
                    <h6>Follow us:</h6>
                    <div class="social-link">
                        <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="{{ url('public/assets/main') }}/javascript:void(0);"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="{{ url('public/assets/main') }}/js/jquery-2.1.3.min.js"></script>
<script src="{{ url('public/assets/main') }}/js/owl.carousel/owl.carousel.min.js"></script>
<script src="{{ url('public/assets/main') }}/js/jquery.animateNumber.min.js"></script>
<script type="text/javascript" src="{{ url('public/assets/main') }}/js/script.js"></script>
</body>
</html>