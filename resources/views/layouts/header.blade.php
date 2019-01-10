<head>
    <meta charset="utf-8">
    <title>SDGYNSL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
    <link href="assets/lib/hover/hoverex-all.css" rel="stylesheet">
    <link href="assets/lib/jetmenu/jetmenu.css" rel="stylesheet">
    <link href="assets/lib/owl-carousel/owl-carousel.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colors/blue.css">

    <!-- =======================================================
      Template Name: MaxiBiz
      Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>
<div class="topbar clearfix">
    <div class="container">
        <div class="col-lg-12 text-right">
            <div class="social_buttons">
                <a href="https://www.facebook.com/sunfomobile/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
            </div>
        </div>
    </div>
    <!-- end container -->
</div>
<!-- end topbar -->

<header class="header">
    <div class="container">
        <div class="site-header clearfix">
            <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                <div class="site-title" id="title">
                    <a href="{{ url('/') }}" title="">
                        <img src="logo.jpg">
                    </a>
                </div>
            </div>
            <!-- title area -->
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div id="nav" class="right">
                    <div class="container clearfix">
                        <ul id="jetmenu" class="jetmenu blue">
                            <li class="active"><a href="{{ url('/') }}">Home</a>
                            </li>
                            <li><a href="{{ url('/aboutUs') }}">ABOUT US</a></li>
                            <li><a href="#">EVENTS</a></li>
                            <li><a href="#">ACHIEVEMENTS</a></li>
                            <li><a href="{{ url('/contact_us') }}">CONTACT US</a>
                                <ul class="dropdown">
                                    <li><a href="/view_messages">SHOW MESSAGES</a></li>
                                </ul>
                            </li>

                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
                            @else

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <!-- nav -->
            </div>
            <!-- title area -->
        </div>
        <!-- site header -->
    </div>
    <!-- end container -->
</header>
<!-- end header -->