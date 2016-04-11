<!DOCTYPE html>
<html lang="en-US" ng-app="everydayapp"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Title -->
    <title>{{ $title.' || Everyday Home Care' }}</title>

    <!-- Define a view port to mobile devices to use - telling the browser to assume that
    the page is as wide as the device (width=device-width)
     and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="everyday" content="Everyday Home care" description="home care, family care, health care">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon_edhc.jpg') }}">

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- bootstrap Style Sheet (caution ! - Do not edit this stylesheet) -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="all">
    <!-- Flexslider stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all">
    <!-- Animations stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" type="text/css" media="all">
    <!-- Awesome Font stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css" media="all">
    <!-- Datepciker stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" type="text/css" media="all">
    <!-- Swipebox stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/swipebox.css') }}" type="text/css" media="all">
    <!-- meanmenu stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}" type="text/css" media="all">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" media="all">
    <!-- Include the site responsive  stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/custom-responsive.css') }}" type="text/css" media="all">


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div class="header-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <p> <marquee> Welcome to Everyday Home Care ( website Under construction )  </marquee></p>
            </div>
            <!--opening hours-->
            <div class="col-md-7 text-right">
                <p>
                    Opening Hours : <span>Monday to Saturday - 8am to 9pm</span>
                    <br class="visible-xs">Contact : <span>+1-610-966-2676 </span>
                </p>
            </div>

        </div>
    </div>
</div>


<header id="header">
    <div class="container">

        <!-- Website Logo -->
        <div class="logo clearfix">
            <a href="{{ URL('/') }}">
                <img src="{{ asset('images/logo_every.jpg') }}" alt="Everyday Homecare">
            </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main-menu">
            <ul class="header-nav clearfix" id="menu-main-menu">
                <li class="current-menu-item page_item">
                    <a href="{{ URL('/') }}">HOME</a>
                </li>
                <li>
                    <a href="#">OUR SERVICES</a>
                    <ul>
                        @foreach($services as $service)
                        <li><a href="{{ $service->id }}">{{ $service->name }}</a></li>
                        @endforeach
                        <!--
                        <li><a href="#">Alzheimer's & Dementia Care</a></li>
                        <li><a href="#">Professional Therapy</a> </li>
                        <li><a href="#">Home Care Aides</a> </li>
                        <li><a href="#">Parkinson's Care</a> </li>
                        <li><a href="#">Personal Care</a> </li>
                        -->
                    </ul>
                </li>
                <li>
                    <a href="#">CAREGIVERS</a>
                    <ul>
                        @foreach($caregivers as $caregiver)
                            <li><a href="{{ $caregiver->id }}">{{ $caregiver->name }}</a></li>
                        @endforeach
                        <!--
                        <li><a href="#">Becoming a Caregiver</a></li>
                        <li><a href="#">Credentialing & Training</a></li>
                        <li><a href="#">Caregiver Application</a></li>
                        -->
                    </ul>
                </li>
                <li>
                    <a href="#">NEWS/VIDEOS</a>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">RESOURCES</a>
                    <ul>
                        <li> <a href="#">Articles</a></li>
                        <li> <a href="#">Caregiver Burnout</a> </li>
                        <li> <a href="#">Home Care Funding Options</a></li>
                        <li> <a href="#">Accepted Insurance</a></li>
                        <li> <a href="#">Second Wind Dreams</a></li>
                        <li> <a href="#">Types of Long-Term Care</a></li>
                        <li> <a href="#">Understanding Dementia Care</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
        <div id="responsive-menu-container"></div>
    </div>
</header>



<div class="banner clearfix"></div>
<div class="page-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-7 ">
                <h1 class="entry-title">{{ $title }}</h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="{{ URL('/') }}">Everyday Home Care</a><span class="divider"></span></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 ">
                <div id="search" class="widget clearfix">
                    <form method="get" id="search-form" class="search-form" action="#">
                        <div>
                            <input type="text" value="" name="s" id="search-text" placeholder="Search"/>
                            <input type="submit" id="search-submit" value=""/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@yield('content')


<!--page footer-->
<footer id="main-footer" class="site-footer clearfix">
    <div class="container">
        <div class="row">
            <!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">About EveryDay Home Care</h3>
                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<a href="{{ URL('/about') }}"> Read more</a></p>
                    </div>
                </section>
            </div>
            <!--general services-->
            <div class="col-md-3 col-sm-6">
                <section class="widget animated fadeInLeft ae-animation-fadeInLeft">
                    <h3 class="title">General Services</h3>
                    <ul>
                        <li>
                            <a href="#">Home Care Aides</a>
                        </li>
                        <li>
                            <a href="#">Pediatric Care</a>
                        </li>
                        <li>
                            <a href="#">Companion Care</a>
                        </li>
                        <li>
                            <a href="#">Personal Care</a>
                        </li>
                        <li>
                            <a href="#">Conditions Treated</a>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="clearfix visible-sm"></div>

            <!--recent posts-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Quick links</h3>
                    <ul>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="#">Testimonies</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">Policy</a>
                        </li>
                    </ul>
                </section>
            </div>
            <!--subscription form-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Subscribe!</h3>
                    <div class="textwidget">Subscribe to my blog for updates</div>
                    <div>

                        <form name="subs-form" id="subs_form" class="subs-form" method="post" action="subscription-handler.php">


                            <label for="subs-name">Name:</label>
                            <input name="name" id="subs-name" class="required" type="text" title="* Please provide your name" /><br/>

                            <label for="subs-email">Email:</label>
                            <input name="email" class="required email" id="subs-email" type="text" title="* Please provide a valid email address" /><br/>

                            <input type="hidden" name="action" value="send_message">
                            <input type="hidden" name="nonce" value="">

                            <input id="subs-form-submit" name="Submit" type="submit" value="SUBMIT" />
                            <img src="images/loader3.gif" id="subs-loader" alt="Loading...">
                            <div id="subs-error-container"></div>
                            <div id="subs-response-container"></div>

                        </form>

                    </div>

                </section>
            </div>
        </div>
        <div class="footer-bottom animated fadeInDown clearfix">
            <div class="row">
                <div class="col-sm-7">
                    <p>&copy; Copyright 2016. All Rights Reserved by <a href="{{ URL('admin')}}" id="admin_link">Everyday Home Care LLC </a>| Developed by Tri-Infinity Group</p>
                </div>
                <!--footer social icons-->
                <div class="col-sm-5 clearfix">
                    <ul class="footer-social-nav">
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#top" id="scroll-top"></a>

<script type='text/javascript' id='quick-js'></script>
<script type='text/javascript' src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.swipebox.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.appear.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.ui.core.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.ui.datepicker.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.form.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.autosize.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.velocity.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery-twitterFetcher.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/respond.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>

<script type='text/javascript' src="{{ asset('js/angular.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/angular-control.js') }}"></script>

</body>
</html>