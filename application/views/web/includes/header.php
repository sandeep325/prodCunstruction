<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo ( isset($title) && !empty($title)) ? $title :'prod Construction'; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/front/images/favicon.ico');?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('apple-touch-icon.png');?>">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/bootstrap.min.css');?>">
    <!-- Owl Carousel  main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/owl.theme.default.min.css');?>">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/core.css');?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/shortcode/shortcodes.css');?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/style.css');?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/responsive.css');?>">
    <!-- User style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/custom.css');?>">


    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/front/js/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <div id="header" class="htc-header">
            <!-- Start Header Top -->
            <div class="htc__header__top bg__cat--1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <ul class="heaher__top__left">
                                <li><i class="fa fa-clock-o"></i>7.30 AM  -  9.30 PM</li>
                                <li><a href="#"><i class="fa fa-phone"></i>(001)  25465  258  369</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="header__top__right">
                                <ul class="login-register">
                                    <li><a href="<?php echo('authsystem');?>">LOGIN</a></li>
                                    <li class="separator">/</li>
                                    <li><a href="<?php echo('authsystem');?>">REGISTER</a></li>
                                </ul>
                                <div class="heaher__top__btn">
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="logo">
                                <a href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url('assets/front/images/logo/sinply-construction.png');?>" alt="logo image">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-5">
                            <nav class="main__menu__nav  hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li><a href="<?php echo base_url();?>">HOME</a>
                                        <!-- <ul class="dropdown">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="<?php echo base_url('catpage/about-us');?>">ABOUT</a></li>
                                    <li><a href="<?php echo base_url('services');?>">SERVICES</a></li>
                                    <li class="drop"><a href="#">PROJECTS</a>
                                        <ul class="dropdown">
                                            <li><a href="projects-one.html">projects one</a></li>
                                            <li><a href="projects-two.html">projects two</a></li>
                                            <li><a href="projects-three.html">projects three</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="<?php echo base_url('blog'); ?>">BLOG</a>
                                        <!-- <ul class="dropdown">
                                            
                                            <li><a href="blog-one-column.html">blog 1</a></li>
                                            <li><a href="blog-two-column.html">blog 2</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="<?php echo base_url('catpage/contact-us');?>">CONTACT</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>">Home</a>
                                            <!-- <ul>
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                                <li><a href="index-3.html">Home 03</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="<?php echo base_url('catpage/about-us');?>">ABOUT</a></li>
                                        <li><a href="#">PROJECTS</a>
                                            <ul>
                                                <li><a href="projects-one.html">projects one</a></li>
                                                <li><a href="projects-two.html">projects two</a></li>
                                                <li><a href="projects-three.html">projects three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('blog'); ?>">blog</a>
                                            <!-- <ul>
                                                <li><a href="blog.html">BLog</a></li>
                                                <li><a href="blog-one-column.html">blog one column</a></li>
                                                <li><a href="blog-two-column.html">blog two column</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="<?php echo base_url('catpage/contact-us');?>">contact</a></li>
                                    </ul>
                                </nav>
                            </div> 
                        </div>
                        <div class="col-md-2 col-sm-6 hidden-xs">
                            <div class="htc__header__search">
                                <!-- <input type="text" placeholder="SEARCH">
                                <a href="#"><i class="fa fa-search"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </div>
        <!-- End Header Style -->