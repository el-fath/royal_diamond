<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$config->web_name}} - @yield('title')</title>
    <meta name="keywords" content="{{$config->meta_keyword}}">
    <meta name="description" content="{{$config->meta_desc}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link id="favicon" rel="shortcut icon" href="{{$config->IconPath}}" type="image/png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{$config->IconPath}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{$config->IconPath}}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    {{--<link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/bower_components/bootstrap/css/bootstrap.min.css">--}}
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
    <link rel="stylesheet" href="{{ url('public/assets/main') }}/css/sweetalert.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

    <script type="text/javascript" src="{{ url('public/assets/main') }}/js/jquery-2.1.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if IE]>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/js/selectivizr-min.js"></script>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/id.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="{{ url('public/assets/main') }}/js/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script type="text/javascript" src="{{ url('public/assets/main') }}/js/cak-js.js"></script>
    <style>
        .label {
            font-size: 100%;
            color: #3c3d41;
        }
    </style>
    {{$config->head_script}}

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

        .tab-style{
            font-size:20px;
            width:50%;
            background-color:#f2f2f2;
            text-align:center;


        }

        .group2 {
            position: relative;
            margin-top: 16px;
        }

        .btn-block{margin-top:20px;
            margin-bottom:20px;
            font-size:18px;}

        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {   background-color:#e5ecf4;
            color:#4a89dc;}

        .login-shadow{-webkit-box-shadow: 5px -5px 6px 0px rgba(82,82,82,0.52);
            -moz-box-shadow: 5px -5px 6px 0px rgba(82,82,82,0.52);
            box-shadow: 5px -5px 6px 0px rgba(82,82,82,0.52);
            z-index:1;

        }

        .signup-shadow{-webkit-box-shadow: -5px 0px 6px 0px rgba(82,82,82,0.52);
            -moz-box-shadow: -5px -5px 6px 0px rgba(82,82,82,0.52);
            box-shadow: -5px 0px 6px 0px rgba(82,82,82,0.52);

        }


        .modal-header{background-color:#e5ecf4;}

        .group {
            position: relative;
            margin-top: 30px;
        }


        .input {
            font-size: 18px;
            padding: 10px 10px 10px 5px;
            -webkit-appearance: none;
            display: block;
            background: none;
            color: #636363;
            width: 100%;
            border: none;
            border-radius: 0;
            border-bottom: 1px solid #757575;
        }

        .input:focus { outline: none; }

        /* Label */

        .label {
            color: #757575;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: -10px;
            top: 10px;
            transition: all 0.2s ease;
        }

        /* active */

        .input:focus ~ .label, .input.used ~ .label {
            top: -20px;
            transform: scale(.75); left:-15px;
            /* font-size: 14px; */
            color: #4a89dc;
        }


        /* Underline */

        .bar {
            position: relative;
            display: block;
            width: 100%;
        }

        .bar:before, .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #4a89dc;
            transition: all 0.2s ease;
        }

        .bar:before { left: 50%; }

        .bar:after { right: 50%; }


        /* active */

        .input:focus ~ .bar:before, .input:focus ~ .bar:after { width: 50%; }


        /* Highlight */

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }


        /* active */

        .input:focus ~ .highlight {
            animation: inputHighlighter 0.3s ease;
        }


        @media  screen and (max-width: 767px) and (min-width: 576px){
            #myModal{margin-left:20%;
                margin-right:20%;}

            #forgot-password{margin-left:20%;
                margin-right:20%;}
        }


        @media screen and (min-width: 768px) {

            #myModal .modal-dialog  {width:500px;}

            #forgot-password .modal-dialog{width:500px;}

            .modal-body{padding-left:50px;
                padding-right:50px;}
        }


        {{--.modal-body{background-image:url('{{$pro}}');--}}
            {{--background-size:cover;--}}
            {{--z-inedx:4;}--}}

        em{display:none;}
    </style>

</head>
<body>
{{$config->after_body_script}}
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
                    <div class="fw-col-sm-3 fw-col-md-2 logo-area"><a href=""><img src="{{$profile->PhotoPath}}" alt="{{$profile->name}}"></a></div>
                    <nav class="fw-col-sm-8 fw-col-md-8 navigation">
                        <ul>
                            <!-- Current menu item -->
                            <li class="{{ Request::segment(1) == 'home' ? 'current-menu-item':'' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'treatment' ? 'current-menu-item':'' }}">
                                <a href="{{ route('treatment') }}">Treatment</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'blog' ? 'current-menu-item':'' }}">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'event' ? 'current-menu-item':'' }}">
                                <a href="{{ route('event') }}">Event</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'contactus' ? 'current-menu-item':'' }}">
                                <a href="{{ route('contactus') }}">Contact Us</a>
                            </li>
                            <li class="{{ Request::segment(2) == 'aboutus' ? 'current-menu-item':'' }}">
                                <a href="{{ route('aboutus') }}">About Us</a>
                            </li>

                            @if($config->url_olshop)
                                <li class="{{ Request::segment(2) == 'shop' ? 'current-menu-item':'' }}">
                                    <a href="{{$config->url_olshop}}">Shop</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                    <div class="fw-col-sm-2 search-module">
                        <div style="position: relative;">

                                @if (isset($CurrentMember) && $CurrentMember)
                                    <a href="{{ route('member.profile') }}"><div class="label" style="pointer-events: auto;margin-top: -10px;font-weight: bold;">{{$CurrentMember->name}}</div></a>
                                    <a href="{{ route('member.logout') }}"> <button type="button" href="{{ route('member.logout') }}" class="submit"><i class="icon-font icon-logout"></i></button></a>
                                @else
                                    <div class="label" style="pointer-events: auto;margin-top: -10px;font-weight: bold;">Login</div>
                                    <button type="submit" href="#signup" data-toggle="modal" data-target="#myModal" class="submit"><i class="icon-font icon-profile"></i></button>
                                @endif
                        </div>
                    </div>
                    <!-- Mobile side button -->
                    <div class="mobile-side-button"><i class="icon-font icon-menu"></i></div>
                    <!-- END Mobile side button -->
                    <!-- Mobiile side -->
                    <div class="mobile-side">
                        <!-- Social link -->
                        <div class="social-link">
                            <a href="{{$profile->facebook}}"><i class="social-icons icon-facebook-logo"></i></a>
                            <a href="{{$profile->twitter}}"><i class="social-icons icon-twitter-social-logotype"></i></a>
                            <a href="{{$profile->instagram}}"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                        </div>
                        <!-- END Social link -->
                        <div class="search-module">
                            <div style="position: relative;">
                                @if (isset($CurrentMember) && $CurrentMember)
                                        <a href="{{ route('member.profile') }}"><label class="label" style="pointer-events: auto;margin-top: -8px;font-weight: bold;">{{$CurrentMember->name}}</label></a>
                                    <a href="{{ route('member.logout') }}"> <button type="button" href="{{ route('member.logout') }}" class="submit"><i class="icon-font icon-logout"></i></button></a>
                                @else
                                    <button type="submit" href="#signup" data-toggle="modal" data-target="#myModal" class="submit"><i class="icon-font icon-profile"></i></button>
                                @endif
                            </div>
                        </div>
                        <br>
                        <!-- Mobile navigation -->
                        <nav class="mobile-navigation">
                            <ul>
                                <!-- Current menu item -->
                                <li class="{{ Request::segment(1) == 'home' ? 'current-menu-item':'' }}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{ Request::segment(1) == 'treatment' ? 'current-menu-item':'' }}">
                                    <a href="{{ route('treatment') }}">Treatment</a>
                                </li>
                                <li class="{{ Request::segment(1) == 'blog' ? 'current-menu-item':'' }}">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="{{ Request::segment(1) == 'event' ? 'current-menu-item':'' }}">
                                    <a href="{{ route('event') }}">Event</a>
                                </li>
                                <li class="{{ Request::segment(1) == 'contactus' ? 'current-menu-item':'' }}">
                                    <a href="{{ route('contactus') }}">Contact Us</a>
                                </li>

                                @if($config->url_olshop)
                                    <li class="{{ Request::segment(1) == 'shop' ? 'current-menu-item':'' }}">
                                        <a href="{{$config->url_olshop}}}">Shop</a>
                                    </li>
                                @endif
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
                    <div class="footer-logo"><a href="{{ url('public/assets/main') }}//"><img src="{{$profile->PhotoPath}}" alt="{{$profile->name}}"></a></div>
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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('treatment') }}">Treatment</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('event') }}">Event</a></li>
                        <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
                    </ul>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-9 fw-col-md-3">
                    {{--<h6>Stay in touch:</h6>--}}
                    {{--<form action="javascript:void(0);" class="form-subsription">--}}
                        {{--<button type="submit" class="button-style1 min"><span>subscribe</span></button>--}}
                        {{--<div><input type="text" placeholder="Enter your e-mail..." class="style1 min"></div>--}}
                    {{--</form>--}}
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

{{--Modal--}}

<div class="modal fade bs-modal-sm log-sign" id="forgot-password" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center;">
                <h4>Forgot Password</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('member.forgot')}}" method="post" id="formforgot">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <!--<div class="modal-footer">
            <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </center>
            </div>-->
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
                    <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>

                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" action="{{route('member.login')}}" id="formlogin">
                            <fieldset>
                                <!-- Sign In Form -->
                                <!-- Text input-->

                                <div class="group">
                                    <input required="" class="input" type="text" name="Email"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Email address</label></div>


                                <!-- Password input-->
                                <div class="group">
                                    <input required="" class="input" type="password" name="Password"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password</label>
                                </div>
                                <em>minimum 6 characters</em>

                                <div class="forgot-link">
                                    <a href="#forgot" data-toggle="modal" data-target="#forgot-password" data-dismiss="modal"> I forgot my password</a>
                                </div>


                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="signin"></label>
                                    <div class="controls">
                                        <button id="signin" name="signin" class="btn btn-primary btn-block">Log In</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="signup">
                        <form class="form-horizontal" action="{{route('member.register')}}" id="formregister">
                            <fieldset>
                                <!-- Sign Up Form -->
                                <!-- Text input-->
                                <div class="group">
                                    <input required="" class="input" name="Name" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Nama</label></div>

                                <!-- Text input-->
                                <div class="group">

                                    <select name="Gender" id="" class="input">
                                        <option></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label">Gender</label></div>

                                <!-- Password input-->
                                <div class="group">
                                    <input required="" class="input" type="email" name="Email"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Email</label></div>

                                <!-- Text input-->
                                <div class="group">
                                    <input required="" class="input" name="Password" type="password"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password</label></div>
                                <em>1-8 Characters</em>

                                <div class="group2">
                                    <input required="" class="input" name="ConfirmPassword" type="password"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Confirm Password</label></div>

                                <div class="group">
                                    <input required="" class="input" name="Address" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Address</label></div>

                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="confirmsignup"></label>
                                    <div class="controls">
                                        <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!--<div class="modal-footer">
            <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </center>
            </div>-->
        </div>
    </div>
</div>

<script src="{{ url('public/assets/main') }}/js/owl.carousel/owl.carousel.min.js"></script>
<script src="{{ url('public/assets/main') }}/js/jquery.animateNumber.min.js"></script>
<script type="text/javascript" src="{{ url('public/assets/main') }}/js/script.js"></script>

{{$config->before_body_script}}


<script>

    $(window, document, undefined).ready(function() {

        $('.input').blur(function() {
            var $this = $(this);
            if ($this.val())
                $this.addClass('used');
            else
                $this.removeClass('used');
        });

    });


    $('#tab1').on('click' , function(){
        $('#tab1').addClass('login-shadow');
        $('#tab2').removeClass('signup-shadow');
    });

    $('#tab2').on('click' , function(){
        $('#tab2').addClass('signup-shadow');
        $('#tab1').removeClass('login-shadow');


    });

    $("#formforgot").submit(function(e){
        e.preventDefault();

        var formData = new FormData( $("#formforgot")[0] );

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: $("#formforgot").attr('action'),
            processData: false,
            contentType: false,
            dataType : 'json',
            encode  : true,
            data:  		new FormData(this),
            beforeSend: function(){
                blockMessage($('#formforgot'),'Please Wait','#fff');
            }
        }).done(function(data){
            $('#formforgot').unblock();
            sweetAlert({
                    title: 	((data.Code!=200) ? "Opps!" : 'Success'),
                    text: 	((data.Code!=200) ?  data.Data : 'Success'),
                    type: 	((data.Code!=200) ? "error" : "success"),
                },
                function(){

                });
        })
            .fail(function() {
                $('#formforgot').unblock();
                sweetAlert({
                        title: 	"Opss!",
                        text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                        type: 	"error",
                    },
                    function(){
                    });
            })
    });

    $("#formlogin").submit(function(e){
        e.preventDefault();

        var formData = new FormData( $("#formlogin")[0] );

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: $("#formlogin").attr('action'),
            processData: false,
            contentType: false,
            dataType : 'json',
            encode  : true,
            data:  		new FormData(this),
            beforeSend: function(){
                blockMessage($('#formlogin'),'Please Wait','#fff');
            }
        }).done(function(data){
            $('#formlogin').unblock();
            sweetAlert({
                    title: 	((data.Code!=200) ? "Opps!" : 'Success'),
                    text: 	((data.Code!=200) ?  data.Data : 'Success'),
                    type: 	((data.Code!=200) ? "error" : "success"),
                },
                function(){

                });
        })
            .fail(function() {
                $('#formlogin').unblock();
                sweetAlert({
                        title: 	"Opss!",
                        text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                        type: 	"error",
                    },
                    function(){
                    });
            })
    });

    $("#formregister").submit(function(e){
        e.preventDefault();

        var formData = new FormData( $("#formregister")[0] );

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: $("#formregister").attr('action'),
            processData: false,
            contentType: false,
            dataType : 'json',
            encode  : true,
            data:  		new FormData(this),
            beforeSend: function(){
                blockMessage($('#formregister'),'Please Wait','#fff');
            }
        }).done(function(data){
            $('#formregister').unblock();
            sweetAlert({
                    title: 	((data.Code!=200) ? "Opps!" : 'Success'),
                    text: 	((data.Code!=200) ?  data.Data : 'Success'),
                    type: 	((data.Code!=200) ? "error" : "success"),
                },
                function(){
                    location.reload();
                });
        })
            .fail(function() {
                $('#formregister').unblock();
                sweetAlert({
                        title: 	"Opss!",
                        text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                        type: 	"error",
                    },
                    function(){
                    });
            })
    });

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>


</body>
</html>