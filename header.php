<!DOCTYPE html>
<html ng-app="MockupsApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    
    <?php wp_head(); ?>

    <!-- app css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bower_components/rv-common-style/dist/css/rise.min.css" rel="stylesheet" type="text/css">
</head>
<body <?php body_class('website'); ?>>

    <!-- Main View -->
    <nav class="navbar navbar-default navbar-static-top" id="sticky-nav">
        <div class="container">
            <div class="navbar-header" style="width: 100%;">
                <a href="" class="navbar-brand visible-md visible-lg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="img-responsive logo-small"></a>
                <a class="navbar-brand hidden-md hidden-lg text-center" href=""><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="header-search">
                        <form action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input name="s" type="text" class="form-control" placeholder="Search Blog">
                                <input type="hidden" name="post_type" value="post">
                            </div>
                        </form>
                        
                    </li>
                </ul>
            </div><!--navbar-header-->
        </div><!--container-->
    </nav><!--nav-->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-8">
                    <h1>Rise Vision Blog</h1>
                    <p class="lead green-line">Product News, Customer Stories and Updates from Rise Vision</p>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <a href="index.html" class="half-top btn btn-primary btn-lg btn-block">Learn More About Rise Vision</a>
                    <a href="webinars.html" class="btn btn-default btn-lg btn-block">Sign Up for the Getting Started Webinar</a>
                </div>
            </div>
        </div><!--container-->
    </div>