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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/medical-icons.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/social-icons.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/icon-font.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/js/owl.carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/frontend-grid.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/mobile.css">



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if IE]>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/js/selectivizr-min.js"></script>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
        .label {
            font-size: 100%;
            color: #3c3d41;
        }
    </style>

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
                        <a href="{{$profile->facebook}}"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="{{$profile->twitter}}"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="{{$profile->instagram}}"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                    </div>
                    <!-- END Social link -->
                </div>
                <div class="fr">
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span>{{$profile->address}}</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-clock-2"></i> <span>{{$profile->OpenCloseTime}}</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-telephone-1"></i> <span>{{$profile->phone}}</span></span>
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
                            <li class="current-menu-item">
                                <a href="">Home</a>
                            </li>
                            <li class="">
                                <a href="">Treatment</a>
                            </li>
                            <li class="">
                                <a href="">Artikel</a>
                            </li>
                            <li class="">
                                <a href="">News</a>
                            </li>
                            <li class="">
                                <a href="">Contact Us</a>
                            </li>
                            <li class="">
                                <a href="">About Us</a>
                            </li>
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
                                <div class="label">Login</div>
                                <button type="submit" class="submit"><i class="icon-font icon-profile"></i></button>
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
    @yield('content')
    <footer class="footer fw-main-row">
        <div class="fw-container">
            <div class="fw-row">
                <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-4">
                    <div class="footer-logo"><a href="{{ url('public/assets/main') }}//"><img src="{{ url('public/assets/main') }}/images/imgs/logo.svg" alt="Medina template"></a></div>
                    <p class="footer-text taj">{{$profile->desc}}</p>
                    <div class="footer-copy">(c) royaldiamondclinic.com {{date('Y')}}</div>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-3">
                    <h6>Contact us:</h6>
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span>{{$profile->address}}</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-clock-2"></i> <span>{{$profile->OpenCloseTime}}</span></span>
                    <!-- END Contact item -->
                    <!-- Contact item -->
                    <span class="contact-item"><i class="icon-font icon-telephone-1"></i> <span>{{$profile->phone}}</span></span>
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
                        <a href="{{$profile->facebook}}"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="{{$profile->twitter}}"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="{{$profile->instagram}}"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
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