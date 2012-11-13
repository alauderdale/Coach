<!DOCTYPE html>
<html>
<head>
    <title>
    <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
    <link rel= "shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" /> 
    <!--  outside styles -->  
    <link href="<?php bloginfo('template_url'); ?>/css/royalslider.css" rel="stylesheet">  
    <link href="<?php bloginfo('template_url'); ?>/css/rs-default.css" rel="stylesheet">  
    <link href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" rel="stylesheet">  
    <script  src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.0.min.js"></script>
    <!--  slider -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.royalslider.min.js"></script>
    <!--  fancybox -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
    <!--    tabs-->
    <script src="<?php bloginfo('template_url'); ?>/js/tab.js"></script>
    <!--  custom -->
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="wrapped">
        <a href="<?php echo get_option('home'); ?>">
        <div class="logo">
        </div>
        </a>
        <div class="header-right">
            <div class="header-info">
                <p>visit <a target="_blank" href="http://www.fascatcoaching.com">fascatcoaching.com</a> or call us 720.406.7444</p>
                <nav>
                    <div class="top-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
                    </div>
                </nav>
                <div class="clearfix"></div>
            </div><!--end header info-->
            <div class="slogan">
                <h1>Be a <span class="orange">fascat.</span></h1>
            </div><!--end slogan-->
        </div><!--end header right-->
    </header>
    <div class="clearfix"></div>
    <div id="container">