<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underboot
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,600' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
       <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'underboot' ); ?></a>


       <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'underboot' ); ?></a>
        
        <?php get_template_part('widget-templates/notificationbar'); ?>

        <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">            
            <div class="container">
                <div class="nav-wrapper">
                    <div class="navbar-header">
                        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                        <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Your site title as branding in the menu  -->
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img class="" src="/wp-content/themes/underboot-space/images/icons/ship-white.png" alt="">
                            <?php bloginfo( 'name' ); ?>
                        </a>

                    </div>

                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    ); ?>
                </div>

            </div> <!-- .container -->
        </nav><!-- .site-navigation -->

        <?php if ( is_home() || is_front_page() ) { ?>

        <div class="hs">
            <div class="owl-carousel hs">
                <div class="hs__slide hs__slide--one">
                    <div class="hs_caption">
                        <h2 class="hs__slide__heading">Welcome to the Space Theme</h2>
                        <h3 class="hs__slide__subheading">Built with Bootstrap 4, Underscores and Sass</h3>                        
                    </div>
                </div>
                <div class="hs__slide hs__slide--two"> 
                    <div class="hs_caption">
                        <h2 class="hs__slide__heading">consectetur adipisicing elit </h2>
                        <h3 class="hs__slide__subheading">Magnam ex blanditiis quos distinctio iusto. Accusamus error ut esse earum quam, vel reprehenderit.</h3>   
                        <h3 class="hs__slide__heading"> </h3>
                    </div>
                </div>
                <div class="hs__slide hs__slide--three"> 
                    <div class="hs_caption">
                        <h2 class="hs__slide__heading">dolor impedit illum autem</h2>
                        <h3 class="hs__slide__subheading">ipsam sint reprehenderit, adipisci harum quos nemo. Tenetur dignissimos architecto.</h3>
                    </div>
                </div>
                <div class="hs__slide hs__slide--four"> 
                    <div class="hs_caption">
                        <h2 class="hs__slide__heading">voluptatum ratione assumenda</h2>
                        <h3 class="hs__slide__subheading">Vitae, eligendi totam sequi quas velit eum impedit earum delectus debitis, voluptas minima illum, doloremque officiis.</h3>
                    </div>
                </div>
                <div class="hs__slide hs__slide--five"> 
                    <div class="hs_caption">
                        <h2 class="hs__slide__heading">voluptatum ratione assumenda</h2>
                        <h3 class="hs__slide__subheading">Vitae, eligendi totam sequi quas velit eum impedit earum delectus debitis, voluptas minima illum, doloremque officiis.</h3>
                    </div>
                </div>
                <div class="hs__slide hs__slide--six"> 
                    <div class="hs_caption">
                        <h2 class="hs__slide__heading">voluptatum ratione assumenda</h2>
                        <h3 class="hs__slide__subheading">Vitae, eligendi totam sequi quas velit eum impedit earum delectus debitis, voluptas minima illum, doloremque officiis.</h3>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('widget-templates/hero'); ?>

        <?php } ?>

    </div><!-- .wrapper-navbar end -->
