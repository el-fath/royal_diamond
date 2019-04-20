<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{$config->IconPath}}" type="image/png">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ url('public/assets/admin') }}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- jquery file upload Frame work -->
    <link href="{{ url('public/assets/admin') }}/assets/pages/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="{{ url('public/assets/admin') }}/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/bower_components/sweetalert/css/sweetalert.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ url('public/assets/admin') }}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/icon/material-design/css/material-design-iconic-font.min.css">
    <!-- ion icon css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/icon/ion-icon/css/ionicons.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/admin') }}/assets/css/jquery.mCustomScrollbar.css">
    <!-- ck editor -->
    <script src="{{ url('public/assets/admin') }}/assets/pages/ckeditor/ckeditor.js"></script>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="{{ url('public/assets/admin') }}/assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{ url('public/assets/admin') }}/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>{{Session::get('username')}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="{{ route('log_out') }}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="fa fa-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{ url('public/assets/admin') }}/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{ url('public/assets/admin') }}/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <form class="form-material">
                            <div class="form-group form-primary">
                                <input type="text" name="footer-email" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label"><i class="fa fa-search m-r-10"></i>Share Your Thoughts</label>
                            </div>
                        </form>
                        <div class="form-icon ">
                            <button class="btn btn-success btn-icon  waves-effect waves-light">
                                <i class="fa fa-paper-plane "></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="p-15 p-b-0">
                            </div>
                            <div class="pcoded-navigation-label">Configuration</div>
                            <ul class="pcoded-item pcoded-left-item">
                                {{-- <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Default</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li class="{{ Request::segment(2) == 'profile' ? 'active':'' }}">
                                    <a href="{{ route('profile.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{ Request::segment(2) == 'config' ? 'active':'' }}">
                                    <a href="{{ route('config.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Website</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{ Request::segment(2) == 'slide' ? 'active':'' }}">
                                    <a href="{{ route('slide.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-gallery"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Slide</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Data Master</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="{{ Request::segment(2) == 'admin' ? 'active':'' }}">
                                    <a href="{{ route('admin.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-gears"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Admin</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{ Request::segment(2) == 'team' ? 'active':'' }}">
                                    <a href="{{ route('team.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ion-person-stalker"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Team</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{ Request::segment(2) == 'member' ? 'active':'' }}">
                                    <a href="{{ route('member.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-group"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Member</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{ Request::segment(2) == 'treatment' ? 'active':'' }}">
                                    <a href="{{ route('treatment.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-heartbeat"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Treatment</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{ Request::segment(2) == 'blog' ? 'active':'' }}">
                                    <a href="{{ route('blog.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-desktop"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Blog</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                        @yield('content')
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{ url('public/assets/admin') }}/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{ url('public/assets/admin') }}/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{ url('public/assets/admin') }}/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{ url('public/assets/admin') }}/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{ url('public/assets/admin') }}/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- sweet alert js -->
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/sweetalert/js/sweetalert.min.js"></script>
<!-- waves js -->
<script src="{{ url('public/assets/admin') }}/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="{{ url('public/assets/admin') }}/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- jquery file upload js -->
<script src="{{ url('public/assets/admin') }}/assets/pages/jquery.filer/js/jquery.filer.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/pages/filer/custom-filer.js" type="text/javascript"></script>
<script src="{{ url('public/assets/admin') }}/assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>
<!-- data-table js -->
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/pages/data-table/js/jszip.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('public/assets/admin') }}/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="{{ url('public/assets/admin') }}/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/pcoded.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/vertical/vertical-layout.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="{{ url('public/assets/admin') }}/assets/js/script.js"></script>
</body>

</html>
