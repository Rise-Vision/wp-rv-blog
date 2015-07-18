<!DOCTYPE html>
<html ng-app="MockupsApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    
    <?php wp_head(); ?>

    <!-- app css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bower_components/rv-common-style/dist/css/rise.min.css" rel="stylesheet" type="text/css">
</head>
<body <?php body_class('website'); ?>>

    <!-- Main View -->
    <nav class="navbar navbar-default navbar-website navbar-static-top" id="sticky-nav">
        <div class="container">
            <div class="navbar-header" style="width: 100%">
                <div class="pull-right">
                    <a href="https://apps-stage-0.risevision.com/signup" class="btn btn-lg btn-primary">Sign Up Free <i class="fa fa-google"></i></a>
                    <a href="https://apps-stage-0.risevision.com/signin" class="btn btn-lg btn-link">Sign In</a>
                </div><!--pull-right-->

                <a href="http://www.risevision.com/" class="navbar-brand hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="img-responsive"></a>

            </div><!--navbar-header-->
        </div><!--container-->
    </nav><!--nav-->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-8">
                    <h1 class="remove-top">Rise Vision Blog</h1>
                    <p class="lead">Product News, Customer Stories and Updates from Rise Vision</p>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <a href="http://www.risevision.com/webinar" class="btn btn-lg btn-default btn-block add-top add-bottom">Sign Up for the Getting Started Webinar</a>
                </div>
            </div>
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="hidden" name="post_type" value="post">
                <div class="input-group add-bottom">
                    <span class="input-group-addon"><i class="fa fa-search fa-lg"></i></span>
                    <input name="s" type="text" class="form-control" placeholder="Search the Blog">
                </div>
            </form>
        </div><!--container-->
    </div>